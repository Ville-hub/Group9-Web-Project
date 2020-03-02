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

  h2 {
    padding: 10px;
  }

  p {
    text-align: justify;
  }

    </style>
  </head>
</html>

  <div  class="row mt-5">
    <div class="col-md-12 bg-dark text-center pt-3">
            <h2>ABOUT US</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar, magna vitae dignissim finibus, ante diam viverra ligula, ut fermentum turpis justo vitae nulla. Phasellus ac massa tristique, tincidunt nisl in, ullamcorper odio. Sed dui orci, ultricies eget tincidunt ac, luctus id ligula. Fusce convallis orci vel risus convallis blandit. Nullam nunc lectus, dapibus ut massa non, rutrum finibus dolor. Aenean vel nunc pharetra, molestie nisi ut, vestibulum neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in ullamcorper lorem, a consectetur massa. Quisque sagittis luctus fermentum. Curabitur urna elit, sagittis non ex vitae, tincidunt tincidunt erat. Sed gravida finibus justo, id consequat enim finibus sed. Nam feugiat vitae nisi sit amet volutpat. Mauris tristique erat et viverra gravida. Pellentesque fringilla ullamcorper nulla, sed convallis diam gravida sed. Integer id ligula ac ligula aliquam dapibus id sit amet quam. 
            </p> </br>
            <p>
              Nam mollis lorem vel dictum blandit. Integer quis congue mi. Aliquam quis metus urna. Sed vitae tempus quam. Duis finibus ante a mattis pharetra. Vestibulum pulvinar tincidunt aliquet. Fusce ac dictum nibh. Cras nulla orci, elementum eget consequat sed, consectetur vel augue. Vestibulum viverra interdum risus quis tempus. Curabitur vel ornare erat. Aliquam commodo mauris at ante pellentesque efficitur. Aliquam erat volutpat. Aenean eleifend bibendum nibh, sed placerat orci scelerisque in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras metus sem, lacinia eget feugiat eget, finibus nec erat. 
            </p>
    </div>
  </div>
    <!--</div>-->
    <div class="row mt-5">
      <div class="col-xl-4 review">
        <span class="yelp-review" data-review-id="UzMKy3OjSr7edeSMD8R5_A" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=SXJmAdpip5_vFFHPj7lwJQ" rel="nofollow noopener">Chang L.</a>'s <a href="https://www.yelp.com/biz/yummy-yummy-san-francisco?hrid=UzMKy3OjSr7edeSMD8R5_A" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/KCVZ0Z5GQgQxduizQ91O1Q" rel="nofollow noopener">Yummy Yummy</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.com/embed/widgets.js" type="text/javascript"></script></span>
      </div>
      
      <div class="col-xl-4 review">
          <span class="yelp-review" data-review-id="cAAbqh_boCw6EQq9tjFUSw" data-hostname="www.yelp.com">Lizzie C.</a>'s <a href="https://www.yelp.com/biz/yummy-yummy-san-francisco?hrid=cAAbqh_boCw6EQq9tjFUSw" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/KCVZ0Z5GQgQxduizQ91O1Q" rel="nofollow noopener">Yummy Yummy</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.com/embed/widgets.js" type="text/javascript"></script></span>
      </div>
      
      <div class="col-xl-4 review">	
        <p>
        <span class="yelp-review" data-review-id="UzMKy3OjSr7edeSMD8R5_A" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=SXJmAdpip5_vFFHPj7lwJQ" rel="nofollow noopener">Chang L.</a>'s <a href="https://www.yelp.com/biz/yummy-yummy-san-francisco?hrid=UzMKy3OjSr7edeSMD8R5_A" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/KCVZ0Z5GQgQxduizQ91O1Q" rel="nofollow noopener">Yummy Yummy</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script async="async" src="https://www.yelp.com/embed/widgets.js" type="text/javascript"></script></span>
        </p>
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