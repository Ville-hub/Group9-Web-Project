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
      /* extra small devices ( phone, 600px and down) */
  @media only screen and (max-width: 600px){
    .order{
      padding: 2px 10px;
      top:15px;
      right:200px;
    }

  }
  /* small devices ( portrait tablets and large phones, 600px and up) */
  @media only screen and (min-width: 600px){

  }
  /* medium devices ( landscape tablets, 768px and up) */
  @media only screen and (min-width: 768px){

  }
  /* large devices ( laptop/desktop, 992px and up)*/
  @media only screen and (min-width: 992px){

  }
  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px){

  }   
    
      </style>

  </head>
  <body>
    
    

  <div class="container">
      <nav class="navbar navbar-expand-lg text-uppercase navbar-shrink fixed-top navbar-dark">
        <div class="container"> 
          <div class="navbar-nav mx-auto">
            <a class="navbar-brand" href="home.php">Saigon Diner</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php">Table booking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Info</a>
                </li>
                
                  <a href="orderfood.php" class="order"> Order Online</a>
                  <div class="bell1" id="bellID">
                  <i class="fa fa-bell-o bell" aria-hidden="true"></i>
                  </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>