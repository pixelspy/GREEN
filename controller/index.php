<?php

require '../model/access.php';
include 'session_ctrl.php';


$last = lastArticle();
$lastTen = lastTenArticle();


$theUsr = "";
$n_usr_name = "";

if($theUsr)
{
  $thisuser = $_SESSION['n_usr_name'];
}
require '../view/view.php';
