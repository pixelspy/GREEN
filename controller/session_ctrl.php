<?php
session_start();
function Usr() {
  return isset($_SESSION['user_id']);
}

?>
