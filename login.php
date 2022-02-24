<?php 
require_once 'functions.php';

$error = null;
//$password = password_hash(isset($_POST['mdp']), PASSWORD_DEFAULT, ['cost' => 12]);

$password = '$2y$12$peNmQquMcvpq32NfNDD3kOS4eEeMe64S5q5CvX.bhDozeUx.ozdfO';

if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
  if($_POST['pseudo'] === 'willy' && password_verify($_POST['mdp'], $password)){
    session_start();
    $_SESSION['connect'] = 1;
    header('Location: /dashboard.php');
  }else {
    $error = 'Identifiants incorrects';
  }
}else {
  $error = 'Veuillez remplir tous les champs';
}


require_once 'auth.php';

if(is_connected()){
  header('Location: /dashboard.php');
  exit();
}

require_once 'header.php';
?>

<?php if($error): ?>
  <div class="alert alert-danger">
    <?= $error ?>
  </div>
<?php endif ?>


<form action="" method="POST">
  <div class="form-group ms-5">
    <div>
      <input class="form-control" type="text" name="pseudo" placeholder="Entrez votre pseudo">
    </div>
    <div>
      <input class="form-control" type="password" name="mdp" placeholder="Entrez votre mot de passe">
    </div>

    <button type="submit" class="btn btn-primary">Se connecter</button>
  </div>
</form>