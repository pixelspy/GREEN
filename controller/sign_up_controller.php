<?php
require '../model/acess.php';

$n_usr_name = "";
$usr_email = "";
$n_usr_password = "";

$newAdd = false;

if(isset($_POST['n_usr_name']) and isset($_POST['usr_email']) and isset($_POST['n_usr_password'])){
  $n_usr_name = $_POST['n_usr_name'];
  $usr_email = $_POST['usr_email'];
  $n_usr_password = $_POST['n_usr_password'];

  $newAdd = addUsr($n_usr_name, $usr_email, $n_usr_password);
}

if($newAdd){
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
}
else{
  require '../view/sign_up.php';
}
