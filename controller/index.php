<?php
require '../model/acess.php';

$last = lastArticle();
$lastTen = lastTenArticle();

require '../view/view.php';


// require 'n_art_controller.php';
