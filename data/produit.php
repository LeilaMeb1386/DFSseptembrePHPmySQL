<?php
session_start();
require_once('./db.php');
  $produits = getAllProducts();
  // $types = getAllTypes();
  // $senteurs = getAllSenteurs();
// //var_dump($comments);die;
// if (isset($_POST['email']) && isset($_POST['mp'])){
//   $_SESSION['email']=$_POST['email'];
//   $_SESSION['mp']=$_POST['mp'];
// $name =$_SESSION['email'];
// $user = getOneUser($_SESSION['email'], $_SESSION['mp']);
// //var_dump($user);die;
// $_SESSION['id'] = $user['id'];
// $_SESSION['pseudo'] = $user['pseudo'];
// $_SESSION['id_role'] = $user['id_role'];
//   };
?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <title></title>
  </head>
  <body>
    <header>

      <nav class="nav">
        <h1 class="Montitre">LillyShop <h1/>
        <form class="formSearch" action="/searchAnnonce.php" method="post">
          <input type="text" name="type" placeholder="Rechercher des Annonces">
          <button class="buttonSearch" type="submit" name="button">
            <img class="imgSearch" src="./img/search.png">
          </button>
        </form>
      </nav>
      <div class="sara">
        <ul class="ul1">
          <li>
            <p class="pseudo_user"> <?php echo $_SESSION['pseudo']?></p>
          </li>

          <li>
            <a href="./home.php">Accueil</a>
          </li>

          <li>
            <a href="./insertAnnonce.php">Déposer une annonce</a>
          </li>
        </ul>
      </div>
      <div class="leila">


            <div class="dropdown">
              <button class="dropbtn"><img class="imgDropDown" src="./img/img.png"></button>
                <div class="dropdown-content">
                  <a href="./help.php">Mes annonces</a>
                  <a href="./settings.php">Paramètres</a>
                    <form action='./controllers/deleteAcountController.php' method='POST'>
                      <input type='hidden' name='id' value="<?php echo $user['id']?>">
                      <input class="delete" type='submit' value='Supprimer mon compte'>
                    </form>
                  <a href="./deconnexion.php">Deconnexion</a>
                </div>
              </div>
          </li>
        </ul>
      </div>
    </header>
    <main>

      <div class="actuality">
        <div class="fil">
          <h1>Produits</h1>
        </div>

        <?php
    foreach(  $produits as $key => $produit):?>

      <div class='post'>


        <div class='user-post'><?=$produit['nom_prod']?>
        </div>
        <div class='comment-post'><?= $produit['description']?>
        </div>
        <div class='comment-post'><?= $produit['type']?>
        </div>
        <div class='comment-post'><?= $produit['senteur']?>
        </div>
        <div class='comment-post'><?= $produit['prix']?>
        </div>

        <?php if (isset($annonce['image'])):?>
        <div class='comment-post'>
        <img class='annonce-image' src='<?=$annonce['image']?>'>
        </div>

      <?php else:?>
        <p></p>
        <?php endif ?>
        <div class='actions'>
          <?php if($_SESSION['id_role'] == 1 || $_SESSION['id'] == $annonce['user_id']){?>
            <form action='./controllers/deleteAnnonceController.php' method='POST'>
            <input type='hidden' name='id' value="<?=$annonce['annonce_id']?>">
            <input class='delete' type='submit' value='Supprimer cette annonce'>
          </form>
                    <?php } ?>


        </div>

      </div>

    <?php endforeach
        ?>
      </div>


    </main>
    <footer></footer>
  </body>
  <script type="text/javascript" src="./js/script.js"></script>
</html> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>

    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Francois+One|Pacifico" rel="stylesheet">

    <title>Candle Shop.</title>
  </head>
  <body>
    <header>
      <div class="nav_bar">
        <div class="bougie">
          <a href="index.php">Accueil</a>
        </div>
        <div class="compte">
          <a href="#">Mon compte</a>
          <a href="#">Panier</a>
        </div>
      </div>
    </header>

    <main>
      <div class="produits">
        <?php

      foreach(  $produits as $key => $produit):?>

        <div class="p1">
            <img src="<?=$produit['image']?>" >
            <p class="prd"><?=$produit['nom_prod']?></p>
            <p class="prd"><?=$produit['type']?></p>
            <p class="prix"><?= $produit['prix']?> € </p>
        </div>
      <?php endforeach
          ?>
    </main>

    <footer id="fh5co-footer" role="contentinfo">
  		<div class="container">
  			<div class="row row-pb-md">
  				<div class="col-md-4 fh5co-widget">
  					<h3>Candle Shop.</h3>
  					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
  				</div>
  				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
  					<ul class="fh5co-footer-links">
  						<li><a href="#">About</a></li>
  						<li><a href="#">Help</a></li>
  						<li><a href="#">Contact</a></li>
  						<li><a href="#">Terms</a></li>
  						<li><a href="#">Meetups</a></li>
  					</ul>
  				</div>

  				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
  					<ul class="fh5co-footer-links">
  						<li><a href="#">Shop</a></li>
  						<li><a href="#">Privacy</a></li>
  						<li><a href="#">Testimonials</a></li>
  						<li><a href="#">Handbook</a></li>
  						<li><a href="#">Held Desk</a></li>
  					</ul>
  				</div>

  				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
  					<ul class="fh5co-footer-links">
  						<li><a href="#">Find Designers</a></li>
  						<li><a href="#">Find Developers</a></li>
  						<li><a href="#">Teams</a></li>
  						<li><a href="#">Advertise</a></li>
  						<li><a href="#">API</a></li>
  					</ul>
  				</div>
  			</div>

  			<div class="row copyright">
  				<div class="col-md-12 text-center">
  					<p>
  						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
  						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
  					</p>
  					<p>
  						<ul class="fh5co-social-icons">
  							<li><a href="#"><i class="icon-twitter"></i></a></li>
  							<li><a href="#"><i class="icon-facebook"></i></a></li>
  							<li><a href="#"><i class="icon-linkedin"></i></a></li>
  							<li><a href="#"><i class="icon-dribbble"></i></a></li>
  						</ul>
  					</p>
  				</div>
  			</div>

  		</div>
  	</footer>

  </body>
</html>
