<?php

include './creneau.php';

  $tab = [1, 10, 5, -2, -4, -20];
  $elt = [];
  
  function add($tab, $elt){
    for($i = 0; $i < count($tab); $i++){
      if($tab[$i] < 0){
        $elt[] = $tab[$i];
      }
    }

  }
  echo add($tab, $elt);
  
?>