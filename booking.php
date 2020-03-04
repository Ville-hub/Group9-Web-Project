<?php include 'myheader.php'?>
<!doctype html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  

    <head>
    
        <style>
            .option{
                margin-left:1px;
                width: 80%;
                padding:10px;
                margin-bottom:30px;
               
            }
            .number{
            
               margin:-20px;
                color:white;
                padding:20px;
                margin-bottom:20px;
                margin-top:20px;
               
            }
            .time{
                margin:60px;
                width:100%;
            }
            .date{
                margin:1px;
                width:80%;
            }
            
            .email{
                margin:1px;
                width:80%;
                color:white;;
                margin-bottom:30px;
                margin-top:20px;
            
            }
            .name{
                margin:10px;
                width:80%;
                
            }
            .input{
                margin:5px;
                margin-left:250px;
               margin-top:20px;
                width:20%;
                font-family:cubic;
            }
            .date{
                color:white;
                margin-bottom:30px;
                
            }
            .emailClass{
                color:white;
            }
            .ui-datepicker {
                color:white;
                background-color:#222222;
            }
            
            .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
                background-color:#222222;
            }
            .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
                border:1px solid yellow !important;
            }

            
           

            .fnameClass{
                color:white;
                margin-bottom:30px;
            }
            
            .lnameClass{
                color:white;
                margin-bottom:30px;
                margin-top:20px;
            }
            .emailClass{
                margin-bottom:20px;
                margin-top:20px;
            }
            .fname{
                margin-bottom:20px;
                width:80%;
            }
            .lname{
                margin-bottom:20px;
                width:80%;
            }.time{
                color:white;
                margin:1px;
                margin-bottom:20px;
            }.dateInput{
                margin-bottom:20px;
                margin-left:30px;
                width:50%;
            }
            input[type=text] {
                width:80%;
                margin-left:1px;
                height:20%;
                margin-top:-10px;
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
  .emailSub::placeholder{
    font-family:Garamond, serif;
    font-size:14px;
    
  }
  .emailSub{
    border:transparent;
    width:60%;
    height:15%;
    margin-top:180px;
    margin-left:90px;
  }
  .btnSub{
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
  .btnSub:hover{
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

  input:invalid+span:after{
      position:absolute;
      content: '✖';
      color:white;
      padding-left:5px;
  }
  input:valid+span:after{
      position:absolute;
      content:'✓';
      color:white;
      padding-left:5px;
  }
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
.a{
  text-align: center;
  
}
.login {
    margin-top:10px;
    margin-left:20px;
}
.icons{
    margin-top:-30px;
}
.copyright{
  margin-top:5px;
  margin-left:20px;
}
  @media only screen and (max-width: 600px){
      .row{
          width:1185px;
          margin-top:50px;
      }
      .input{
          margin-left:-2px;
      }
    h4{
        margin-left:10px;
    }
  }
  @media only screen and (min-width: 768px){
.row{
    margin-left:6px;
}
.input{
    margin-left:2px;
}
}
           
        </style>
    </head>


<script>
$( function() {
    $( "#date" ).datepicker({
        minDate:0,
        dateFormat: 'dd-mm-yy'
        
    });
  } );
</script>
<div class="row mt-5">

    <div class="col-md-12 BookTable p-3">
        <div class="row">
            <div class="col-md-6 Form1"> 
                <h4>Book a table </h4>
                
                    <p class="vertical-align p1"> If you are unable to find a free table for your desired time or have a special request for your reservation, please contact us on 045 160 2275 or info@Saigondiner.fi </p><br>
                    <h6  class="vertical-align p1"> Lunch </h6>
                    <p class="vertical-align p1">	Mon - Sat 11:30 - 16:00 </p>
                    <br>
                    <h6 class="vertical-align p1"> Dinner </h6>
                    <p class="vertical-align p1"> Mon - Sat 16:30- 20:00  </p>
                    <p class="vertical-align p1"> Sun 13:00 - 18:00  </p>
                    <br>
                    <h6 class="vertical-align p1"> Bookings</h6>
                    <p class="vertical-align p1"> Please note that we have dinner times for dinner. Tea and coffee are included in the lunch. You can also inquire about booking times at our sales services at info@Saigondiner.fi or call 045 160 2275 for reservations for the same evening.</p>
                    <br>
                    <p class="vertical-align p1">If you have special diets or allergies, please let us know in the booking. Children for whom it is necessary to book a high chair, or disabled please let us know as early as possible. This way we can take your needs into consideration in advance. </p>
            </div>
            <div class="col-md-6 Form2">
            <form name="Form2" method="post" action="create.php">
                <h4> Table reservation request for groups of more than 8 people </h4> 
                <div class="date">
                    Date
        </div>
                
    <input style="color:black;" type="text" placeholder="Date" name="date"  aria-describedby="basic-addon2" class="dateInput"  id="date"   ><br>
   
    

    <div class="time">
        Booking Time( 11h30 - 20h )
        </div>
    <input style="color:black;" type="time" placeholder="Time" name="time"  aria-describedby="basic-addon2" class="timeInput" maxlength="10" min="11:30" max="20:00" step="600" required/><br>
    

    <div class="number">
    Number of people:
        </div>

    <select name ="number" class="option">
    <option value="8"  > 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
    <option value="11"> 11</option>
    <option value="12"> 12</option>
    <option value="13"> 13</option>
    <option value="14"> 14</option>
    <option value="15"> 15</option>
    <option value="16"> 16</option>
    
    </select>

    <br>

    <div class="fnameClass">
    First name
    </div>
    <input style="color:black;" type="fname" placeholder="First Name" name="fname" aria-describedby="basic-addon2" class="fname"required/><br>
    <div class="lnameClass">
    Last name
    </div>
    <input style="color:black;" type="lname" placeholder="Last Name" name="lname" aria-describedby="basic-addon2" class="lname"required/><br>
    
    <div class="emailClass">
    Email Address
    </div>
    <input style="color:black;" type="email" placeholder="Email Address" name="email" aria-describedby="basic-addon2" class="email"required/>
    
    <div class="input">
    <input  type="submit" placeholder="Please send a book inquiry" value="Please send a book inquiry" onclick="ValidateEmail(document.Form2.email)">
        </div>
    </form>
        </div>
        <div class="vl"></div>
    </div>
</div>
</div>

<div class="bg-modal">
  <div class="modal-content">
    <div class="close"id="closeID">+</div>
    
      <form action="newsletter.create.php" class="container" method="post" name="newsletterForm">
        
        <input type = "email" placeholder="Email Address" name="email" class="emailSub">
        <br>

        <button type="submit" class="btnSub" onclick="ValidateEmail(document.newsletterForm.email)">Sign up</button>
      </form> 
    </div>
</div>

<div class="row mt-5 footerAboutUs" width="350">
      <div class="col-md-12 text-center pt-2 footer">
      <div class="login">
      <a class="nav-link " href="Access\retrieve.php" ><p>Login</p></a>
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
 

<script>



function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.Form2.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.Form2.email.focus();
return false;
}
}


document.getElementById('bellID').addEventListener('click',function()
{
document.querySelector('.bg-modal').style.display='flex';
});

document.getElementById('closeID').addEventListener('click',function(){
  document.querySelector('.bg-modal').style.display='none';
});


</script>
</html>
