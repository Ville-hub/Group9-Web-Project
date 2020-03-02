
	<div class="container">
        <?php if(@$msg){ ?>
		<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
          <?=$msg?>
        </div>
		
	<?php 	} ?>
    <div class="card card-default p-3 mt-3">
    <form method="post" action="">
      <!-- card of the ordered items in cart -->
      <div class="card-title">Your order </div>
      
    
      <!-- Table -->
        <table class="table-responsive">
		    <table class="table"> 
                <thead>
                    <tr> <th>#</th> <th>Product name</th> <th>Quantity</th> <th>Price</th></tr> 
                </thead>
                
                <tbody> 
                <?php if ($items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
                    $n = 1;
                    $total = 0;
                    while($item = mysqli_fetch_array($cart_data)){
                        
                    ?>
                    <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> </tr>
                    <?php
                    $n++;
                    $total +=$item['price'];
                    }}?>
    
                </tbody> 
                <tfoot>
                    <tr> <th>#</th> <th>Total</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> </tr>
                </tfoot>
            </table>
        </table>
        <div class="card-title">Please fill your orders details</div>
            
        <table class="table-responsive">
            <table class="table">               
                <tbody> 
                    <tr> 
                        <th scope="row">Name</th> 
                        <td>
                            <input type="text" name="ship_name" placeholder="Name" class="form-control"required>
                        </td>  
                    </tr>
                    <tr> 
                        <th scope="row">Email</th> 
                        <td>
                            <input type="email"  name="email" placeholder="Email" class="form-control"required>
                        </td>  
                    </tr>
                    <tr> 
                        <th scope="row">Phone number</th> 
                        <td>
                            <input type="text"  name="phone" placeholder="Phone number" class="form-control"required>
                        </td>  
                    </tr>
                </tbody> 
                
            </table>
        </table>
        <div class="card-body btn-group btn-group-justified">
            <a href="order.php" class="btn btn-secondary">Items page</a>
            <input type="submit" name="save_order" class="btn btn-secondary" value="Submit">
        </div>
    </form>
        
              
    </div>
    </div>