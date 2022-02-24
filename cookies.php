<?php
require 'header.php';
require 'functions.php';

$nom =  $_POST['nom'];

if(!empty($nom)){
  setcookie('nom', $nom, time() + 60 * 60 * 24 * 30);
}

echo 'Bonjour ' . $nom;

?>


<form action="" method="post">
  <div class="form-group">
    <input name="nom" placeholder="Entrez votre nom" type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>