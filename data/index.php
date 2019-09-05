<?php
session_start();
require_once('./db.php');
// var_dump('coucou');die;die;die;die;
 $produits = getAllProducts();


// var_dump($produits);die;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet/less" type="text/css" href="style.less" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
          <a href="login.php">Toutes nos bougies</a>

        </div>
        <div class="deco">
          <a href="login.php">Se connecter </a>
        </div>
      </div>
    </header>

    <main>


    <div class="car">
      <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="item active">
            <img src="im4.jpg" style="width:100%;height:50%;">
          </div>



          <div class="item">
            <img src="im3.jpg" style="width:100%;height:50%;">
          </div>

          <div class="item">
            <img src="im.jpg" style="width:100%;height:50%;">
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>


  <div class="produits index_prod">
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
