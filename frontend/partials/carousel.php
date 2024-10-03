
<?php 
include_once('src/lib.php');




// $pathofSlides1= "public\img\pic1.jpg";
// $pathofSlides2= "public\img\pic2.jpg";
// $pathofSlides3= "public\img\pic3.jpg";
// $pathofSlides4= "public\img\pic4 .jpg";

// $slides = [['path'=>"public\img\pic1.jpg",
//                'description'=>'Image Slide One',],
// ['path'=>"public\img\pic2.jpg",
// 'description'=>'Image Slide Two',],
// ['path'=>"public\img\pic3.jpg",
// 'description'=>'Image Slide Three',],
// ['path'=>"public\img\pic4.jpg",
// 'description'=>'Image Slide Four',],
// ];

//dd($slides);


?>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">

  <?php foreach($slides as $key=>$slide){ ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key; ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
   
    <?php  }  ?>

  </div>
  <div class="carousel-inner">
   
   <?php foreach($slides as $key=>$slide){ ?>
    <div class="carousel-item <?= ($key == 0) ? 'active' : ''; ?>">
      <img src="<?= $slide['path'] ?>"class="d-block w-100" style="height: 350px" alt="<?= $slide['description'] ?>">
    </div>
 <?php }  ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


</div> 

