<?php
require '../model/acess.php';

$art_title = "";
$art_content = "";

$added = false;

if(isset($_POST['art_title']) and isset($_POST['art_content']) ){
  $art_title = $_POST['art_title'];
  $art_content = $_POST['art_content'];

  // add article
  $added = addArticle($art_title, $art_content);
}

if($added) {
  require '../view/view.php';
}
else {
  require '../view/new_article.php';
}
