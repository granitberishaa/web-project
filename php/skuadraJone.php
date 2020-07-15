<?php 
session_start();
require('C:\\wamp64\\www\\web-project\\php\\config.php');
$qb = "select * from skuadrajone";
$skuadrat = mysqli_query($connection, $qb) or die("Error description: " . mysqli_error($connection));

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
    <title>Skuadra jone</title>
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
        <?php foreach($skuadrat as $skuadra): ?>
        <div class="box">
            <h1> <?php echo $skuadra['title']?></h1>
            <p><?php echo $skuadra['text']?></p>
        </div>
        <div class="box">
            <img src="<?php echo '../img/skuadra/'.$skuadra['id'].'.'.$skuadra['photo'];?>" alt="Vision-logo">
            <p style="margin-left: 40px">Lorem ipsum <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, aspernatur corporis eos expedita illo impedit ipsam, iure, laboriosam magni non pariatur placeat quasi quia quisquam quos sapiente tenetur totam voluptas.</span><span>Aspernatur, iure nesciunt nihil omnis qui repellendus tempore ut vero voluptatum. Inventore labore mollitia possimus repudiandae voluptatem? Asperiores consectetur cumque cupiditate est incidunt necessitatibus qui sint tempora velit voluptatum. Sed.</span> dolor sit amet, consectetur adipisicing elit. Accusamus dolor laudantium minus? Illo odit quae voluptate? Eum impedit, in iure maxime minima nesciunt perferendis quas qui reiciendis repudiandae saepe sequi?</p>
        </div>
        <?php endforeach ?>
    </main>
    <?php include('../include/footer.php');?>
</div>


</body>
</html>