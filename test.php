<?php  

    $response = null;
    
    $consigne = "O: Continuer\nN: Arret de la transaction.\n";
    echo "$consigne \n";
    
    function response_yes_no($response){
        while(TRUE){
            $response = readline('Voulez-vous continuer? ');
            
            if((strtolower($response) === 'o') || (strtolower($response) === 'oui')){
                echo "Continuons...\n";
            }
            elseif((strtolower($response) === 'n') || (strtolower($response) === 'non')){
                echo "Transaction echoué !\n";
                break;
            }
            else {
                echo "Désolé commande inconnue \n";
            }
        }
    }   
    echo response_yes_no($response);
?>

