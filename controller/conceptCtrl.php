<?php
include 'session_ctrl.php';

$theUsr = "";
$n_usr_name = "";

if($theUsr)
{
  $thisuser = $_SESSION['n_usr_name'];
}
require '../view/concept.php';
