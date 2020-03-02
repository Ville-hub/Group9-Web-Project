
	<div class="container" >
    <?php if(@$msg){ ?>
		<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
          <?=$msg?>
        </div>
		
	<?php 	} ?>

    <!-- Items and its forms where you can add new items -->
    <div class="row pt-3">

        <div class="col-sm-4 col-md-3 text-center">   
            <div class="products">
                    <img src="images/test.jpg" class="img-fluid"><br> 
                
                <h4 class="text-info">PHO SOUP<br></h4>
                <div class="card-footer"> <p class="item_price">10€</p>
                <form method="post" action="?do=add" >
                <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >        
                <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
                <input type="hidden" name="item_number" value="1">
                <input type="hidden" name="item_name" value="PHO SOUP">
                <input type="hidden" name="item_price" value="10">  
                </form>  
                </div>
            </div>
        </div><!-- end object -->

        <div class="col-sm-4 col-md-3 text-center">   
            <div class="products">
                    <img src="images/test.jpg" class="img-fluid"><br> 
                
                <h4 class="text-info">PHO VEGGIE</h4>
                <div class="card-footer"> <p class="item_price">10€</p>
                <form method="post" action="?do=add" >
                <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >        
                <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
                <input type="hidden" name="item_number" value="2">
                <input type="hidden" name="item_name" value="PHO VEGGIE">
                <input type="hidden" name="item_price" value="10">  
                </form>  
                </div>
            </div>
        </div><!-- end object -->

        <div class="col-sm-4 col-md-3 text-center">   
            <div class="products">
                    <img src="images/test.jpg" class="img-fluid"><br> 
                
                <h4 class="text-info">STEAMED PORK RIBS RICE </h4>
                <div class="card-footer"> <p class="item_price">10€</p>
                <form method="post" action="?do=add" >
                <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >        
                <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
                <input type="hidden" name="item_number" value="3">
                <input type="hidden" name="item_name" value="STEAMED PORK RIBS RICE">
                <input type="hidden" name="item_price" value="10">  
                </form>  
                </div>
            </div>
        </div><!-- end object -->

        <div class="col-sm-4 col-md-3 text-center">   
            <div class="products">
                    <img src="images/test.jpg" class="img-fluid"><br> 
                
                <h4 class="text-info">GOLDEN CHICKEN WONTON</h4>
                <div class="card-footer"> <p class="item_price">15€</p>
                <form method="post" action="?do=add" >
                <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >        
                <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
                <input type="hidden" name="item_number" value="4">
                <input type="hidden" name="item_name" value="GOLDEN CHICKEN WONTON">
                <input type="hidden" name="item_price" value="15">  
                </form>  
                </div>
            </div>
        </div><!-- end object -->
    </div>
<div class="card p-3">
      <!-- card of the ordered items in cart -->
      <div class="card-title">Your cart <?php if (@$items_number < 1){ echo" is empty"; }?></div>
      
      <!-- Table -->
		<table class="table"> 
        	<thead>
            	 <tr> <th>#</th> <th>Product name</th> <th>Quantity</th> <th>Price</th><th>Action</th> </tr> 
            </thead>
             
            <tbody> 
            <?php if (@$items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
				$n = 1;
				$total = 0;
				while($item = mysqli_fetch_array($cart_data)){
					
				 ?>
                <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> <td><a href="order.php?do=delete&id=<?=$item['id']?>"><span class="btn btn-danger" >Remove </span></a>   <a href="order.php?do=add_one&id=<?=$item['id']?>"><span class="btn btn-success" >+ </span></a> <a href="order.php?do=remove_one&id=<?=$item['id']?>"><span class="btn btn-warning" >- </span></a>  </td> </tr>
                <?php
				$n++;
				$total +=$item['price'];
				 }}?>
 
            </tbody> 
            <tfoot>
            	 <tr> <th>#</th> <th>Total</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> <th></th></tr>
            </tfoot>
		</table>
        <div class="card-body btn-group btn-group-justified">
        	
                <a href="order.php?do=delete_all" class="btn btn-danger">Empty cart</a>
            
          	    <a href="submit_order.php" class="btn btn-secondary">Submit order</a>
                   
        </div>
    </div>
</div>

