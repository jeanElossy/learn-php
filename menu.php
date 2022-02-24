<?php 
  if(!function_exists('nav_item')){
    function nav_item(string $link, string $titre): string {
      $class = 'nav-item';
      if($_SERVER['SCRIPT_NAME'] === $link){
        $class .=' active ';
      }
      return '<li class="nav-item"> <a class="nav-link ' . $class . '" href="' . $link . '">' . $titre . '</a> </li>';
    }
  }
?>

<?= nav_item('/index.php', 'Acceuil') ?>
<?= nav_item('/contact.php', 'Contact') ?>
<?= nav_item('/blog.php', 'Blog') ?>
<?= nav_item('/blog.php', 'Blog') ?>

