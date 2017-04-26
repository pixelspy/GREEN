<header class="header row">
  <a  class="col-xs-8 col-lg-6" href="../controller/index.php"><h1>GREEN</h1></a>
  <a class="col-xs-2 col-lg-2" href="#"><h3>Bonjour
    <?php
    session_start();
    echo $_SESSION['n_usr_name'];
    ?> !</h3></a>

  <a href="../controller/n_art_controller.php"><button class="col-xs-1 col-lg-2" type="button">+</button></a>
  <a href="../controller/sign_up_controller.php"><p class="col-xs-1 col-lg-2">Connexion</p></a>
  <a href="#">Log Out<?php
  if ($Usr) {
    echo 'Log out';} ?></a>


</header>
