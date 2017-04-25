<?php

function addArticle($title, $content) {
  include 'bdd.php';

  $req = $bdd->prepare('INSERT INTO post_articles(art_title, art_content) VALUES(:art_title, :art_content)');
  $req->execute(array(
    'art_title' => $title,
    'art_content' => $content
  ));

  return true;
  $req->closeCursor();
}


function lastArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 1');
  return $req;

}


function lastTenArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 0, 9');
  return $req;

}
