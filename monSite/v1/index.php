<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Mon site en BootStrap 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS : Local -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap JS : Local -->    
  <script src="js/bootstrap.js"></script>
  <!-- 
  Bootstrap CSS : En ligne
  <link href="css/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  Bootstrap JS : En ligne     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  -->
</head>
<body>
  <!-- ENTETE DE LA PAGE -->
<?php include('header.php'); ?>

<div class="container">
  <?php
    // La session existe-t-elle ?
    if( isset($_SESSION['nom']) ) // La session existe
    {
      echo '<div class="alert alert-primary" role="alert">Bonjour <b>'.$_SESSION['prenom'].' '.$_SESSION['nom'].'.</b></div>';
    }
    else // La session n'existe pas
    {
      echo '<div class="alert alert-info" role="alert">Créez votre session à la page "Créer ma session".</div>';
    }
  ?>
</div>

<!-- PIED DE LA PAGE -->
<?php include('footer.php'); ?>

</body>
</html>
