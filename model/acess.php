<?php

function addArticle($title, $content) {
  try {

    $bdd = new PDO('mysql:host=localhost;dbname=blog_cms;charset=utf8', 'phpmyadmin', 'simplon');
  }
  catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
  }

  $req = $bdd->prepare('INSERT INTO post_articles(art_title, art_content) VALUES(:art_title, :art_content)');
  $req->execute(array(
    'art_title' => $title,
    'art_content' => $content
  ));

  return true;
}
