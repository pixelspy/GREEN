<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    include '../view/headScript.php'; ?>
    <title>Profil</title>
  </head>
  <body class="container">
    <?php include 'header.php'; ?>

    <divclass="row">
      <h1 class="col-xs-12 col-lg-12"> Your last articles : </h1>
    </div>
    <section class="row">
    <?php foreach ($lastTen as $article) { ?>
      <div class="cardArticles col-xs-12 col-lg-4">
        <a href="../controller/art_controller.php">
        <img src="../view/img/2.jpg" alt="">
        <h2 class="cardTitle"> <?php echo $article["art_title"]; ?> </h2>
        <p> <?php echo $article["art_content"]; ?> </p></a>
      </div>
    <?php } ?>
    </section>
  </body>
</html>
