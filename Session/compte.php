<?php ob_start() ?>
<?php 
session_start();

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];

// setcookie("username",$nom,time()+3600,"/","",false,true);

if(isset($_GET['logout'])){
    session_destroy();
    header("Location:delete.php");
    exit();
}
?>

<div class="container mt-5">
    <h1 class="my-5">Bienvenue <?= $nom; ?> sur votre compte</h1>
    <p>Voici vos informations :</p>
    <table>
        <tr>
            <th>Nom</th>
            <th>Age</th>
        </tr>
        <tr>
            <td><?= $nom; ?></td>
            <td><?= $age; ?></td>
        </tr>
    </table>
    <br><br>
    <a class="text-warning" href="?logout=true">Detruire la session</a>

</div>


<?php 
$content = ob_get_clean();
require "template.php"; 
?>