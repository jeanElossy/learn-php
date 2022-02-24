<?php
require 'Messages.php';

$error = null;
$succes = null;

if(isset($_POST['username']) && isset($_POST['message'])){
    $message = new Message($_POST['username'], $_POST['message']);
    if($message->isValid()){

    }else{
        $error = 'Formulaire invalide !!';
    }
}

require 'header.php';
?>

<?php if($succes): ?>
    <div style="color:green;">
        <?= $succes ?>
    </div>
<?php endif ?>


<section>
    <div>
        <h1>Livre d'or</h1>
    </div>

    
    <?php if($error): ?>
        <div style="color:red;">
            <?= $error ?>
        </div>
    <?php endif ?>

    <form action="" method="POST">
        <div>
            <input type="text" name="username" placeholder="Votre pseudo">
        </div>
        <div>
            <textarea type="text" name="message" placeholder="Votre message"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form> 
    <div>
        <h1>Vos messages</h1>
    </div>
</section>


<?php require 'footer.php' ?>