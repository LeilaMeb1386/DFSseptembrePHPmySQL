<?php
const utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


function getAllProducts(){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $request = $connec->prepare("SELECT produit.id, produit.nom_prod, produit.description, produit.prix, produit.image, Types.type, Senteur.senteur, quantite, disponibilite, date_ajout_prod FROM produit INNER JOIN Types ON produit.type_id=Types.id inner join Senteur ON produit.senteur_id=Senteur.id;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

//function to get one products
function getOneProduct($id) {
  $connec = new PDO('mysql:dbname=LillyShop', 'root', '0000', utf8);
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT produit.id, produit.nom_prod, produit.description, produit.prix,produit.image,Types.type, Senteur.senteur,quantite, disponibilite, date_ajout_prod FROM produit INNER JOIN Types ON produit.type_id=Types.id inner join Senteur ON produit.senteur_id=Senteur.id  WHERE produit.id = :id; ");
  $request->execute([
    ":id" => $id,
  ]);
  return $request->fetch(PDO::FETCH_ASSOC);
}

//insert product

function insertProduct( $image, $nom_prod, $senteur_id,  $type_id, $description, $prix, $quantite, $disponibilite){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO produit(image, nom_prod, senteur_id, type_id, description, prix, quantite, disponibilite) VALUES (:image, :nom_prod, :senteur_id, :type_id, :description, :prix, :quantite, :disponibilite);");
  $request->execute([
      ":image" => $image,
      ":nom_prod" => $nom_prod,
      ":senteur_id" => $senteur_id,
      ":type_id" => $type_id,
      ":description" => $description,
      ":prix" => $prix,
      ":quantite" => $quantite,
      ":disponibilite" => $disponibilite,

  ]);
}

// //Update products
//
// function updateProduct($image, $nom_prod, $senteur_id,  $type_id, $description, $prix, $quantite, $disponibilite, $date_ajout_prod){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// cette ligne de code permet d'fficher les erreurs PDO
//   $request = $connec->prepare("UPDATE produit SET image = :image, nom_prod = :nom_prod, senteur_id = :senteur_id, type_id = :type_id, description = :description, prix= :prix, quantite = :quantite, disponibilite = :disponibilite, date_ajout_prod = :date_ajout_prod WHERE id = :id ;");
//   $request->execute([
//     ":image" => $image,
//     ":nom_prod" => $nom_prod,
//     ":senteur_id" => $senteur_id,
//     ":type_id" => $type_id,
//     ":description" => $description,
//     ":prix" => $prix,
//     ":quantite" => $quantite,
//     ":disponibilite" => $disponibilite,
//     ":date_ajout_prod)" => $date_ajout_prod),
//
//   ]);
// }

// delete product
function deleteProduct($id){
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("DELETE FROM produit WHERE id = :id ;");
  $request->execute([
    ":id" => $id,
  ]);
}

// /////////CRUD TYPES//////////
//
// get types
function getAllTypes() {
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $request = $connec->prepare("SELECT * FROM Types;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}


//insert TYPE
// function insertType( $type){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $request = $connec->prepare("INSERT INTO Types(type) VALUES (:type);");
//   $request->execute([
//       ":type" => $type,
//
//
//   ]);
// }


//Update Type

// function updateType($type){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// cette ligne de code permet d'fficher les erreurs PDO
//   $request = $connec->prepare("UPDATE Types SET type = :type WHERE id = :id ;");
//   $request->execute([
//     ":type" => $type,
//   ]);
// }


//delete product
// function deleteType($id){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $request = $connec->prepare("DELETE FROM Types WHERE id = :id ;");
//   $request->execute([
//     ":id" => $id,
//   ]);
// }



/////////////CRUD SENTEURS//////////
// get Senteurs
function getAllSenteurs() {
  $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
  $request = $connec->prepare("SELECT * FROM Senteur;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

//insert Senteur
// function inserSenteur( $senteur){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $request = $connec->prepare("INSERT INTO Senteur(senteur) VALUES (:senteur);");
//   $request->execute([
//       ":senteur" => $senteur,
//
//
//   ]);
// }

//Update Senteur

// function updateSenteur($senteur){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// cette ligne de code permet d'fficher les erreurs PDO
//   $request = $connec->prepare("UPDATE Senteur SET senteur = :senteur WHERE id = :id ;");
//   $request->execute([
//     ":senteur" => $senteur,
//   ]);
// }


//delete Senteur
// function deleteSenteur($id){
//   $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
//   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $request = $connec->prepare("DELETE FROM Senteur WHERE id = :id ;");
//   $request->execute([
//     ":id" => $id,
//   ]);
// }


// function to check if user exist:
// FUNCTION VERIFUSER($NOM, $MAIL){
//   $CONNEC = NEW PDO('MYSQL:DBNAME=LILLYSHOP', 'ROOT', '0000');
//   $CONNEC->SETATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $REQUEST = $CONNEC->PREPARE("SELECT NOM, MAIL FROM UTILISATEURS WHERE (NOM = :NOM OR MAIL = :MAIL);");
//   $REQUEST->BINDPARAM(':NOM', $NOM);
//   $REQUEST->BINDPARAM(':MAIL', $MAIL);
//   $REQUEST->EXECUTE();
//   //POUR CHECK SI LE USER EXIST
//   $VERIF = $REQUEST->FETCH(PDO::FETCH_ASSOC);
//    IF($VERIF) {
//      HEADER('LOCATION: ./LOGIN.PHP?RESPONSE=USEREXIST');DIE;
//
//   //RETURN $REQUEST->FETCH(PDO::FETCH_ASSOC);
// }

//get one user
function getOneUser($email, $mot_passe) {
  try{
    $connec = new PDO('mysql:dbname=LillyShop', 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT id, nom, prenom, mail, adresse , Code_postal, role_id FROM Utilisateurs WHERE mail = :email AND mot_passe = :mot_passe;");
    $request->bindParam(':email', $email);
    $request->bindParam(':mot_passe', $mot_passe);
    $request->execute();
    //Pour check si le user exist
    $verif = $request->fetch(PDO::FETCH_ASSOC);
     if($verif){
       $_SESSION = $verif;
       header('Location: ../produit.php');die;
     } else {
       header('Location: ../login.php?status=erreur');die;
     }
  }catch(PDOException $e){
    var_dump($e);
  }
}

//insert user
function insertUser($role_id, $nom, $prenom, $mail, $adresse, $Code_postal, $mot_passe){
    // $ggf =  VerifUser($nom, $mail);
  try{
    $connec = new PDO("mysql:dbname=LillyShop", 'root', '0000', utf8);
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("INSERT INTO Utilisateurs(role_id, nom, prenom, mail, adresse, Code_postal, mot_passe) VALUES (:role_id , :nom, :prenom,:mail, :adresse, :Code_postal, :mot_passe );");
    $request->execute([
      ":role_id" => $role_id,
      ":nom" => $nom,
      ":prenom" => $prenom,
      ":mail" => $mail,
      ":adresse" => $adresse,
      ":Code_postal" => $Code_postal,
      ":mot_passe" => $mot_passe,

    ]);
    header('Location: ../login.php');die;

  }catch(PDOException $e){
      var_dump($e);die;
    }
}
