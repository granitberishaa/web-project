<?php 
if(!isset($_SESSION))
  session_start();
// var_dump($_SESSION);
?>
<header id="top-header">
  <a href="index.php"><img src="../img/logo.png" alt=""></a>
  <ul class="top-icons">
      <!-- <li><a href="#">PACIENTI</a></li> -->
      <li>
          <div class="dropdown">
              <a href="rrethNesh.php"><span class="rrN">RRETH NESH</span></a>
              <div class="dropdown-content">
                  <a href="vizioniYne.php"><p>Vizione yne</p></a>
                  <a href="mjeku.php"><p>Mjeket</p></a><br>
                  <a href="siguria.php"><p>Siguria</p></a>
                  <a href="skuadraJone.php"><p>Skuadra jone</p></a>
              </div>
          </div>
      </li>
      <li><a href="mjeku.php">MJEKU</a></li>
      <li><a href="hospitals.php">SPITALET</a></li>
      <li>
          <div class="dropdown">
              <a href="#"><span class="rrN">MENU</span></a>
              <i style="color: #93c520" class="fas fa-bars"></i>
              <div class="dropdown-content">
                  <a href="vizioniYne.php"><p>Vizioni yne</p></a><br>
                  <a href="mjeku.php"><p>Mjeket</p></a><br>
                  <a href="siguria.php"><p>Siguria</p></a>
                  <?php if(isset($_SESSION["IsAdmin"]) && $_SESSION["IsAdmin"]): ?>
                    <a href="adminDashboard.php"><p>Admin Dashboard</p></a>
                  <?php endif ?>
              </div>
          </div>
      </li>
      <?php if(isset($_SESSION["User_ID"])): ?>
        <li><a href="#"><?= ucfirst($_SESSION["Name"]) ?></a></li>
        <li id="authButton"><button onclick="window.location.href = 'logout.php';">Logout</button></li>
      <?php else: ?>
        <li id="authButton"><button onclick="openLogin()">Login</button></li>
        <li id="authButton"><button onclick="openRegister()">Register</button></li>
      <?php endif ?>
  </ul>
</header>