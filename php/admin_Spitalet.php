<?php
 session_start();
 require("controllers/Upload.php");
 require('C:\\wamp64\\www\\web-project\\php\\config.php');
 if(!isset($_SESSION['IsAdmin'])){
     $_SESSION["ErrorMessage"] = "Ju nuk keni qasje ne ket faqe";
     
     header("Location: index.php");
     exit();

     
 }
		
	
    if(isset($_POST['submit'])){
        $sqlRow = 'SELECT * FROM spitalet';
        $result = mysqli_query($connection, $sqlRow);
        $count = mysqli_num_rows($result) + 1;
	    $name = $_POST['Name'];
	    $location = $_POST['Location'];
        $arr = explode('.',$_FILES['fileToUpload']['name']);
	    $photo = strtolower(end($arr));
	    $date = date("Y-m-d H:i:s");
	    if(empty($name) || empty($location)){
		    echo "<script>alert('Please fill all the fields marked with *.');</script>";
	    }
	    else{
           $sql = "INSERT INTO spitalet (name, location, dateCreated, dateModified, photo) VALUES ('$name', '$location', '$date', '$date', '$photo')";
		    if(upload($count.'.'.$photo, "spitaletImg") && mysqli_query($connection, $sql)) {
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
        <div class="col-sm-8 bg-gr" style="height: auto">
            <i class="fas fa-user-md fa-4x col-sm-3 text-right mt-40"></i>
            <h2 class="col-sm-3 mt-50 ">Spitalet</h2>
            <button class="col-sm-3 mt-50">Shiko te gjitha spitalet</button>

            <form  class="col-sm-12 mt-80" action="admin_Spitalet.php" method="post"  enctype="multipart/form-data">
                <label for="emri" class="col-sm-3 mt-10 fz25 ">Emri:</label>
                <input style="width: 50%" type="text" name="Name" id="emri"   pattern="[a-zA-Z0-9\s]{5,30}" oninvalid="setCustomValidity('Emri i Qendres Mjekesore duhet te jete te pakten 5 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required ><br>

                <label for="lokacioni" class="col-sm-3 mt-10 fz25 ">Lokacioni:</label>
                <input style="width: 50%" type="text" name="Location" id="lokacioni" pattern="[a-zA-Z0-9\s]{10,20}" oninvalid="setCustomValidity('Lokacioni duhet te jete te pakten 10 karaktere')" onchange="try{setCustomValidity('')}catch(e){}" required ><br>

                <label for="emri" ><b>Add picture</b> </label><span>*</span>
			    <input class="textbox" name="fileToUpload" id="fileToUpload" type="file"/>


                <div class="col-sm-6"></div>
                <button class="col-sm-3" type="submit" class="submit" name="submit">Shto spital</button><br>


            </form>
        </div>




    </div>
</div>

</body>
</html>