<?php 
require_once 'auth.php'; 

if(session_status() === PHP_SESSION_NONE){
  session_start();
}

?>

<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.88.1">

      <title>

        <?php if(isset($title)) : ?>
          <?php echo $title ?>
        <?php else : ?>
          Mon site 
        <?php endif ?>

      </title>

      <meta name="theme-color" content="#7952b3">
      <!-- CSS only -->
      <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">

        <a class="navbar-brand" href="#">Top navbar</a>
      
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <?php require 'menu.php' ?>
          </ul>

          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <?php if(is_connected()): ?>
              <li class="nan-item">
                <a class="nav-link" href="/logout.php">Se deconnecter</a>
              </li>
            <?php endif ?>
          </ul>

        </div>
      </div>
    </nav>
