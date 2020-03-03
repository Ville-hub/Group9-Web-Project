
<?php include '..\db.php'?> 
<?php include '..\myheader.php'?>   
<!-- Header -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Vietnamese restaurant in the middle of Hämeenlinna City center">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css\custom_bootstrap.css">

    <title>Vietnamese Restaurant Saigon Diner</title>
    <style>
    h3{
    color:white;
    margin-top: 120px;
    margin-bottom: 50px;
    text-align: left;
    padding: 0px;
    }

    body{
        background-image:url(../images/background8_1920x1080.jpg);
    }
    .navbar
{
    background-color:#222222;
}
   
      .order{
        background-color: transparent !important;
      border:1px solid;
      color:white;
      letter-spacing: 0.8px;
      padding: 4px 18px;
      top: 15px;
      right: 120px;
      position:absolute;
      text-decoration: none;
      text-transform: uppercase;
      font-size:12px;
      font-family: Helvetica;
      -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
      
      }
      .order:hover,.order:focus,.order:active{
        color:white;
        background-color:white;
        -webkit-transform: scale(1.1);
  transform: scale(1.1);
      }
      .bell{
        color:white;
        width:15px !important;
        height:15px !important;
        margin-top:-18px;
        -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
      }
      .bell:hover, .bell:focus, .bell:active{
        -webkit-animation-name: bell;
  animation-name: bell;
  -webkit-animation-duration: 0.15s;
  animation-duration: 0.15s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
      }
    @-webkit-keyframes bell {
    50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
    }
    100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
      }
    }
    @keyframes bell {
  50% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg);
  }
  100% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg);
  }
}
      .bell1{
       position:absolute;
       top:12px;
       right:80px;
       }
       
    
      </style>

  </head>
  <body>
    
    

      <h3>Order Information</h3>

<?php 


$sql = "select * from orders";
$result = $conn->query($sql); ?>
<div class="table-responsive ">
<table class="table table-striped table-bordered">
    <thead class="thead-light" >
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Order</th>
            <th scope="col">Request</th>
            <th scope="col">Order Received At</th>
            
        </tr>
    </thead>

    <tbody class="table-light">
<?php     
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.


    while($row = $result ->fetch_assoc()){?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["food"]?></td>
            <td><?php echo $row["request"]?></td>
            <td><?php echo $row["ordertime"]?></td>
        </tr>
        <?php
    }
}

else 
{
    echo "no results";
}
?>
    </tbody>
    </table>
    </div>

<?php
$conn->close();
?>


<html>
  <head>
    <style>
      .facebook{
        color:#3b5998;
        width:36px;
        font-size:30px;
        height:36px;
        margin-left:-20px;
        margin-bottom:5px;
      }
      .twitter{
        color:#1DA1F2;
        font-size:30px;
        margin-bottom:5px;
        margin-left:-27px;

      }
      .instagram{
        background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
        border-radius:20%;
        width:35px;
        height:35px;
        position:relative;
        padding:2px;
        margin-left:15px;
        margin-right:10px;
        font-size:30px;
        margin-bottom:5px;
}
.footer{
  background-color:#222222 !important;

  
}
.footer1{
  font-size:15px;

}
.a{
  text-align: center;
  
}
.login {
    margin-top:10px;
}
.icons{
    margin-top:-30px;
}
.copyright{
  margin-top:10px;
  color:white;
}
p{
 
  margin-top:-15px;
  font-size: 18px;
    font-family: Garamond, serif;
}


 
       
      
      </style>
      </head>
    </html>
    <div class="row mt-5" width="350">
      <div class="col-md-12 text-center pt-2 footer">
      <div class="login">
      
      </div>  
      <div class="icons">
      <i class="fa fa-facebook-official facebook" aria-hidden="true"></i>
      <i class="fa fa-instagram instagram" aria-hidden="true"></i>
      <i class="fa fa-twitter twitter" aria-hidden="true"></i>
      </div>
      <div class="copyright">
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
