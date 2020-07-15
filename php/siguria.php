<?php 
session_start();
require('C:\\wamp64\\www\\web-project\\php\\config.php');
$qb = "select * from siguria";
$sigurit = mysqli_query($connection, $qb) or die("Error description: " . mysqli_error($connection));

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <script type="text/javascript" src="../scripts/indexScript.js"></script>
    <title>Siguria</title>
</head>
<body>
<div class="wrapper">
    <div class="wrapper-1">
    <?php include('../include/header.php');?>
        <div class="description">
            <h3>Health first, health application second!</h3>
            <h5>Lorem ipsum dolor lorem  amet consequuntur culpa isi numquam quam rerum saepe, sunt ut voluptate voluptates voluptatum.</h5>
        </div>
    </div>
        <main>
        <?php foreach($sigurit as $siguria): ?>
            <div class="box">
                <img style="float: left" src="<?php echo '../img/siguria/'.$siguria['id'].'.'.$siguria['photo'];?>" alt="Vision-logo">
                <p style="margin-right: 60px"><span><?php echo $siguria['text'] ?></span></p>
            </div>
            <div class="box">
                <h1><?php echo $siguria['title'] ?></h1>
                <p><?php echo $siguria['text'] ?></p>
            </div>
        <?php endforeach ?>
        </main>
        <?php include('../include/footer.php');?>
</div>
</body>
</html>