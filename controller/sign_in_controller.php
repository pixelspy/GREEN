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

$n_usr_name = "";

if(isset($_POST['n_usr_name'])){
  $n_usr_name = $_POST['n_usr_name'];
}

$usr_email = "";

if(isset($_POST['usr_email'])){
  $n_usr_name = $_POST['usr_email'];
}

$n_usr_password = "";

if(isset($_POST['n_usr_password'])){
  $n_usr_password = $_POST['n_usr_password'];
}

if(isset($_POST['n_usr_name']) and isset($_POST['n_usr_password'])){
  $user = false;

  if(isset($_POST['usr_email'])){
    // sign up

    $user = addUsr(
      $_POST['n_usr_name'],
      $_POST['usr_email'],
      $_POST['n_usr_password']
    );
  }
  else {
    // sign in

    $user = getUsr(
      $_POST['n_usr_name'],
      $_POST['n_usr_password']
    );
  }

  if($user)
  {
    $_SESSION['n_usr_name'] = $_POST['n_usr_name'];
    $_SESSION['n_usr_password'] = $_POST['n_usr_password'];

    $thisuser = $_SESSION['n_usr_name'];
  }
}

if(Usr()){
  header('Location:http://localhost/~mahana/GREEN/controller/index.php') ;
} else {
  require '../view/sign_in.php';
}
