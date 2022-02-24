<?php
require_once 'Messages.php';

$title = "Livre d'or";
$errors = null;
$success = null;

if(isset($_POST['username']) && isset($_POST['message'])){
    // Creer un new message a travers une class Message 
    $message = new Message($_POST['username'], $_POST['message']);

    // On fait la validation du message a travers une methode isValid()
    if($message->isValid()){
        $success = "Message envoyé !!!";
    }else {
        $errors = $message->getErrors();
    }
}



require_once 'header.php';

?>


<div class="container">   
    <div>
        <h1>Livre d'or</h1>
    </div>
<!-- Mettre une erreur au dessus du formulaire -->
    <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            Formulaire invalide.
        </div>
    <?php elseif($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif ?>

    <form action="" method="POST" class="form-group">
        <input type="text" name="username" placeholder="Votre pseudo" class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?> "><br>
        <!-- Mettre une erreur en bas de chaque input -->
        <?php if(isset($errors['username'])): ?>
            <div class="invalid-feedback">
                <?= $errors['username'] ?>
            </div>
        <?php endif ?>

        <textarea name="message" cols="30" rows="3" class="form-control <?= isset($errors['message']) ? 'is-invalid' : '' ?>" placeholder="Votre message"></textarea><br>
        <!-- Mettre une erreur en bas de chaque input -->
            <?php if(isset($errors['message'])): ?>
                <div class="invalid-feedback">
                    <?= $errors['message'] ?>
                </div>
            <?php endif ?>
        
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <div class="mt-3">
        <h2>Vos messages</h2>
    </div>
</div>




<?php require_once 'footer.php'?>