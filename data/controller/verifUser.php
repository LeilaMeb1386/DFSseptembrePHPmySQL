
<?php
session_start();
// var_dump($_POST);die;
require_once('../db.php');
VerifUser($_POST['mail'], $_POST['mot_passe']);
header('Location: ../index.php');die;
