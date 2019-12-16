<?php
    $page = 'Exercice 4';//déclaration d'une variable pour afficher le numéro d'exercice dans le html
    $message = '';
    if (isset($_GET['language']) && isset($_GET['server']))//condition si les variables sont définies
    {
        $message = 'Mon ' .$_GET['language']. ' est hebergé sur mon serveur ' .$_GET['server']. '.';//affiche le message 
    }
  include '../header.php';//inclus le header et la navbar dans le html
  ?>
<div class="text-center display-4" >
    <a href="index.php?language=PHP&amp;server=LAMP" title="Voir le message">Afficher</a>
    <p><?= $message//affiche le message dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer?>
