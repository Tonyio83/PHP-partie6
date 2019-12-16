<?php
  $page = 'Exercice 3';//déclaration d'une variable pour l'exercice
  $message = '';
  if (isset($_GET['startDate']) && isset($_GET['endDate'])) 
  {//condition si les variables sont définies
     $message = 'La formation se déroulera du ' .$_GET['startDate']. ' au ' .$_GET['endDate']. '.';//affiche le message
  }
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center display-4" >
    <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016" title="Voir les dates">Afficher</a>
    <p><?= $message//affiche le message dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>