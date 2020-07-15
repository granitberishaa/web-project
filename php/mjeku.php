<?php 
session_start();
require('C:\xampp\htdocs\projekti\webnew\web-project-master\php\config.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <script type="text/javascript" src="../scripts/indexScript.js"></script>
</head>
<body>

<div class="wrapper">
    <?php include('../include/header.php');?>
    <main>
        <h2>Mjeket tone me te vleresuar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at atque impedit ipsa, optio quidem unde vitae voluptatum? Deserunt earum, excepturi id illo laudantium officia omnis praesentium quae repellendus voluptatibus.</p>
        


        <div class="slider">
            <i class=" fas fa-arrow-left" id="prevb"></i>
            <i class="fas fa-arrow-right" id="nextb"></i>
            <div class="slider1">
                <img src="../img/mjeku5.jpg" alt=""  width :"600px" height="450px"  id="lastP" />
                <img src="../img/mjeku7.jpg" alt=""  width :"400px" height="450px"/>

                <img src="../img/mjeku6.jpg" alt=""  width :"500px" height="450px" />
             
                <img src="../img/mjeku4.jpg" alt=""  width :"400px" height="450px" />
                <img src="../img/mjeku3.jpg" alt=""  width :"600px" height="450px" />
                <img src="../img/mjeku4.jpg" alt=""  width :"400px" height="450px" />
                <img src="../img/mjeku3.jpg" alt=""  width :"600px" height="450px" />
                <img src="../img/mjeku2.jpg" alt=""  width :"600px" height="450px" />
                <img src="../img/mjeku6.jpg" alt=""  width :"400px" height="450px"  id="firstP"/>
       
        </div>
    </div>




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



<script >
    const slider= document.querySelector('.slider1');
const sliderimg= document.querySelectorAll('.slider1 img');

const prevbtn=document.querySelector('#prevb');
const nextbtn=document.querySelector('#nextb');

let counter = 1;

const size=sliderimg[0].clientWidth;

slider.style.transform='translateX('+(-size * counter) +'px)';

nextbtn.addEventListener('click', ()=>{
    if(counter>=sliderimg.length-1) return;
slider.style.transition = "transform 0.5s ease-in-out";
counter++;
slider.style.transform= 'translateX('+(-size * counter) +'px)';
});

prevbtn.addEventListener('click', ()=>{
    if (counter <= 0) return;
    slider.style.transition = "transform 0.5s ease-in-out";
    counter--;
    slider.style.transform= 'translateX('+(-size * counter) +'px)';
    });

   slider.addEventListener('transitionend', ()=>{
 if (sliderimg[counter].id==='lastP'){
            slider.style.transition ="none";
            counter=sliderimg.length-2;
            slider.style.transform='translateX('+(-size * counter) +'px)';
        }
        if (sliderimg[counter].id==='firstP'){
            slider.style.transition="none";
            counter=sliderimg.length-counter;
            slider.style.transform='translateX('+(-size * counter) +'px)';
        }

    }); 

</script>







</body>


<!-- slider script -->

</html>