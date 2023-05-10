<?php ob_start() ?>


<div class="d-flex flex-column mt-5 gap-5">
    <form class="d-flex flex-row justify-content-center gap-0 w-25" method="POST">
        <!-- <input type="image" src="./img/Flag_of_France.png" width="5%" name="1"></input> -->
        <button class="container border-0 bg-white w-25" type="submit" name="1" title="Envoyer"><img class="img-fluid" width="100%" src="./img/Flag_of_France.png" alt="" /></button>
        <!-- <input type="image" src="./img/Flag_of_the_UK.png" width="5%" name="2"></input> -->
        <button class="container border-0 bg-white w-25" type="submit" name="2" title="Envoyer"><img class="img-fluid" width="100%" src="./img/Flag_of_the_UK.png" alt="" /></button>
        <!-- <input type="image" src="./img/Flag_of_Spain.png" width="5%" name="3"></input> -->
        <button class="container border-0 bg-white w-25" type="submit" name="3" title="Envoyer"><img class="img-fluid" width="100%" src="./img/Flag_of_Spain.png" alt="" /></button>
    </form>
    <div class="d-flex justify-content-center"> 
        <?php
        if((array_key_exists('1', $_POST)) or (array_key_exists('2', $_POST)) or (array_key_exists('3', $_POST))){
            switch($_POST){
                case array_key_exists('1', $_POST):
                    echo "Bienvenue sur mon site web, je suis à la recherche d'un stage en Developpement Web & Web mobile.";
                    break;
                case array_key_exists('2', $_POST):
                    echo "Welcome to my website, I am looking for an internship in Web & Mobile Web Development.";
                    break;
                case array_key_exists('3', $_POST):
                    echo "Bienvenido a mi sitio web, estoy buscando una pasantía en Web & Mobile Web Development.";
                    break;
            }
        }
        else echo "Bienvenue sur mon site web, je suis à la recherche d'un stage en Developpement Web & Web mobile.";
        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require "../template.php";
?> 