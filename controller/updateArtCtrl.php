<?php
require '../model/access.php';
include 'session_ctrl.php';

$art_id = 0;

if(isset($_GET['art_id']))
{
  $art_id = $_GET['art_id'];
}

$article = false;

if(Usr()) {
  $article = getArticle($art_id);
}

if($article === false)
{
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
}
else
{
  $art_title = $article['art_title'];

  if(isset($_POST['art_title']))
  {
    $art_title = $_POST['art_title'];
  }

  $art_content = $article['art_content'];

  if(isset($_POST['art_content']))
  {
    $art_content = $_POST['art_content'];
  }

  $modif_result = false;

  if(
    isset($_POST['art_title']) &&
    isset($_POST['art_content'])
  )
  {
    $modif_result = modifArticle(
      $art_id,
      $_POST['art_title'],
      $_POST['art_content']
    );
  }

  if($modif_result){
    header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
  }
  else {
    require '../view/modif_art.php';
  }
}
