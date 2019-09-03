<?php
const utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
//Function to get all products with their types, quantity and disponibility
function getAllProducts(){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $request = $connec->prepare("SELECT produit.id, produit.nom_prod, produit.description, produit.prix,produit.image,Types.type, Senteur.senteur,quantite, disponibilite, date_ajout_prod FROM produit INNER JOIN Types ON produit.type_id=Types.id inner join Senteur ON produit.senteur_id=Senteur.id;");
  $request->execute();
  return $request->fetchAll();
}
