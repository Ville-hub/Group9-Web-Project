<?php include 'myheader.php'?>

<div class="row menuPad">
      <div class="col-md-12 p-2 text-center">
        <h1>SAIGON DINER</h1>
    </div>
</div>

<div class="row"> 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="SlideshowFood1.jpg" alt="Picture of vietnamese food">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="SlideshowFood2.jpg" alt="Picture of vietnamese food">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="SlideshowFood3.jpg" alt="Picture of vietnamese food">
      </div>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php include 'myfooter.php'?>