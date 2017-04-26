<?php
session_start();
function Usr() {
  return isset($_SESSION['n_user_name']);
}
$thisuser = $_SESSION['n_usr_name'];

?>
