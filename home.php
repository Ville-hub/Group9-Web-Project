<?php include 'myheader.php'?>
<html>
  <head>
    <style>
    h5{
      font-family:Helvetica, sans-serif;
      font-size:20px;
      font-weight:bold;
      text-align:center;
      margin-top:70px;
      

    }
    .gallery{
      font-family:Helvetica, sans-serif;
      font-size:20px;
      font-weight:bold;
      text-align:center;
      margin-top:30px;
    }
    .p2{
      font-family:Garamond, serif;
      margin-top:80px;
      margin-left:10px;
      font-size:21px;
    }
    .p3{
      font-family:Garamond, serif;
      margin-top:100px;
      margin-left:10px;
      font-size:21px;
    }
    .homeImage2{
    display:inline;
    position:relative;
    overflow:hidden;
   position:center; 
   margin-left:-14px;
    }
    .hm2{
      background-color:transparent !important;
    }
    .homeImage3{
      padding-left:-5px;
      margin-left:-14px;
    }
   hr{
     color:white;
   }
   .video{
     background-color:transparent !important;
     margin-left:-12px;
     margin-top:-12px;
    
   }
   .gallery{
     text-align:center;
     width:1200px;
     margin-left:3px;
     margin-top:-5px;
     
     
   }
   .row1{
     margin-left:-10px;
   }
   .gallery1,.gallery2,.gallery3{
     margin-bottom:20px;
     margin-left:15px;
   
   }
   .gallery4,.gallery5,.gallery6{
     margin-bottom:20px;
     left:50px;
     padding-left:15px;
    
  
   }
   .gallery7,.gallery8,.gallery9{
    margin-bottom:20px;
    right:-15px;
 
   }
  .galleryText{
    margin-bottom:30px;
    margin-top:18px;
  }
  .bg-modal{
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.7);
    position:fixed;
   overflow:auto;
   top:0;
  left:0;
 
   justify-content:center;
   align-items:center;
   display:none;
  }
  .modal-content{
    width:550px;
    height:350px;
    background-color:white;
    background-image:url(images/newsletter.resize.jpg);
    position:relative;
  }
  input::placeholder{
    font-family:Garamond, serif;
    font-size:14px;
    
  }
  input{
    border:transparent;
    width:60%;
    height:15%;
    margin-top:180px;
    margin-left:90px;
  }
  .btn{
    background-color:red;
    text-align:center;
    font-size:12px;
    color:white;
    border:none;
    width:15%;
    height:15%;
    margin-top:20px;
    margin-left:90px;
  }
  .btn:hover{
    color:red;
    background-color:white;
  }
  .close{
    position:absolute;
    top:0;
    right:14px;
    font-size:42px;
    transform:rotate(45deg);
    cursor:pointer;
    color:white;
   
  }
      </style>
    </head>
  </html>
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
        <img class="d-block w-100" src="images\SlideshowFood1.jpg" alt="Picture of vietnamese food">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images\SlideshowFood2.jpg" alt="Picture of vietnamese food">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images\SlideshowFood3.jpg" alt="Picture of vietnamese food">
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
  <div class="row menuPad ">
    <div class="col-md-6">
      <h5> SAIGON DINER INTERIOR </h5>
      <p class="p2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar condimentum bibendum. Vivamus id dapibus leo. Sed rutrum massa sit amet facilisis vehicula. In hac habitasse platea dictumst. Proin cursus, risus sed consectetur volutpat, nibh magna auctor eros, eu mattis nisl est id ex. Aliquam erat volutpat. Aliquam tincidunt ex vitae imperdiet posuere </p>
      
</div>
  <div class ="col-md-6">
    <img class="homeImage" src="images\Homeimage.jpeg" alt="SaiGonDiner interior" width="570" height="510">
</div>

</div>
<div class ="row menuPad">
<div class="col-md-12 hm2">
  <img class="homeImage2" src="images\Slide1.JPG" alt="SaigonDiner happyHour" width="1168" height="700">
  </div>
  </div>

<div class="row menuPad">
<div class="col-md-6" >
<img class="homeImage3" src="images\homeImage3.jpeg" alt="SaigonDiner happyHour" width ="570" height ="580">
</div>
<div class ="col-md-6">
<h5> HAPPY HOUR </h5>
<p class="p3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur corporis voluptatibus ad vero odio placeat non recusandae, consequuntur, at rem veritatis perspiciatis corrupti fugit, est eius animi ullam reprehenderit minima! </p>

</div>
</div>

<div class="row menuPad">
<div class="col-md-12 video">
<video width="1168" height="700" autoplay loop>
<source src="images\bumi-kallio_360.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="container">
  <div class="row menuPad">
  <div class="col-md-12 gallery">
  <h5 class="galleryText"> SAIGON DINER - GALLERY </h5>
  <div class="row">
    <div class="col-md-4 row1">
    <img class="gallery1" src="images\gallery1.jpg" width="360" height="300">
    <img class="gallery2" src ="images\gallery2.jpg" width="360" height="450">
    <img class="gallery3" src ="images\gallery3.jpg" width ="360" height="360">
    </div>
  <div class="col-md-4 row2">
  <img class="gallery4" src="images\gallery4.jpg" width="360" height="300">
  <img class="gallery5" src="images\gallery5.jpg" width="360" height="300">
  <img class="gallery6" src="images\gallery6.jpg" width="360" height="510">
  </div>
  <div class="col-md-4 row3">
  <img class="gallery7" src="images\gallery7.jpg" width="360" height="350">
  <img class="gallery9" src="images\gallery9.jpg" width="360" height="280">
  <img class="gallery8" src="images\gallery8.jpg" width="360" height="480">
  </div>


</div>
</div>
</div>
</div>

<div class="bg-modal">
  <div class="modal-content">
    <div class="close"id="closeID">+</div>
    
      <form action="newsletter.create.php" class="container" method="post" name="newsletterForm">
        
        <input type = "email" placeholder="Email Address" name="email" class="email">
        <br>

        <button type="submit" class="btn" onclick="ValidateEmail(document.newsletterForm.email)">Sign up</button>
      </form> 
    </div>
</div>
  

  </div>






<script>
document.getElementById('bellID').addEventListener('click',function()
{
document.querySelector('.bg-modal').style.display='flex';
});

document.getElementById('closeID').addEventListener('click',function(){
  document.querySelector('.bg-modal').style.display='none';
});

function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.newsletterForm.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.newsletterForm.email.focus();
return false;
}
}

</script>
<?php include 'myfooter.php'?>