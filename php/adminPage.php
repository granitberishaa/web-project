<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
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
    <div>
        <main>
            <section>
                <div>
                    <i style="font-size: 40px; color: cadetblue" class="far fa-bell"></i>
                    <p>Njoftohu me te dhenat e fundit mbi shendetesine</p>
                </div>
                <div>
                    <i style="font-size: 40px; color:cadetblue"  class="fas fa-user-md"></i><br>
                    <p>Kontakto mjekun </p>
                </div>
                <div>
                    <i style="font-size: 40px; color: cadetblue"  class="far fa-heart"></i><br>
                    <p>Usheqehu shendetshem</p>
                </div>
            </section>
            <article>
                <img src="../img/simpotomat.jpg" alt="Simpotomat">
                <div>
                    <h2>Simptomet e hershme te semundjes se zemres!</h2>
                    <p><span>Vështirësitë në gjoks</span><br> Shtypja apo dhembja në gjoks janë treguesit më të shpeshtë që me zemrën tuaj diçka nuk është në rregull. Dhembja e cila përhapet në drejtim të duarve. Lehtë do ta identifikoni, sepse dhembja pothuajse gjithmonë shkon në drejtim të dorës së majtë, prandaj nëse vëreni që po ju dhemb dora ose po ju dridhet, mos humbni asnjë sekondë, por urgjentisht shkoni te mjeku. <br><span>Jeni shumë të lodhur </span><br> Kjo nuk është një lodhje, që mund të vijë nga mungesa e gjumit. Bëhet  fjalë për një lodhje ekstreme
                        <span><a href="#" style="color: #40570e">vazhdoni leximin..</a> </span></p>
                </div>
                <div style="margin-top: 80px">
                    <h2>Si te mbrohemi nga viruset!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, adipisci aperiam atque commodi corporis cum exercitationem impedit itaque iusto maxime nesciunt nobis quas quos sapiente tempora totam veniam vero voluptatem.tque dicta dolor, enim eos error esse eveniet, exercitationem facere facilis, maxime molestias nam neque nobis quas quis sit voluptate. Facere, fuga illo? A, amet consequuntur dolor enim exercitationem perferendis.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus dignissimos, dolore error harum iste porro quos tenetur velit vero. Beatae blanditiis earum fuga impedit labore necessitatibus sequi suscipit veniam!
                        <span><a style="color: #40570e" href="#">vazhdoni leximin...</a></span></p>
                </div>
                <img style="margin-top: 90px" src="../img/virus.jpg" alt="Fotoja e virusit">
            </article>
            <div class="under-section">
                <div class="under-section-box-1">
                    <h3>Pytjet e shpeshta</h3>
                    <ul class="under-section-items">
                        <li><a href="#">Cilat departamente i ka nje qender mjekesore?</a></li>
                        <li><a href="#">Orari i nje mjeku te caktuar?</a></li>
                        <li><a href="#">Cfare dokumenti duhet te keni me vete kur vizitoni nje qender mjekesore?</a></li>
                        <li><a href="#">Sa shpesh duhet te behen analizat?</a></li>
                    </ul>

                </div>
                <div class="under-section-box-2">
                    <i style="color: cadetblue; margin-left: 150px; margin-top: 30px" class="fas fa-phone-square-alt"></i>
                    <p>Per cfare do informate ne lidhje me qendrat mjekesore kontakto ne numrat:</p>
                    <ol id="info-items">
                        <li>044-566-488</li>
                        <li>038-500-600</li>
                        <li>049-400-384</li>
                    </ol>
                </div>
            </div>
            <div id="loginPage" class="modal">
                <span onclick="closeLogin()"
                      class="close" title="Close Modal">&times;</span>
                <form class="modal-content animate" action="/action_page.php">
                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="button" onclick="loginUser()">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="closeLogin()" class="cancelbtn">Cancel</button>
                        <button type="button" onclick="openRegisterPage()" class="registerBtn">Register</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>
            <div id="registerPage" class="modal">
                <span onclick="closeRegister()"
                      class="close" title="Close Modal">&times;</span>
                <form class="modal-content animate" action="/action_page.php">
                    <div class="container">
                        <label for="name"><b>Name</b></label>
                        <input type="text" id="name" placeholder="Enter Name" name="name" required>

                        <label for="surnmae"><b>Surname</b></label>
                        <input type="text" placeholder="Enter Surname" name="surname" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="pswConfirmation"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pswConfirmation" required>

                        <button type="button" onclick="registerUser()">Register</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="closeRegister()" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>
        </main>
        <?php include('../include/footer.php');?>
</body>
</html>