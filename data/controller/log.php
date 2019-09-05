<?php

session_start();

require_once('../db.php');
if (isset($_POST['nom']) && isset($_POST['mot_passe'])){
  $_SESSION['nom']=$_POST['nom'];
  $_SESSION['mot_passe']=$_POST['mot_passe'];
  // var_dump($_SESSION);die;
};
$user = getOneUser($_SESSION['nom'], $_SESSION['mot_passe']);
header('Location: ../produit.php');die;
