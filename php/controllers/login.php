<?php
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
    if ($numberOfRows >= 1) {

        $row = mysqli_fetch_assoc($result); 
        $PasswordDeHashedCheck = password_verify($Password, $row["Password"]);
        $PasswordDeHashedCheck = true;
        if ($PasswordDeHashedCheck == true) {
            echo $PasswordDeHashedCheck;
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['IsAdmin'] = ($row['Priority'] == '1');
            $_SESSION['User_ID'] = $row['User_Id'];

            $_SESSION['Name'] = $row['Name'];
            $_SESSION['LastName'] = $row['LastName'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['RedirectURL'] = '../index.php';
            header("Location: ../index.php");
            exit();
        } else if ($PasswordDeHashedCheck == false) {
            echo $PasswordDeHashedCheck;
            $_SESSION['ErrorMessage'] = "The password you’ve entered is incorrect.";
            $_SESSION['RedirectURL'] = '../index.php';
            header("Location: ../index.php");

        }
    } else {
        $_SESSION['ErrorMessage'] = "The username or email you’ve entered doesn’t match any account.";
    }
}
?>