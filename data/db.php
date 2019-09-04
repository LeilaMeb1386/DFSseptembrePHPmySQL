<?php
const utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

//Function to get all products with their types, quantity and disponibility
function getAllProducts(){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $request = $connec->prepare("SELECT produit.id, produit.nom_prod, produit.description, produit.prix,produit.image,Types.type, Senteur.senteur,quantite, disponibilite, date_ajout_prod FROM produit INNER JOIN Types ON produit.type_id=Types.id inner join Senteur ON produit.senteur_id=Senteur.id;");
  $request->execute();
  return $request->fetchAll();
}

//function to get one products
function getOneProduct($id) {
  $connec = new PDO('mysql:dbname=LillyShop', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT produit.id, produit.nom_prod, produit.description, produit.prix,produit.image,Types.type, Senteur.senteur,quantite, disponibilite, date_ajout_prod FROM produit INNER JOIN Types ON produit.type_id=Types.id inner join Senteur ON produit.senteur_id=Senteur.id  WHERE produit.id = :id; ");
  $request->execute([
    ":id" => $id,
  ]);
  return $request->fetch(PDO::FETCH_ASSOC);
}

//insert product

function insertProduct( $titre, $contenu, $image,  $type, $user_id){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO annonces(titre, contenu,image,type_id, user_id ) VALUES (:titre,:contenu, :image, :type, :user_id);");
  $request->execute([
      ":titre" => $titre,
      ":contenu" => $contenu,
      ":image" => $image,
      ":type" => $type,
      ":user_id" => $user_id,
  ]);
}


// get types
function getAllTypes() {
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000');
  $request = $connec->prepare("SELECT * FROM Types;");
  $request->execute();
  return $request->fetchAll();
}

// get Senteurs
function getAllSenteurs() {
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000');
  $request = $connec->prepare("SELECT * FROM Senteur;");
  $request->execute();
  return $request->fetchAll();
}


//insert user
function insertUser($role_id, $nom, $prenom, $mail, $adresse, $code_postal, $mot_passe){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO Utilisateurs(role_id, nom, prenom, mail, adresse, code_postal, mot_passe) VALUES (:role_id , :nom, :prenom,:mail, :adresse, :code_postal, :mot_passe );");
  $request->execute([
    ":role_id" => $role_id,
    ":nom" => $nom,
    ":prenom" => $prenom,
    ":mail" => $mail,
    ":adresse" => $adresse,
    ":code_postal" => $code_postal,
    ":mot_passe" => $mot_passe,

  ]);
}
