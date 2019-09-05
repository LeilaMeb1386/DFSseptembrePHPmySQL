
<?php
require_once('../db.php');
deleteProduct($_POST['id']);
header('Location: ../produit.php');die;
