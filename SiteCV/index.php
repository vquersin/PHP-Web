<?php ob_start() ?>
<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
        <ul class="carousel-indicators text-white list-unstyled col">
          <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true"></li>
          <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
        </ul>
        <div class="carousel-inner container w-50">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/coding.jpg" alt="First slide">
            <div class="carousel-caption d-md-block text-center" id="desc_img_caroussel">
            </div>          
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/3d.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block text-center" id="desc_img_caroussel">
            </div> 
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 object-fit-cover" src="./img/animation.png" alt="Third slide">
            <div class="carousel-caption  d-md-block text-center" id="desc_img_caroussel">
            </div> 
          </div>
        </div>
</div>

<!-- TEXT présentation -->
<div class="container d-flex flex-row justify-content-center">

</div>


<?php
$content = ob_get_clean();
require "template.php";
?> 