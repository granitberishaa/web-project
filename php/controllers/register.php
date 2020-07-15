
<?php
session_start();
$_SESSION['ErrorMessage'] = "";
echo isset($_POST['RegisterButton']);

if (isset($_SESSION['IsAdmin'])) {
    header("Location: index.php");
    exit();
} else if (isset($_POST['RegisterButton'])) {

    
//Connection to dtb
    require('../config.php');
    $Name = $_POST['Name'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Gender = strtolower($_POST['Gender']);
    $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT); //Hashing password.


    $sqlCommandForEmail = "SELECT * FROM Users where Email = '$Email'";

    $result2 = mysqli_query($connection, $sqlCommandForEmail);


   if (mysqli_num_rows($result2) >= 1) {
        $_SESSION['ErrorMessage'] = "The email address you have entered is already registered.";
    } else {
        $sql = "insert into users(Password, Email, Name, LastName, Age, Gender, Priority) values ('$Password','$Email','$Name', '$LastName', '$Age','$Gender', 0)";

        mysqli_query($connection, $sql) or die("Error description: " . mysqli_error($connection));

        $_SESSION['Message'] = 'You have been registered succesfully. You can log in now!';
        $_SESSION['RedirectURL'] = '../index.php';
        header("Location: ../index.php");
        exit();
    }
}
?>
