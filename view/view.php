<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php
  include '../view/headScript.php'; ?>
  <script src="https://use.fontawesome.com/abd2365aee.js"></script>
  <title>GREEN</title>
</head>

<body class="container">
  <?php include 'header.php'; ?>

  <main class="row">
    <?php include 'lastArticle.php'; ?>

    <section class="row card">
      <?php foreach ($lastTen as $value) { ?>
        <div class="item well">
          <a href="../controller/art_controller.php">
            <!-- <?php echo '../view/img/' . $value["art_id"] . '.jpg' ?> -->
            <img class= "img-rounded imgCard" src="<?php echo '../view/img/' . $value["art_id"] . '.jpg' ?>" width="500px" alt="">
            <h2 class=""><?php echo $value["art_title"]; ?></h2></a>
            <p><?php echo $value["art_content"] ?></p>
        </div>
      <?php }?>
    </section>

  </main>

  <footer class="row">
    <div class="row">
      <h1 class="col-xs-12 col-lg-2">-G-</h1>
      <h3 class="col-xs-12 col-lg-2">About</h3>
      <h3 class="col-xs-12 col-lg-2">Team</h3>
      <h3 class="col-xs-12 col-lg-2">Contact</h3>
    </div>
    <!-- <ul class="social ">
      <a target="_blank" href="https://www.facebook.com/mahana.houdini"><i class="fa fa-facebook fa-3x "></i></a>
      <a target="_blank" href="https://twitter.com/MahanaD2"><i class="fa fa-twitter fa-3x "></i></a>
      <a target="_blank" href="https://www.instagram.com/mahana_delacour/"><i class="fa fa-instagram fa-3x "></i></a>
      <a target="_blank" href="http://m-a-h-a-n-a.tumblr.com/"><i class="fa fa-tumblr fa-3x "></i></a>
    </ul> -->

  </footer>

</body>
</html>
