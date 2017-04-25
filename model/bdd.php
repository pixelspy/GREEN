<?php try {

  $bdd = new PDO('mysql:host=localhost;dbname=blog_cms;charset=utf8', 'phpmyadmin', 'simplon');
}
catch(Exception $e){
  die('Erreur : ' .$e->getMessage());
}
