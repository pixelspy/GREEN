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
$last = lastArticle();
$lastTen = lastTenArticle();

//on doit déclarer cette variable(fonction) parceque view.php est appelé ci dessous
// et comprote cette fonction

if($added) {
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
}
else {
  require '../view/new_article.php';
}
