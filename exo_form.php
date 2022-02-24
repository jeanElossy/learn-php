<?php

// checkbox
$parfums = [
  'Fraise' => 10, 
  'Chocolat' => 15,
  'Vanille' => 20
];

//radio
$cornets = [
  'Pots' => 10,
  'Cornet' => 15
];

//checkbox
$supplements = [
  'Pepites de chocolat' => 5,
  'Chantilly' => 10
];

$ingredients = [];
$total = 0;

if(isset($_GET['parfum'])) {
  foreach($_GET['parfum'] as $parfum){
    if(isset($parfums[$parfum])){
      $ingredients[] = $parfum;
      $total += $parfums[$parfum];
    }
  }
}


if(isset($_GET['supplement'])) {
  foreach($_GET['supplement'] as $supplement){
    if(isset($supplements[$supplement])){
      $ingredients[] = $supplement;
      $total += $supplements[$supplement];
    }
  }
}


if(isset($_GET['cornet'])) {
  $cornet = ($_GET['cornet']);
  if(isset($cornets[$cornet])){
    $ingredients[] = $cornet;
    $total += $cornets[$cornet];
  }
}

require 'header.php';
require 'functions.php';

?>



<div class="form ms-5">
  
  <h1 class="h3 text-danger text-center">
    <?= strtoupper('Bienvenue dans notre glacier, passez votre commande.')?>
  </h1>

  <form action="/exo_form.php" method="GET">
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="card">
          <h5 class="text-center">Votre glace</h5>
          <ul>
            <?php foreach($ingredients as $ingredient): ?>
              <li> <?= $ingredient ?></li>
            <?php endforeach ?>
          </ul>
          <em>Total = <?= $total ?>$</em>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
            <h5>Parfums</h5>
            <?php foreach($parfums as $parfum => $prix): ?>
              <div class="checkbox">
                <label>
                  <?= checkbox('parfum', $parfum, $_GET ) ?>
                  <?= "$parfum" ?> - <?= $prix ?>$
                </label>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="col-md-4">
            <h5>Cornets</h5>
            <?php foreach($cornets as $cornet => $prix): ?>
              <div class="radio">
                <label>
                  <?= radio('cornet', $cornet, $_GET ) ?>
                  <?= "$cornet" ?> - <?= $prix ?>$
                </label>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="col-md-4">
            <h5>Supplements</h5>
            <?php foreach($supplements as $supplement => $prix): ?>
              <div class="checkbox">
                <label>
                  <?= checkbox('supplement', $supplement, $_GET ) ?>
                  <?= "$supplement" ?> - <?= $prix ?>$
                </label>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <button type="submit" class="mt-5 btn btn-outline-primary">Composer votre glace</button>

      </div>
    </div>
  </form>

  <pre>
    <h4>$_GET</h4>
    <?php var_dump($_GET) ?>
  </pre>
</div>