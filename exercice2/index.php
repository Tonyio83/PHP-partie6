<?php
$page = 'Exercice 2'; //déclaration d'une variable pour le numéro d'exercice
$message = '';
if (isset($_GET['age'])) {//condition si les variables sont définies
    $message = $_GET['firstname'] . ' ' . $_GET['lastname'] . ' a ' . $_GET['age'] . ' ans.'; //affiche le message 
} else { //sinon
    $message = 'Veuillez rentrer un age valide.'; //affiche ce message    
}
include '../header.php'; //inclus le header et la navbar dans le html
?>
<div class="text-center display-4">
    <a href="index.php?lastname=Nemare&amp;firstname=Jean" title="Voir la réponse">Afficher</a>
    <p><?= $message//affiche le message dans le html  ?></p>
</div>
<?php include '../footer.php'//inclus le footer dans le html  ?>
