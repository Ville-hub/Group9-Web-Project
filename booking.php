<?php include 'myheader.php'?>
<html>
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
                color:black;
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
            }
        </style>
    </head>
<html>
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
                
    <input style="color:black;" type="date" placeholder="Date" name="date"  aria-describedby="basic-addon2" class="dateInput" maxlength="10" required/><br>
    <div class="time">
        Time
        </div>
    <input style="color:black;" type="time" placeholder="Time" name="time"  aria-describedby="basic-addon2" class="timeInput" maxlength="10" min="10:00" max="19:00" required/><br>

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
    <option value="17"> 17</option>
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
</script>
<?php include 'myfooter.php'?>