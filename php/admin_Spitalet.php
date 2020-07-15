<?php
 session_start();
 if(!isset($_SESSION['IsAdmin'])){
     $_SESSION["ErrorMessage"] = "Ju nuk keni qasje ne ket faqe";
     
     header("Location: index.php");
     
     exit();
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Spitalet</title>
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
        <?php include ("../include/row.php") ?>

        <!--        right-side-->
        <div class="col-sm-8 bg-gr" style="height: 750px;">
            <i class="fas fa-user-md fa-4x col-sm-3 text-right mt-40"></i>
            <h2 class="col-sm-3 mt-50 ">Spitalet</h2>
            <button class="col-sm-3 mt-50">Shiko te gjitha spitalet</button>

            <form action="" class="col-sm-12 mt-80">
                <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="emri" id="emri"><br>

                <label for="lokacioni" class="col-sm-3 mt-10 fz25 ">Lokacioni:</label>
                <input style="width: 50%" type="text" name="lokacioni" id="lokacioni"><br>


                <div class="col-sm-6"></div>
                <button class="col-sm-3">Shto spital</button><br>


            </form>
        </div>




    </div>
</div>

</body>
</html>