<?php

function addArticle($title, $content) {
  include 'bdd.php';

  $req = $bdd->prepare('INSERT INTO post_articles(art_title, art_content) VALUES(:art_title, :art_content)');
  return $req->execute(array(
    'art_title' => $title,
    'art_content' => $content
  ));
}

function modifArticle($art_id, $new_art_title, $new_art_content) {
  include 'bdd.php';

  $req = $bdd->prepare('UPDATE post_articles SET art_title = :new_art_title, art_content = :new_art_content WHERE art_id = :art_id ');
  return $req->execute(array(
    'art_id' => $art_id,
    'new_art_title' => $new_art_title,
    'new_art_content' => $new_art_content
  ));
}

function lastArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 1')->fetch();
  return $req;
}

function lastTenArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 1, 9')->fetchAll();
  return $req;
}

function getArticle($id) {
  include 'bdd.php';

  $req = $bdd->query("SELECT * FROM post_articles WHERE art_id='$id'")->fetch();
  return $req;
}

function addUsr($name, $email, $pwd) {
  include 'bdd.php';
  $req = $bdd->prepare('INSERT INTO new_users(n_usr_name, usr_email, n_usr_password) VALUES(:n_usr_name, :usr_email, :n_usr_password)');
  return $req->execute(array(
    'n_usr_name' => $name,
    'usr_email' => $email,
    'n_usr_password' => $pwd
  ));
}

function getUsr($name, $password) {
  include 'bdd.php';

  $req = $bdd->query("SELECT * FROM new_users WHERE n_usr_name='$name' AND n_usr_password='$password'")->fetch();
  return $req;
}
