<html>
  <head>
    <style>
      .facebook{
        color:#3b5998;
      }
      .twitter{
        color:#1DA1F2;

      }
      .instagram{
        background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
        border-radius:20%;
        width:36px;
        height:36px;
        position:relative;
        padding:2px;
        margin-left:5px;
        margin-right:-10px;
}
.footer{
  background-color:#222222 !important;
  
}
.footer1{
  font-size:15px;
}
 
       
      
      </style>
      </head>
    </html>
    <div class="row mt-5 ">
      <div class="col-md-12 text-center pt-2 footer">
      <i class="fa fa-facebook-official facebook" aria-hidden="true"></i>
      <i class="fa fa-instagram instagram" aria-hidden="true"></i>
      <i class="fa fa-twitter twitter" aria-hidden="true"></i>
     

        <p class="footer1">&copy; Copyright 2020 by us. All right reserved</p>
      
      </div>
    </div>
  </div>

  <button onclick="topFunction()" id="myBtn">
		<i class="material-icons">change_history</i>
	</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
      mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
  </body>
</html>
