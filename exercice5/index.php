<?php
    $page = 'Exercice 5';//déclaration d'une variable pour afficher le numéro d'exercice
    $message = '';
    if (isset($_GET['week']))//condition si les variables sont définies 
    {
        $message = 'On arrive à la semaine ' .$_GET['week']. '.';//affiche le message 
    }
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center display-4">
    <a href="index.php?week=12" title="Voir la semaine">Afficher</a>  
  <p><?= $message//affiche le message dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
