<?php
session_start();

function Usr() {
  return isset($_SESSION['n_usr_name']);
}

$thisuser = "";

if(Usr())
{
  $thisuser = $_SESSION['n_usr_name'];
}
