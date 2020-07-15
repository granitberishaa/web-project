<?php
if(!isset($_SESSION))
    session_start();

if(!(isset($_SESSION["IsAdmin"]) && $_SESSION["IsAdmin"]))
    header("location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="wrapper">
    <div class="row">
<!--        left-side-->
        <div class="col-sm-3 bg-green"  style="height: auto">
            <img src="../img/logo.png" class="col-sm-5 mt-10" alt="">
            <h1 class="text-center"><a href="index.php">E-Health </a></h1><hr>

            <i class="fas fa-user-md fa-2x col-sm-3"></i>
            <h3><a class="cl-white" href="adminDashboard.php">Dashboard</a></h3><hr>

            <i class="fas fa-user-md fa-2x col-sm-3"></i>
            <h3><a class="cl-white" href="admin_Pacienti.php">Pacienti</a></h3><hr>

<!--            <i class="fas fa-user-md fa-2x col-sm-3"></i>-->
<!--            <h3><a class="cl-white" href="#">Rreth Nesh</a></h3><hr>-->

            <i class="fas fa-user-md fa-2x col-sm-3"></i>
            <h3 class="col-9"><a class="cl-white" href="admin_Mjeku.php">Mjeku</a></h3><hr>

            <i class="fas fa-user-md fa-2x col-sm-3"></i>
            <h3><a class="cl-white" href="admin_Spitalet.php">Spitalet</a></h3><hr>

<!--            <i class="fas fa-user-md fa-2x col-sm-3"></i>-->
<!--            <h3><a class="cl-white" href="#">Settings</a></h3><hr>-->

            <i class="fas fa-user-md fa-2x col-sm-3"></i>
            <h3><a class="cl-white" href="controllers/logout.php">Log out</a></h3>
        </div>

<!--        right-side-->
        <div class="col-sm-8 bg-gr" style="height: auto">
            <i class="fas fa-user-md fa-4x col-sm-4 text-right mt-40"></i>
            <h2 class="col-sm-6 mt-50 ">Admin</h2>

            <form action="" class="col-sm-12 mt-80">

                <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="emri" id="emri" readonly value="<?= $_SESSION['Name'] ?> "><br>
                <label for="mbiemri" class="col-sm-3 mt-10 fz25 ">Mbiemri:</label>
                <input style="width: 50%" type="text" name="mbiemri" id="mbiemri" readonly value="<?= $_SESSION['LastName'] ?>"><br>
                <label for="email" class="col-sm-3 mt-10 fz25 ">Email:</label>
                <input style="width: 50%" type="text" name="email" id="email" readonly value="<?= $_SESSION['Email'] ?>"><br><!-- 
                <label for="password" class="col-sm-3 mt-10 fz25">Password:</label>
                <input style="width: 50%" type="password" name="password" id="password"><br> -->


            </form>
        </div>




    </div>
</div>

</body>
</html>