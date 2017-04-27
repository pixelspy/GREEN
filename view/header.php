<header class="header row ">
  <a  class="green col-xs-8 col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>
  <a class="blue col-xs-8 col-lg-2" href="../controller/profilCtrl.php"><p>Bonjour
    <?php
    echo $thisuser;
    ?> !</p></a>

  <a href="../controller/n_art_controller.php"><button class="red col-xs-4 col-lg-2 col" type="button">+</button></a>
  <a href="../controller/sign_up_controller.php"><p class="pink col-xs-12 col-lg-2 col">Connexion</p></a>
  <?php if ($thisuser) { ?>
    <a href="../controller/logoutCtrl.php">Log out</a>
  <?php } ?>


</header>
