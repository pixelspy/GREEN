<?php

require '../model/access.php';
include 'session_ctrl.php';


$last = lastArticle();
$lastTen = lastTenArticle();
// $modif_art = modifArticle();


$theUsr = "";
$n_usr_name = "";

if($theUsr)
{
  $thisuser = $_SESSION['n_usr_name'];
}
require '../view/view.php';
