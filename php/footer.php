<div id="loginPage" class="modal" >
                <span onclick="closeLogin()" class="close" title="Close Modal">&times;</span>
                <form name="loginForm" class="modal-content animate" action="controllers/login.php" method="post">
                    <div class="container">
                        <label for="Email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Username" name="Email" required>

                        <label for="Password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="Password" required>

                        <button name="LogInButton" type="subimt" >Login</button>
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
                <form name="registrationForm" class="modal-content animate" action="controllers/register.php" method="post">
                <p class="ErrorMessage"><?= $_SESSION['ErrorMessage']  ?? "" ?></p>
                    <div class="container">
                        <label for="Name"><b>Name</b></label>
                        <input type="text" id="Name" placeholder="Enter Name" name="Name" 
                        pattern="[a-zA-Z0-9\s]{2,20}" oninvalid="setCustomValidity('Please write between 2 and 20 characters ')" onchange="try{setCustomValidity('')}catch(e){}"
                         required>

                        <label for="LastName"><b>Surname</b></label>
                        <input type="text" placeholder="Enter Surname" name="LastName" 
                        pattern="[a-zA-Z0-9\s]{2,20}" oninvalid="setCustomValidity('Please write between 2 and 20 characters ')" onchange="try{setCustomValidity('')}catch(e){}"
                        required>

                        <label for="Email"><b>Email</b></label>
                        
                        <input type="text" placeholder="Enter Email" name="Email"
                        pattern="^\S+@\S+$" oninvalid="setCustomValidity('Please write proper email example@example.com')" onchange="try{setCustomValidity('')}catch(e){}"
                         required>

                        <label for="Age"><b>Age</b></label>
                        <input type="text" placeholder="Enter Age" name="Age" oninvalid="setCustomValidity('age must be between 12-120')"
                        required>

                        <label for="Gender"><b>Gender</b></label>
                        <input type="text" placeholder="Enter Gender" name="Gender" required>

                        <label for="Password"><b>Password</b></label>
                        <input type="Password" placeholder="Enter Password" name="Password" required>

                        <label for="pswConfirmation"><b>Confirm Password</b></label>
                        <input type="Password" placeholder="Enter Password" name="PasswordConfirmation" required>

                        <button name="RegisterButton" type="submit" >Register</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="closeRegister()" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>
            
<footer>
  <div class="container">
      <div class="left-side">
          <div class="left-side-box">
              <img src="../img/logo.png" alt="Logo photo">
              <div>
                  <h3>E-health aplikacioni</h3><br/>
                  <p>info@e-healthcare.com</p>
              </div>
          </div>
          <div class="left-side-box">
              <div>
                  <p>Ky portal mirëmbahet nga kompania "E-health". Materialet dhe informacionet në këtë portal nuk mund të kopjohen, të shtypen, ose të përdoren në çfarëdo forme tjetër për qëllime përfitimi, pa miratimin e drejtuesve të "E-health". Për ta shfrytëzuar materialin e këtij portali obligoheni t'i pranoni Kushtet e përdorimit.</p>
              </div>
          </div>
      </div>
      <div class="right-side">
          <div class="right-side-box-1">
              <h3><a href="hospitals.php">Spitalet</a></h3>
              <h3><a href="rrethNesh.php">Rreth nesh</a></h3>
              <h3><a href="mjeku.php">Mjeket</a></h3>
              <h3><a href="#">Shpallje</a></h3>
          </div>
          <div class="right-side-box-1">
              <h3><a href="#">Lokacionet</a></h3>
              <h3><a href="#">Keshilla</a></h3>
              <h3><a href="#">Shendeti</a></h3>
              <h3><a href="#">Te reja</a></h3>
          </div>
      </div>
  </div>
</footer>