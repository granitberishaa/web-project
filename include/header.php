<?php session_start(); ?>
<header id="top-header">
  <a href="index.php"><img src="../img/logo.png" alt=""></a>
  <ul class="top-icons">
      <li><a href="#">PACIENTI</a></li>
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
              <?php if (isset($_SESSION['IsAdmin']) && $_SESSION['IsAdmin'] == 1): ?>
                  <a href="adminDashboard.php"><p>Admin Dashboard</p></a><br>
              <?php endif; ?>  
                  <a href="mjeku.php"><p>Mjeket</p></a><br>
                  <a href="siguria.php"><p>Siguria</p></a>
              </div>
          </div>
      </li>
      <?php if (!isset($_SESSION['IsAdmin'])): ?>
      <li id="authButton"><button onclick="openLogin()">Login</button></li>
      <li id="authButton"><button onclick="openRegister()">Register</button></li>
      <?php endif; ?>
      <?php if (isset($_SESSION['IsAdmin'])): ?>
      <li id="authButton"><a href="controllers/logout.php">Logout</a></li>
      <?php endif; ?>
  </ul>
</header>