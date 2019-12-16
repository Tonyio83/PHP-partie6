<?php
    $page = 'Exercice 1';//déclaration d'une variable pour afficher le numéro de l'exercice dans le html
    $message = ''; 
    if (isset($_GET['firstname']) && isset($_GET['lastname']))//condition si les variables sont définies
    {
        $message = $_GET['firstname']. ' ' .$_GET['lastname'];//affiche le message
    }    
    include '../header.php';//inclus le header et la navbar
?>
<div class="text-center display-4">
    <a href="index.php?lastname=Nemare&amp;firstname=Jean" title="Voir le profil">Afficher</a>
    <p><?= $message//affiche le message dans le html ?></p>
</div>
<?php include '../footer.php' //inclus le footer?>
