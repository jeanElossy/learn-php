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

$fraise = null;
$chocolat = null;
$vanille = null;

$pots = null;
$cornet = null;

$pepites_de_chocolat = null;
$chantilly = null;


foreach($parfums as $parfum => $parfum_price){
  if($parfum === 'Fraise'){
    $fraise = "$parfum : $parfum_price";
  }elseif($parfum === 'Chocolat'){
    $chocolat = "$parfum : $parfum_price";
  }elseif($parfum === 'Vanille'){
    $vanille = "$parfum : $parfum_price";
  }
}


foreach($cornets as $cornets_produit => $cornets_price){
  if($cornets_produit === 'Pots'){
    $pots = "$cornets_produit : $cornets_price";
  }elseif($cornets_produit === 'Cornet'){
    $cornet = "$cornets_produit : $cornets_price";
  }
}

foreach($supplements as $supplement => $supplement_price){
  if($supplement === 'Pepites de chocolat'){
    $pepites_de_chocolat = "$supplement : $supplement_price";
  }elseif($supplement === 'Chantilly'){
    $chantilly = "$supplement : $supplement_price";
  }
}


require 'header.php';
?>



<div class="form ms-5">
  
  <h1 class="h3 text-danger text-center">
    <?= strtoupper('Bienvenue dans notre glacier, passez votre commande.')?>
  </h1>

  <form action="/form.php" method="GET">
    <label><strong>PARFUMS</strong></label>
    <div class="parfums">
      <input type="checkbox" name="parfums[]" value="Fraise"> <?= $fraise.' euros.' ?> <br />
      <input type="checkbox" name="parfums[]" value="Chocolat"> <?= $chocolat.' euros.' ?>  <br />
      <input type="checkbox" name="parfums[]" value="Vanille"> <?= $vanille.' euros.' ?>  <br />  
    </div><br />

    <label><strong>CORNETS</strong></label>
    <div class="cornets">
      <input type="radio" name="cornets"> <?= $pots.' euros.' ?>  <br />
      <input type="radio" name="cornets"> <?= $cornet.' euros.' ?>  <br />
    </div><br />

    <label><strong>SUPPLEMENTS</strong></label>
    <div class="supplements">
      <input type="checkbox" name="supplements[]" value="Fraise"> <?= $pepites_de_chocolat. ' euros.'?> <br />
      <input type="checkbox" name="supplements[]" value="Chocolat"> <?= $chantilly. ' euros.'?>  <br />
    </div>

    <button type="submit" class="mt-5">Calculer</button>

  </form>


  <div class="alert alert-success">

  </div>
</div>