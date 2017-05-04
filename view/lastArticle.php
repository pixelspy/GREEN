<div class="theLastArticle row well cardTheLast">
  <div class="">


  <img class="imgLast col-xs-12 col-lg-6" src="../view/img/10.jpg" alt="">
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
</div>
