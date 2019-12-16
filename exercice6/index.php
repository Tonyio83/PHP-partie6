<?php
    $page = 'Exercice 6';//déclaration d'une variable pour l'exercice
    $message = '';
    if (isset($_GET['building']) && isset($_GET['room']))//condition si les variables sont définies 
    {
        $message = 'La réponse se trouve au bâtiment ' .$_GET['building']. ' chambre ' .$_GET['room']. '.' ;//affiche le message 
    }
    include '../header.php';//inclus le header et la navbar
?>
<div class="text-center display-4"">
    <a href="index.php?building=12&amp;room=101" title="Voir l'endroit">Afficher</a>  
    <p><?= $message//affiche le message dans le html ?></p>
</div>
<? include '../footer.php'//inclus le footer dans le html?>
