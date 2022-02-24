<?php 
function is_connected(): bool {
  if(session_status() === PHP_SESSION_NONE){
    session_start();
  }
  return !empty($_SESSION['connect']);
}


function user_connected(): void {
  if(!is_connected()){
    header('Location: /login.php');
    exit();
  }
}

?>