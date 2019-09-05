<?php
session_start();
require_once('../db.php');
insertProduct($_POST['image'], $_POST['nom_prod'],$_POST['senteur_id'],$_POST['type_id'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $_POST['disponibilite']);
header('Location: ../produit.php');die;
