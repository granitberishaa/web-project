<?php 
session_start();
require('C:\\wamp64\\www\\web-project\\php\\config.php');
$qb = "select * from vizioniYn";
$vizionet = mysqli_query($connection, $qb) or die("Error description: " . mysqli_error($connection));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vizioni yne</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <script type="text/javascript" src="../scripts/indexScript.js"></script>
</head>
<body>
<div class="wrapper">
<div class="wrapper-1">
<?php include('../include/header.php');?>
    <div class="description">
        <h3>Health first, health application second!</h3>
        <h5>Lorem ipsum dolor sit amet consequuntur culpa isi numquam quam rerum saepe, sunt ut voluptate voluptates voluptatum.</h5>
    </div>
</div>
<main>
<?php foreach($vizionet as $vizioni): ?>
    <div class="box">
        <h1><?php echo $vizioni['title']; ?></h1>
        <p><?php echo $vizioni['text']; ?></p>
    </div>
    <div class="box">
        <img src=<?php echo '../img/vizioniYn/'.$vizioni['id'].'.'.$vizioni['photo'];?> alt="Vision-logo">
        <p style="margin-left: 50px"><?php echo $vizioni['text']; ?></p>
    </div>
<?php endforeach; ?>
</main>
<?php include('../include/footer.php');?>
</div>
</body>
</html>