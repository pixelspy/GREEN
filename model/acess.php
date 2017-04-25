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

function addUsr($name, $email, $pwd) {
  include 'bdd.php';

  $req = $bdd->prepare('INSERT INTO new_users(n_usr_name, usr_email, n_usr_password) VALUES(:n_usr_name, :usr_email, :n_usr_password)');
  $req->execute(array(
    'n_usr_name' => $name,
    'usr_email' => $email,
    'n_usr_password' => $pwd
  ));
  return true;
  $req->closeCursor();
}

function lastUsr() {
  include 'bdd.php';
  $req = $bdd->query('SELECT n_usr_name FROM new_users ORDER BY n_usr_id DESC LIMIT 1');
  return $req;
}
