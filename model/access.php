<?php

function addArticle($title, $content) {
  include 'bdd.php';

  $req = $bdd->prepare('INSERT INTO post_articles(art_title, art_content) VALUES(:art_title, :art_content)');
  $req->execute(array(
    'art_title' => $title,
    'art_content' => $content
  ));
  $req->closeCursor();
  return true;
}

function lastArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 1');
  return $req;
}

function lastTenArticle() {
  include 'bdd.php';
  $req = $bdd->query('SELECT * FROM post_articles ORDER BY art_id DESC LIMIT 1, 9');
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
  $req->closeCursor();
  return true;
}



// function verifUsr() {
  /*include 'bdd.php';
  $resp = $bdd -> prepare('SELECT FROM new_users WHERE n_usr_name = :n_usr_name AND n_usr_password = :n_usr_password');
  $resp->execute(array(
    'n_usr_name' => $_POST['n_usr_name'],
    'n_usr_password' => $_POST['n_usr_password']
  ));
  $resp->closeCursor();*/
// }
