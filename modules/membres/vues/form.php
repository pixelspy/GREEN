<?php

include CHEMIN_LIB 'form.php';

$form_inscription = new Form('formulaire_inscription');

$form_inscription->method('POST');
$form_inscription->add('Text', 'usr_name')
                  ->label("Your username");

$form_inscription->add('Password', 'n_usr_password')
                  ->label("Your password");

$form_inscription->add('Email', 'usr_email')
                  ->label("Your email");

$form_inscription->add('Submit', 'submit')
                  ->value("Yes! I sign up!");

$form_inscription->bound($_POST);

?>
