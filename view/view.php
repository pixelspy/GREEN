<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="../view/css/style.css">
  <script src="https://use.fontawesome.com/abd2365aee.js"></script>
  <title>GREEN</title>
</head>

<body class="container-fluid">
  <?php include 'header.php'; ?>

  <main class="row">
    <div class="row">
      <img class="col-xs-12 col-lg-6" src="../view/img/1.jpg" alt="">
      <div class="col-xs-12 col-lg-6">
        <h1>Last Article</h1>
        <h2>
        <?php
          echo $last['art_title']; ?>
        </h2>
        <p><?php echo $last['art_content'];?></p>
        <?php
        if ($thisuser) { ?>
          <a href= "../controller/updateArtCtrl.php?art_id=<?php echo $last['art_id']; ?>" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <?php } ?>
      </div>
    </div>

    <div class="row">
      <h1 class="col-xs-12 col-lg-12">Last articles</h1>
    </div>

  <section class="row">
<?php foreach ($lastTen as $value) { ?>
    <div class="cardArticles col-xs-12 col-lg-4">
      <a href="../controller/art_controller.php">
      <img src="../view/img/2.jpg" alt="">
      <h2 class="cardTitle"><?php echo $value["art_title"]; ?></h2>
      <p><?php echo $value["art_content"] ?></p></a>
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
