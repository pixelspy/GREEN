<?php
require '../model/access.php';

//sign in (comparing bdd and user's sign in form)

$_SESSION['n_usr_name'] = "";
$_SESSION['n_usr_password'] = "";

$Usr = false;

if(isset($_POST['n_usr_name']) and isset($_POST['n_usr_password'])){
  $Usr = verifUsr();

  session_start();
  $_SESSION['n_usr_name'] = $_POST['n_usr_name'];
  $_SESSION['n_usr_password'] = $_POST['n_usr_password'];

}

if($Usr){
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
  } else {
    require '../view/sign_up.php';
  }

//sign up (adding users to BDD)
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
