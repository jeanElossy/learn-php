<?php
require_once 'Message.php';

$title = "Livre d'or";
$error = null;

if(isset($_POST['username']) && isset($_POST['message'])){
    // Creer un new message a travers une class Message 
    $message = new Message($_POST['username'], $_POST['message']);

    // On fait la validation du message a travers une methode isValid()
    if($message->isValid()){

    }else {
        $error = "Message non envoyé !!!";
    }
}else {
    $error = "Formulaire non envoyé";
}



require_once 'header.php';

?>



<div class="mt-5">   
    <div>
        <h1>Livre d'or</h1>
    </div>

    <?php if($error): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif ?>

    <form action="" method="POST" class="form-group">
        <input type="text" name="username" placeholder="Votre nom" class="form-control"><br>
        <textarea name="message" cols="30" rows="3" class="form-control">Votre message</textarea><br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <div class="mt-3">
        <h2>Vos messages</h2>
    </div>
</div>




<?php require_once 'footer.php'?>