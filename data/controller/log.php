<?php

session_start();

require_once('../db.php');
if (isset($_POST['email']) && isset($_POST['mot_passe'])){
  $_SESSION['email']=$_POST['email'];
  $_SESSION['mot_passe']=$_POST['mot_passe'];
  // var_dump($_SESSION);die;
};
$user = getOneUser($_SESSION['email'], $_SESSION['mot_passe']);
