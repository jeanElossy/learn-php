<?php

echo 'Nous sommes disponible entre 8h et 23h';

$time = (int)readline('Entrez votre creneau: ');

function choice_creneau($time){
    if((8 <= $time) && ($time <= 23)){
        echo 'Vous avez choisi ' . $time . "h\n";
    }else{
        echo 'Désolé! nous ne sommes pas disponible pendant e creneau choisi';
    }
}

$creneau = choice_creneau($time);
echo $creneau;

?>