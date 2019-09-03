<?php
  require_once('./db.php');
  require_once('./templates/header.html');
  $produits = getAllProducts();
  $types = getAllTypes();
  $senteur =getAllSenteurs();
 ?>
 <section id="products">
   <h1>All Products</h1>
   <div>
     <table>
      <tr>
        <th>Product</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Disponibility</th>
      </tr>
      <?php
      foreach ($produits as $key => $value) {
        <div class="desc">
          <h3><?= $produit['nom_prod']?></h3>
          <span class="prix"><?= $produit['prix']?></span>
        </div>
