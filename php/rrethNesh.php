<?php 
session_start();
require('C:\\wamp64\\www\\web-project\\php\\config.php');
$qb = "select * from aboutUs";
$aboutuss = mysqli_query($connection, $qb) or die("Error description: " . mysqli_error($connection));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rreth Nesh</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <script type="text/javascript" src="../scripts/indexScript.js"></script>
</head>
<body>

<div class="wrapper">
    <?php include('../include/header.php'); ?>
    <main>
    <?php foreach($aboutuss as $aboutus): ?>
        <div class="box">
            <h1><?php echo $aboutus['title']; ?></h1>
            <p><?php echo $aboutus['text']; ?></p>
        </div>
        <div class="box">   
            <img src="<?php echo '../img/aboutUsImg/'.$aboutus['id'].'.'.$aboutus['photo'];?>" alt="Vision-logo">
        </div>
    <?php endforeach; ?>
    </main>
    <?php include('../include/footer.php');?>

</div>

</body>
</html>