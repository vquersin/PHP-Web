<?php ob_start() ?>

<h3 class="ms-2 mt-2 d-flex justify-content-center">Je suis en page d'acceuil.</h3>
<form class="container d-flex flex-column align-items-center mt-5 perso" action="traitement.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" class="form-control w-50" placeholder="Nom" id="nom" name="name">
    <label for="email">Email :</label>
    <input type="email" class="form-control w-50" placeholder="Email" id="email" name="Email">
    <input type="submit" class="mt-4 w-25" value="Envoyer">
</form>
<?php
$content = ob_get_clean();
require "template.php";
?> 