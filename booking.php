<?php include 'myheader.php'?>
<html>
    <head>
        <style>
            .option{
                margin-left:10px;
                width: 90%;
                padding:10px;
                margin-bottom:20px;
            }
            .number{
            
               margin-left:-8px;
                color:white;
                padding:20px;
               
            }
            .time{
                margin:60px;
                width:100%;
            }
            .date{
                margin:20px;
                width:80%;
            }
            .wishes{
                margin:50px;
                width:80%;
            }
            .email{
                margin:60px;
                width:80%;
            }
            .name{
                margin:50px;
                width:80%;
                
            }
            .input{
                margin:5px;
                margin-left:890px;
               margin-top:-2px;
                width:20%;
                font-family:cubic;
               
               
             
                
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
                <input style="color:white;" type="text" placeholder="Time<am/pm>" name="time" aria-describedby="basic-addon2" class="time" maxlength="5" required/><br>
    <input style="color:white;" type="text" placeholder="Date<dd.mm.yy>" name="date" aria-describedby="basic-addon2" class="date" maxlength="10" required/><br>
    <div class="number">
    Number of people:
        </div>

    <select name ="number" class="option">
    <option value="1"  > 1</option>
    <option value="2"> 2</option>
    <option value="3"> 3</option>
    <option value="4"> 4</option>
    <option value="5"> 5</option>
    <option value="6"> 6</option>
    <option value="7"> 7</option>
    <option value="8"> 8</option>
    <option value="9"> 9</option>
    <option value="10"> 10</option>
    </select>

    <br>

    <input style="color:white;" type="text" placeholder="Wishes" name="wishes" aria-describedby="basic-addon2" class="wishes"required/><br>
    <input style="color:white;" type="text" placeholder="Name" name="name" aria-describedby="basic-addon2" class="name"required/><br>
    <input style="color:white;" type="text" placeholder="Email Address" name="email" aria-describedby="basic-addon2" class="email"required/>
    </div>
    <div class="input">
    <input  type="submit" placeholder="Please send a book inquiry" value="Please send a book inquiry">
        </div>
    </form>
        </div>
        <div class="vl"></div>
    </div>
</div>
<?php include 'myfooter.php'?>