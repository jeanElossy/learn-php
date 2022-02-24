<?php
require 'Creneaux.php';

$creneaux1 = new Creneaux(9, 12);
$creneaux2 = new Creneaux(14, 18);
$creneaux3 = new Creneaux(20, 24);
$creneaux4 = new Creneaux(2, 6);

$voiture_1 = new Voiture('BMW', 'rouge', 490);
$voiture_2 = new Voiture('TOYOTA', 'BLEUE', 680);

var_dump(
    $voiture_1->rapide($voiture_1->vitesse),
    $voiture_2->rapide($voiture_2->vitesse)
);

// var_dump(
//     $creneaux1->includeHeure(10), 
//     $creneaux2->includeHeure(13), 
//     $creneaux3->includeHeure(21), 
//     $creneaux4->includeHeure(3)
// );

//require '../functions.php';
/*$d1 = '2020/02/24';
$d2 = '2022/10/05';

$date_1 = new DateTime($d1);
$date_2 = new DateTime($d2);

$diff = $date_1->diff($date_2, true);
var_dump($diff);
echo "Il y a {$diff->y} années {$diff->m} mois et {$diff->d} jours de difference";

//echo $date->format('d/m/y');
*/




?>