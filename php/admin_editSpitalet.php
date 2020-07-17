<?php
 session_start();
 require 'controllers/User.php';
 if(!isset($_SESSION['IsAdmin'])){
     $_SESSION["ErrorMessage"] = "Ju nuk keni qasje ne ket faqe";
     
     header("Location: index.php");
     
     exit();
 } else if (isset($_POST["addUser"])){
     $user = new User();
     $user->createUser($_POST['Name'],$_POST['LastName'],$_POST['Age'],$_POST['Gender'],$_POST['Qendra'], $_POST['Email'],$_POST['Password'], 0);
 }  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Pacienti</title>
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

        <div class="col-sm-8 bg-gr" style="height: auto;">
            <!-- <i class="fas fa-user-md fa-4x col-sm-3 text-right mt-40"></i> -->
            <h2 class="col-sm-12 mt-50" style="margin-left:300px"> Edit</h2>
            <!-- <form action="admin_Pacienti.php" class="col-sm-7 mt-40 " method="get"> -->
            <!-- <button class="col-sm-5 " type="submit" name="getUsers">Shiko te gjithe pacientet</button> -->
            <!-- </form> -->
            <?php
        if (isset($_GET['getUsers'])){
    $user = new User();
    $users = $user->getAllUsers(0); 
 }
        ?>
            
             <form  class="col-sm-12 mt-80" action="admin_Spitalet.php" method="post"  enctype="multipart/form-data">
                <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="Name" id="emri"   pattern="[a-zA-Z0-9\s]{5,30}" oninvalid="setCustomValidity('Emri i Qendres Mjekesore duhet te jete te pakten 5 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required ><br>

                <label for="lokacioni" class="col-sm-3 mt-10 fz25 ">Lokacioni:</label>
                <input style="width: 50%" type="text" name="Location" id="lokacioni" pattern="[a-zA-Z0-9\s]{10,20}" oninvalid="setCustomValidity('Lokacioni duhet te jete te pakten 10 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required ><br>

                <label for="emri" ><b>Add picture</b> </label><span>*</span>
                <input class="textbox" name="fileToUpload" id="fileToUpload" type="file"/>


                <div class="col-sm-6"></div>
                <button class="col-sm-3" type="submit" class="submit" name="submit">Ruaj</button><br>


            </form>

        </div>




    </div>
</div>

</body>
</html>