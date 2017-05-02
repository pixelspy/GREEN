<header class="header row ">
  <a class="col-xs-8 col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>

  <?php if ($thisuser) { ?>
    <a class="col-xs-8 col-lg-2" href="../controller/profilCtrl.php"><p>Bonjour
      <?php echo $thisuser;?> !</p></a>
    <a class="col-xs-4 col-lg-2 col" href="../controller/n_art_controller.php"><p>Add an article</p></a>
    <a class="col-xs-12 col-lg-2 col" href="../controller/logoutCtrl.php"><p>Log out</p></a>

    <?php } else { ?>
      <a href="conceptCtrl.php"><p class="col-xs-8 col-lg-2">Bonjour!</p></a>
      <a class="col-xs-4 col-lg-2 col" href="../controller/sign_up_controller.php"><p>Sign up!</p></a>
      <a class="col-xs-12 col-lg-2 col" href="../controller/sign_up_controller.php"><p>Sign in!</p></a>
    <?php } ?>

</header>
