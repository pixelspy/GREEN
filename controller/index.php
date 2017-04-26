<?php
require '../model/access.php';

$last = lastArticle();
$lastTen = lastTenArticle();

// if(isset($_POST['n_usr_name']) and isset($_POST['usr_email']) and isset($_POST['n_usr_password'])){
//   $n_usr_name = $_SESSION['n_usr_name'];
//   $usr_email = $_SESSION['usr_email'];
//   $n_usr_password = $_SESSION['n_usr_password'];
// }
// $lastUsr = lastUsr();

$verifUsr = verifUsr();

$n_usr_name = "";

if($verifUsr)
{
  $n_usr_name = $_SESSION['n_usr_name'];
}

require '../view/view.php';
