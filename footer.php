<?php 
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'PHP' . DIRECTORY_SEPARATOR . 'objets' . DIRECTORY_SEPARATOR . 'DoubleCompteur.php'; 
?>
        
        <div class="row">
            <div class="col-md-4 card">
                <?php
                    $compteur = new DoubleCompteur(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'PHP' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur');

                    $compteur->incrementer();
                    $vues = $compteur->recuperer();
                ?>
                Il y a <?= $vues; ?> visite<?php if($vues > 1): ?>s<?php endif; ?> sur le site.
            </div>
            <div class="col-md-4 card"></div>
            <div class="col-md-4 card">
                <?php require 'menu.php'; ?>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
    </body>
</html>
