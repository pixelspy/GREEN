<?php
require '../model/access.php';

include 'session_ctrl.php';
//sign in (comparing bdd and user's sign in form)
// $n_usr_name = $_POST['n_usr_name'];
// $usr_email = "";
// $n_usr_password = $_POST['n_user_password'];
//
// $_SESSION['n_usr_name'] = "";
// $_SESSION['n_usr_password'] = "";

$theUsr = false;

if(isset($_POST['n_usr_name']) and isset($_POST['n_usr_password'])){
  include '../model/bdd.php';
  $resp = $bdd -> prepare ('SELECT * FROM new_users WHERE n_usr_name = :n_usr_name AND n_usr_password = :n_usr_password');
  $resp -> execute(array(
    'n_usr_name' => $_POST['n_usr_name'],
    'n_usr_password' => $_POST['n_usr_password']
  ));

  $theUsr = Usr();

  $_SESSION['n_usr_name'] = $_POST['n_usr_name'];
  $_SESSION['n_usr_password'] = $_POST['n_usr_password'];

}

//sign up (adding users to BDD)


$newAdd = false;

if(isset($_POST['n_usr_name']) and isset($_POST['usr_email']) and isset($_POST['n_usr_password'])){
  $n_usr_name = $_POST['n_usr_name'];
  $usr_email = $_POST['usr_email'];
  $n_usr_password = $_POST['n_usr_password'];

  $newAdd = addUsr($n_usr_name, $usr_email, $n_usr_password);
}


if($theUsr){
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
  } else {
    require '../view/sign_up.php';
  }
