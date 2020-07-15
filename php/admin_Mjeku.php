<?php
 session_start();
 require 'controllers/User.php';
 if(!isset($_SESSION['IsAdmin'])){
    $_SESSION["ErrorMessage"] = "Ju nuk keni qasje ne ket faqe";
     
    header("Location: index.php");
    
    exit();
 }else if (isset($_GET['getAdmins'])){
    $user = new User();
    $users = $user->getAllUsers(1);
    
     
 } else if (isset($_POST["addAdmin"])){
     $user = new User();
     $user->createUser($_POST['Name'],$_POST['LastName'],$_POST['Age'],$_POST['Gender'],$_POST['Qendra'], $_POST['Email'],$_POST['Password'], 1);
 }  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Mjeku</title>
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
       <?php include ("../include/row.php") ?>
        <!--        right-side-->
        <div class="col-sm-8 bg-gr" style="height: 750px;">
            <i class="fas fa-user-md fa-4x col-sm-3 text-right mt-40"></i>
            <h2 class="col-sm-3 mt-50 ">Mjeku</h2>
            <form action="admin_Mjeku.php" class="col-sm-12 mt-80" method="get">
            <button class="col-sm-3 mt-50" type="submit" name="getAdmins">Shiko te gjithe mjeket</button>
            </form>

            <form action="admin_Mjeku.php" class="col-sm-12 mt-80" method="post">
                <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="emri" id="emri"><br>
                <label for="mbiemri" class="col-sm-3 mt-10 fz25 ">Mbiemri:</label>
                <input style="width: 50%" type="text" name="mbiemri" id="mbiemri"><br>
                <label for="mosha" class="col-sm-3 mt-10 fz25 ">Mosha :</label>
                <input style="width: 50%" type="text" name="mosha" id="mosha"><br>
                <label for="gjinia" class="col-sm-3 mt-10 fz25 ">Gjinia :</label>
                <input style="width: 50%" type="text" name="gjinia" id="gjinia"><br>

                <label for="qendraMjekesore" class="col-sm-3 mt-10 fz25 ">Qendra :</label>
                <input style="width: 50%" type="text" name="qendraMjekesore" id="qendraMjekesore"><br>

                <label for="email" class="col-sm-3 mt-10 fz25 ">Email:</label>
                <input style="width: 50%" type="text" name="email" id="email"><br>
                <label for="password" class="col-sm-3 mt-10 fz25 ">Password:</label>
                <input style="width: 50%" type="password" name="password" id="password"><br>
                <div class="col-sm-6"></div>
                <button type="sumbit" name="addAdmin" class="col-sm-3">Shto mjek</button><br>


            </form>
        </div>




    </div>
</div>

</body>
</html>