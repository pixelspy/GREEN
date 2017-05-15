<header class="header container">
  <?php if ($thisuser) { ?>
    <!-- on mobile -->
  <div class="hidden-lg visible-xs headerBox row">
    <a class=" col-xs-8 col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>
    <div class="align-self-sm-center btnClass col-xs-4 visible-xs btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        <span class="caret"></span></a></button>
        <ul class="dropdown-menu">
          <li><a class="col-xs-8 col-lg-2" href="../controller/profilCtrl.php"><p>Bonjour
            <?php echo $thisuser;?> !</p></a></li>
          <li><a class="col-xs-4 col-lg-2 col" href="../controller/n_art_controller.php"><p>Add an article</p></a></li>
          <li><a class="col-xs-12 col-lg-2 col" href="../controller/logoutCtrl.php"><p>Log out</p></a></li>
        </ul>
    </div>
  </div>
  <!-- on desktop -->
  <div class="hidden-xs visible-lg row">
    <a class="col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>
    <a class="col-lg-2" href="../controller/profilCtrl.php"><p>Bonjour
    <?php echo $thisuser;?> !</p></a>
    <a class="col-lg-2 col" href="../controller/n_art_controller.php"><p>Add an article</p></a>
    <a class="col-lg-2 col" href="../controller/logoutCtrl.php"><p>Log out</p></a>
  </div>


    <?php } else { ?>
      <!-- on mobile -->
      <div class="hidden-lg visible-xs headerBox row">
        <a class=" col-xs-8 col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>
        <div class="col-xs-4 hidden-lg visible-xs btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            <span class="caret"></span></a></button>
            <ul class="dropdown-menu">
              <li><a class="col-xs-2 col-lg-2" href="../controller/conceptCtrl.php"><p>About</p></a></li>
              <li><a class="col-xs-2 col-lg-2 col" href="../controller/sign_up_controller.php"><p>Sign up!</p></a></li>
              <li><a class="col-xs-2 col-lg-2 col" href="../controller/sign_in_controller.php"><p>Sign in!</p></a></li>
            </ul>
          </div>
      </div>
        <!-- on desktop -->
      <div class="hidden-xs visible-lg row">
        <a class="col-lg-6 col" href="../controller/index.php"><h1>GREEN</h1></a>
        <a class="col-xs-2 col-lg-2" href="conceptCtrl.php"><p>About</p></a>
        <a class="col-xs-2 col-lg-2 col" href="../controller/sign_up_controller.php"><p>Sign up!</p></a>
        <a class="col-xs-2 col-lg-2 col" href="../controller/sign_in_controller.php"><p>Sign in!</p></a>
    </div>
    <?php } ?>

</header>
