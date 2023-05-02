<?php ob_start() ?>

<h3 class="ms-2 mt-2 d-flex justify-content-center">Je suis en page traitement.</h3>

<?php

$nom = $_POST["name"];
$email = $_POST['Email'];

if(isset($_POST["Envoyer"])){
    $nom = $_POST["name"];
    $email = $_POST["email"];
    echo "Le nom est : $nom et son email est : $email";
}
else{
    echo "Veuillez remplir le champs.";
}

?>

<?php
$content = ob_get_clean();
require "template.php";
?> 