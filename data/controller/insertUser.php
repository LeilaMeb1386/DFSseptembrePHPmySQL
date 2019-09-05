<?php
require_once('../db.php');
//var_dump($_POST);die;
insertUser( $_POST['role_id'], $_POST['nom'],  $_POST['prenom'], $_POST['mail'], $_POST['adresse'], $_POST['Code_postal'], $_POST['mot_passe']);
header('Location: ../login.php');die;
