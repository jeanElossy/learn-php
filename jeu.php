<?php 
  require 'header.php';
  $a_deviner = 100;
  $erreur = null;
  $succes = null;
  $value = null;

  if(isset($_GET['chiffre'])){

    if($_GET['chiffre'] > $a_deviner){
      $erreur = 'Le nombre entré est plus grand';
    }elseif($_GET['chiffre'] < $a_deviner){
      $erreur = 'Le nombre entré est plus petit';
    }else {
      $succes = "Bravo! vous avez deviné le nombre qui est: <strong>$a_deviner</strong>";
    }

    $value = (int)$_GET['chiffre'];
  }

?>

<section class="main">

  <div class="title">
    <h1 class="h3 text-center text-danger">Bienvenue sur mon jeu de devinette.</h1>
  </div>

  <form action="/jeu.php" method="GET" class="d-flex justify-content-center my-4">
    <input type="number" name="chiffre" placeholder="Entre 0 et 120" value="<?= $value ?>">
    <button type="submit">Deviner</button>
  </form>

  <?php if($erreur): ?>
    <div class="alert alert-danger">
      <?= $erreur ?>
    </div>
  <?php elseif($succes): ?>
    <div class="alert alert-success">
      <?= $succes ?>
    </div>
  <?php endif ?>

</section>