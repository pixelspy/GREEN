<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Post Article</title>
  <?php
  include '../view/headScript.php'; ?>
</head>
<body class="container">
  <?php include 'header.php'; ?>

  <main class="row">
    <form class="add-article row" method="post" action="../controller/n_art_controller.php">
      <input type="text" name="art_title" value="<?= $art_title ?>" placeholder="Title" >
      <textarea name="art_content" rows="8" cols="60"><?= $art_content ?></textarea>
      <button class="btn btn-block btn-default" type="submit">Submit</button>
    </form>
  </main>

</body>
</html>
