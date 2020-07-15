<?php 
session_start();
require('C:\\wamp64\\www\\web-project\\php\\config.php');
$qb = "select * from Users where Priority = '1'";
$mjeket = mysqli_query($connection, $qb) or die("Error description: " . mysqli_error($connection));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mjeku</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mjeku.css">
    <script type="text/javascript" src="../scripts/indexScript.js"></script>
</head>
<body>

<div class="wrapper">
    <?php include('../include/header.php');?>
    <main>
        <h2>Mjeket tone me te vleresuar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at atque impedit ipsa, optio quidem unde vitae voluptatum? Deserunt earum, excepturi id illo laudantium officia omnis praesentium quae repellendus voluptatibus.</p>
        <div class="box">
        <?php foreach($mjeket as $mjek): ?>
            <div class="box-1"><img class="imgSz" src="<?php echo '../img/mjeket/'.$mjek['User_Id'].'.'.$mjek['photo'];?>" alt=""><br><p><?php echo "Dr.".$mjek['Name']." ".$mjek['LastName'] ?></p></div>
        <?php endforeach ?>
         </div>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias atque autem consequatur consequuntur dicta doloribus eius eos explicabo ipsam iste, itaque laudantium neque perspiciatis recusandae repudiandae sapiente tenetur ut.</span><span>Cum dicta ducimus esse eveniet ex, illo inventore iure maiores, minus mollitia necessitatibus nobis nostrum porro. Ad amet aspernatur commodi deserunt eos illo, magni molestias mollitia quasi repellat similique voluptatibus?</span></p>

        <div class="box">
            <div class="box-2"><img style="width: 100%" src="../img/mjeket.jpg" alt="mjeket"></div>
            <div class="box-2"><h3 style="font-size: 25px; font-family: 'Segoe Print'; color: #5c5c5c; margin-left: 20px">Stomatologet me te perzgjedhur te repartit</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque deleniti eius error fuga modi recusandae rem tenetur. Debitis eaque est harum natus voluptatibus! Eligendi eveniet minus nostrum perspiciatis praesentium.</p></div>
        </div>

    </main>
    <?php include('../include/footer.php');?>
</div>

</body>
</html>