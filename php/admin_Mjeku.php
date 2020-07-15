<?php
 session_start();
 require 'controllers/User.php';
 if(!isset($_SESSION['IsAdmin'])){
    $_SESSION["ErrorMessage"] = "Ju nuk keni casje ne kete faqe";
     
    header("Location: index.php");
    
    exit();
 // }else if (isset($_GET['getAdmins'])){
 //    $user = new User();
 //    $users = $user->getAllUsers(1);
    
     
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
        <div class="col-sm-8 bg-gr" style="height: auto;">
            <!-- <i class="fas fa-user-md fa-4x col-sm-3 text-right mt-40"></i> -->
            <h2 class="col-sm-3 mt-50 ">Mjeku</h2>
            <form action="admin_Mjeku.php" class="col-sm-12" method="get">
            <button class="col-sm-3" type="submit" name="getAdmins">Shiko te gjithe mjeket</button>
            </form>
            <?php
        if (isset($_GET['getAdmins'])){
    $user = new User();
    $users = $user->getAllUsers(1); 
 }
        ?>

        <form action="admin_Mjeku.php" class="col-sm-12" method="post">
              <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="Name" id="emri"   pattern="[a-zA-Z0-9\s]{3,20}" oninvalid="setCustomValidity('Emri juaj duhet te jete te pakten 3 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required ><br>

                <label for="mbiemri" class="col-sm-3 mt-10 fz25 ">Mbiemri:</label>
                <input style="width: 50%" type="text" name="LastName" id="mbiemri" pattern="[a-zA-Z0-9\s]{3,20}" oninvalid="setCustomValidity('Mbiemri juaj duhet te jete te pakten 3 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required><br>
                
                <label for="mosha" class="col-sm-3 mt-10 fz25 ">Mosha :</label>
                <input style="width: 50%" type="text" name="Age" id="mosha" pattern="[a-zA-Z0-9\s]{2,20}"  oninvalid="setCustomValidity('Mosha duhet te jete 12-100')" onchange="try{setCustomValidity('')}catch(e){}" required><br>
                
                <label for="gjinia" class="col-sm-3 mt-10 fz25 ">Gjinia :</label>
                <input style="width: 50%" type="text" name="Gender" id="gjinia" required><br>

                <label for="qendraMjekesore" class="col-sm-3 mt-10 fz25 ">Qendra :</label>
                <input style="width: 50%" type="text" name="Qendra" id="qendraMjekesore" pattern="[a-zA-Z0-9\s]{1,30}"  oninvalid="setCustomValidity('Numi i Qendres duhet te jete 1-30')" onchange="try{setCustomValidity('')}catch(e){}"  required><br>

                <label for="email" class="col-sm-3 mt-10 fz25 ">Email:</label>
                <input style="width: 50%" type="text" name="Email" id="email"   pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" oninvalid="setCustomValidity('Ju lutem shkruani email-in ne menyre korrekte, psh. example@example.com')" onchange="try{setCustomValidity('')}catch(e){}" required><br>
                
                <label for="password" class="col-sm-3 mt-10 fz25 ">Password:</label>
                <input style="width: 50%" type="password" name="Password" id="password" pattern="[a-zA-Z0-9\s]{8,50}"  oninvalid="setCustomValidity('Passwordi duhet te kete te pakten 8 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required><br>
                
                <div class="col-sm-6"></div>
                <button type="sumbit" name="addAdmin" class="col-sm-3">Shto mjek</button><br>


            </form>
        </div>




    </div>
</div>

</body>
</html>