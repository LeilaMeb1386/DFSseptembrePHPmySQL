<?php
session_start();
require_once('./db.php');
// $user = getOneUser($_SESSION['nom'], $_SESSION['mot_passe']);
//
// $_SESSION['id'] = $user['id'];
// $_SESSION['mail'] = $user['mail'];

$idproduct = $_POST['idproduct'];
  $produit = getOneProduct($idproduct);
  $types = getAllTypes();
  $senteurs = getAllSenteurs();


?>




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

        </div>
        <div class="compte">
          <a href="#">Mon compte</a>
          <a href="#">Panier</a>
        </div>
        <div class="deco">
            <a href="deconnexion.php">Deconnexion</a>
            <a href="produit.php">Toute nos bougies</a>
        </div>
      </div>
    </header>

    <main>

    <div class='box'>
      <div class='box-form'>
        <div class='box-login-tab'></div>
        <div class='box-login-title'>
          <div class='i i-login'></div><h2>Nouveau produit</h2>
        </div>
        <div class='box-login'>
          <div class='fieldset-body' id='login_form'>
           <form action="./controller/insertprod.php" method="post">

              <p class='field'>
              <label for='user'>IMAGE</label>
              <input type='text' id='user' name='image' title='nom' />
              <span id='valida' class='i i-warning'></span>
              </p>
                <p class='field'>
                <label for='user'>NOM</label>
                <input type='text' id='user' name='nom_prod' title='prenom' />
                <span id='valida' class='i i-warning'></span>
                </p>
                <p class='field'>
                <label for='user'>SENTEUR</label>
                <select class="" name="senteur_id">
                <?php
                  foreach ($senteurs as $senteur) {
                    $id = $senteur['id'];
                    $senteur = $senteur['senteur'];
                    echo "<option value='$id'>$senteur</option>";
                  }
                ?>
              </select>

                <span id='valida' class='i i-warning'></span>
              </p>
                <p class='field'>
                <label for='user'>TYPE</label>
                <select class="" name="type_id">
                  <?php
                    foreach ($types as $type) {
                      $id = $type['id'];
                      $type = $type['type'];
                      echo "<option value='$id'>$type</option>";
                    }
                  ?>
                </select>

                <span id='valida' class='i i-warning'></span>
              </p>
                <p class='field'>
                <label for='user'>dESCRIPTION</label>
                <textarea type='text' id='user' name='description' title='Code_postal' /></textarea>
                <span id='valida' class='i i-warning'></span>
              </p>

              <p class='field'>
              <label for='pass'>PRIX</label>
              <input type='text' id='pass' name='prix' title='mot_passe' />
              <span id='valida' class='i i-close'></span>
            </p>

              	  <p class='field'>
                  <label for='pass'>QUANTITE</label>
                  <input type='number' id='pass' name='quantite' title='mot_passe' />
                  <span id='valida' class='i i-close'></span>
                </p>
                <p class='field'>
                <label for='pass'>DISPONIBILITE</label>
                <input type='number' id='pass' name='disponibilite' title='mot_passe' />
                <span id='valida' class='i i-close'></span>
              </p>



            	<input type='submit' id='do_login' value='Ajouter' title='Ajouter le nouveau produit' />
          </form>
          </div>
        </div>
      </div>














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
