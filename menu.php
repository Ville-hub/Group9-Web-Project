<?php include 'myheader.php'?>
<html>
  <head>
    <style>
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
<div class="row mt-5"> 
    <div class="col-md-3 menu">
            <img src="images\VietnameseFood1.jpg" class="img-fluid menuImg" alt="Picture of vietnamese food">
    </div>
        
    <div class="col-md-6 menu">
      <div class="p-3 text-center">
            <h2>MENU</h2>
            <h4 >PHO SOUP 10 &euro;</h4>
            <p>Rice noodle soup with well-done beef in steamy beef broth</p>
            <h4>PHO VEGGIE 10 &euro;</h4>
            <p>Rice noodle soup with tofu &amp; shiitake-mushroom in vegetable broth</p>
            <h4>STEAMED PORK RIBS RICE 10 &euro;</h4>
            <p>Steamed rice with lemongrass chicken and pickled vegetables &amp; fresh herbs</p>
            <h4>GOLDEN CHICKEN WONTON 15 &euro;</h4>
            <p>Fried chicken wontons, egg yolk sauce, onsen egg and chives</p>
      </div>
    </div>
        
    <div class="col-md-3 menu">			
            <img src="images\VietnameseFood2.jpg" class="img-fluid menuImg" alt="Picture of vietnamese food">
    </div>      
</div>

<div class="row mt-5">
  <div class="col-md-3 menu">
    <img src="images\VietnameseFood3.jpg" class="img-fluid menuImg" alt="Picture of vietnamese food">
  </div>
        
    <div class="col-md-6 menu">
      <div class="p-3 text-center">
            <h4>BUN BO HUE 10 &euro;</h4>
            <p>Spicy noodle soup from Imperial Hue with well-done beef</p>
            <h4>PHO (beef) + FRESH ROLLS (prawn) 15 &euro;</h4>
            <p>Also available for vegetarians</p>
            <h4>GUA BAO 13 &euro;</h4>
            <p>With pickled yellow radish and chilli mayonmaise</p>
            <h4>FISH DUMBLINGS 15 &euro;</h4>
            <p>Served in yellow curry sauce with grilled cherry tomato</p>
            <h4>PORK BELLY BAO 12.5 &euro;</h4>
            <p>With sweet potato, mushroom and tamarind sauce</p>

      </div>
    </div>
        
    <div class="col-md-3 menu">			
      <img src="images\VietnameseFood4.jpg" class="img-fluid menuImg" alt="Picture of vietnamese food">
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
</script>
<?php include 'myfooter.php'?>