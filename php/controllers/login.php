<?php
session_start();
if (isset($_SESSION['IsAdmin'])) {
    header("Location: ../php/index.php");
    exit();
} else if (isset($_POST['LogInButton'])) {

    require('../config.php');

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sqlcommand = "Select * from users where Email = '$Email'"; 
    $result = mysqli_query($connection, $sqlcommand);
    $numberOfRows = mysqli_num_rows($result); 
    if ($numberOfRows == 1) {
        $row = mysqli_fetch_assoc($result); 
        
        $PasswordDeHashedCheck = password_verify($Password, $row["Password"]);
        if ($PasswordDeHashedCheck == true) {
            $_SESSION['IsAdmin'] = $row['Priority'];
            $_SESSION['User_Id'] = $row['User_Id'];
            $name = $row['Name'] . ' ' . $row['LastName'];
            $_SESSION['RedirectURL'] = '../index.php';
            header("Location: ../index.php");
        } else if ($PasswordDeHashedCheck == false) {
            $_SESSION['ErrorMessage'] = "The password you’ve entered is incorrect.";
            echo "<script>alert('not updated user.');</script>";
            $_SESSION['RedirectURL'] = '../index.php';
            header("Location: ../index.php");

        }
    } else {
        $_SESSION['ErrorMessage'] = "The username or email you’ve entered doesn’t match any account.";
    }
}
?>