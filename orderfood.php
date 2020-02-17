<?php include 'myheader.php'?>
    <div class="row mt-5">
    <div class="col-md-3 p-3 food">
    </div>
        <div class="col-md-6 p-3">

        <div class="form-group">
            <form name="form" method="post" action="order.php">
                <h4> Order food for pickup at the restaurant </h4> 
                
                <input class="form-control" type="text" placeholder="Name" name="name" aria-describedby="basic-addon2" class="name"required/><br>
                
                <input class="form-control" type="text" placeholder="Email Address" name="email" aria-describedby="basic-addon2" class="email"required/><br>
                <select class="form-control" name="food">
                <option value="phosoup">PHO SOUP 10 &euro;</option>
                <option value="phoveggie">PHO VEGGIE 10 &euro;</option>
                <option value="porkrice">STEAMED PORK RIBS RICE 10 &euro;</option>
                <option value="chickenwonton">GOLDEN CHICKEN WONTON 15 &euro;</option>
                <option value="bunbohue">BUN BO HUE 10 &euro;</option>
                <option value="phorolls">PHO (beef) + FRESH ROLLS (prawn) 15 &euro;</option>
                <option value="guabao">GUA BAO 13 &euro;</option>
                <option value="fishdumpling">FISH DUMPLINGS 15 &euro;</option>
                <option value="porkbao">PORK BELLY BAO 12.5 &euro;</option>

                <input class="form-control" type="text" placeholder="Special Requests" name="request" aria-describedby="basic-addon2" class="requests"required/><br>
                
                
                <div class="input">
                    <input type="submit" placeholder="Submit" value="Submit">
                </div>
                </form>
        </div>
        </div>
    <div class="col-md-3 p-3 food">
    </div>
    </div>
<?php include 'myfooter.php'?>