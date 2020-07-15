<?php
 session_start();
 require 'controllers/User.php';
 require("controllers/Upload.php");
 require('C:\\wamp64\\www\\web-project\\php\\config.php');

 if(!isset($_SESSION['IsAdmin'])){
     $_SESSION["ErrorMessage"] = "Ju nuk keni qasje ne ket faqe";
     
     header("Location: index.php");
     
     exit();
 } else if (isset($_POST["sumbit"])){
    $sqlRow = 'SELECT * FROM users';
    $result = mysqli_query($connection, $sqlRow);
    $count1 = mysqli_num_rows($result) + 1;
    $name = $_POST['Name'];
    $arr = explode('.',$_FILES['fileToUpload']['name']);
    $photo = strtolower(end($arr));
    $date = date("Y-m-d H:i:s");
    $user = new User();
    if(empty($name) || empty($_POST['LastName']) || empty($_POST['Age']) || empty($_POST['Gender']) || empty($_POST['Qendra']) || empty($_POST['Email']) || empty($_POST['Password'])){
        echo "<script>alert('Please fill all the fields marked with *.');</script>";
    } else {
         if(upload($count1.'.'.$photo, "usersImg") && $user->createUser($_POST['Name'],$_POST['LastName'],$_POST['Age'],$_POST['Gender'],$_POST['Qendra'], $_POST['Email'],$_POST['Password'] , 1, $photo, $date, $date)) {
             echo "<script>alert('Successfully created product.');</script>";
         } else {
             echo "<script>alert('A problem occurred creating product.');</script>";
         }
    }
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
            <form action="admin_Mjeku.php" class="col-sm-12 " method="get">
            <button class="col-sm-3" type="submit" name="getAdmins">Shiko te gjithe mjeket</button>
            </form>
            <?php
            if (isset($_GET['getAdmins'])){
                $user = new User();
                $users = $user->getAllUsers(1); 
            }
            ?>
            <form action="admin_Mjeku.php" method="post" class="col-sm-12 mt-80" enctype="multipart/form-data">
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
                
                <label for="emri" ><b>Add picture</b> </label><span>*</span>
			    <input class="textbox" name="fileToUpload" id="fileToUpload" type="file"/>

                <div class="col-sm-6"></div>
                <button type="sumbit" name="sumbit" class="col-sm-3" class="submit">Shto pacient</button><br>


            </form>
        </div>
    </div>
</div>
</body>
</html>