<?php
  session_start();
?>
<div class="p-5 bg-primary text-white text-center">
  <h1>Mon site</h1>
  <p>Bootstrap 5 : HTML et CSS</p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page1.php">Page 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page2.php">Page 2</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="creersession.php">Créer ma session</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="detruiresession.php">Détruire ma session</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Désactivé</a>
      </li>
    </ul>
  </div>
</nav>
<br><br>