<?php
session_start();

if (!isset($_SESSION['IsAdmin'])) {
  header("Location: ../index.php");
  exit();
  //Nese eshte bere login por nuk eshte admin.
} else if (isset($_GET['edit'])) {
  require('C:\\wamp64\\www\\web-project\\php\\config.php');
  $_SESSION['edit'] = $_GET['edit'];
  $hospital = $_SESSION['edit'];

  //Merre emrin e artikullit per ta shfaqur ne H1
  $UserCommand = "DELETE from spitalet where id = '$hospital'";
  $Query = mysqli_query($connection, $UserCommand);
  $_SESSION['RedirectURL'] = '../admin_Spitalet.php';
  header("Location: ../admin_Spitalet.php");
}
?>