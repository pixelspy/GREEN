<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/css/style.css">
    <title>Profil</title>
  </head>
  <body class="container-fluid">
    <?php include 'header.php'; ?>

    <divclass="row">
      <h1 class="col-xs-12 col-lg-12"> Your last articles : </h1>
    </div>
    <section class="row">
  <?php foreach ($lastTen as $e) {

  echo '<div class="cardArticles col-xs-12 col-lg-4">
        <a href="../controller/art_controller.php">
        <img src="../view/img/2.jpg" alt="">
        <h2 class="cardTitle">' . $e["art_title"] . '</h2>
        <p>' . $e["art_content"] . '</p></a>
      </div>';
  } ?>
      </section>
  </body>
</html>
