<?php ob_start() ?>
<?php session_start();
$utilisateur = $_SESSION['utilisateur'];
print_r($utilisateur);

?>
<div class="d-flex flex-row mt-5">
    <div class="d-flex flex-column justify-content-center text-center w-25">
        <form action="./session.php" class="justify-content-center text-center w-75">
            <button type="submit" class="btn btn-secondary text-secondary bg-white px-5 w-100">Home</button>
        </form>
        <form class="justify-content-center text-center mt-5 w-75" method="POST">
            <div class="text-secondary bg-white px-5 w-100">--option--</div>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="1" value="Débogage"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="2" value="Concaténation"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="3" value="Boucle"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="4" value="Fonction"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="5" value="Supprimer"></input>
        </form>
    </div>
    <div  class="rounded-2 d-flex justify-content-center align-items-center bg-success w-50 py-3">
        <?php
        if((array_key_exists('1', $_POST)) or (array_key_exists('2', $_POST)) or (array_key_exists('3', $_POST)) or (array_key_exists('4', $_POST))or (array_key_exists('5', $_POST))){
            switch($_POST){
                case array_key_exists('1',$_POST):
                    print_r($utilisateur);
                    break;
                case array_key_exists(2,$_POST):
                    echo "
                    <div class=\"d-flex flex-column w-100 ms-5 \"><h2 class=\" text-center mb-4\">Concaténation</h2><br>";
                    if($utilisateur['utilisateur'][4]=="Femme"){
                        echo "<p class=\"text-start \">Mme ". $utilisateur['utilisateur'][0]." ".$utilisateur['utilisateur'][1]."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</p></div>";
                    }
                    else{
                        echo "Mr ". $utilisateur['utilisateur'][0]." ".$utilisateur['utilisateur'][1]."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</div>";
                    } 
                    break;
                case 3:
                    break;
                case 4:
                    break;
                default:
                    break;
            }
        }
            
        ?>
    </div>
</div>
<?php 
$content = ob_get_clean();
require "../template.php"; 
?>