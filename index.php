<?php 
    $title = 'Page d\'acceuil';
    require_once 'compteur.php';

    require 'header.php';
?>  

    <div>
        <?php 
            ajouter_vues();
        ?>
    </div>
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1>Navbar example</h1>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
            <!-- <a class="btn btn-lg btn-primary" href="/docs/5.1/components/navbar/" role="button">View navbar docs &raquo;</a> -->
        </div>
    </main>


<?php require 'footer.php' ?>