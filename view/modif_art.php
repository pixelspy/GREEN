<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modify <?php echo $art_title; ?></title>
    <?php
    include '../view/headScript.php'; ?>
  </head>

  <body class="container">
    <main class="row">
      <?php include 'header.php'; ?>
        <form class="add-article row" method="post" action="../controller/updateArtCtrl.php?art_id=<?php echo $art_id; ?>">
          <input type="text" name="art_title" value="<?php echo $art_title; ?>">
          <textarea name="art_content" rows="8" cols="60"><?php echo $art_content; ?></textarea>
          <button class="btn btn-block btn-default" type="submit">Submit</button>
        </form>
    </main>
  </body>
</html>
