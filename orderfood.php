<?php
session_start();
$product_ids = array();
//session_destroy();

//check if Add to Order button has been submitted
if(filter_input(INPUT_POST, 'add_to_order')){
    if(isset($_SESSION['shopping_cart'])){
        //keep track of how many products are in the cart
        $count = count($_SESSION['shopping_cart']);

        //creating a sequential array for matching array key to prodcuts ids
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array
                (
                    'id' => filter_input(INPUT_GET, 'id'),
                    'name' => filter_input(INPUT_POST, 'name'),
                    'price' => filter_input(INPUT_POST, 'price'),
                    'quantity' => filter_input(INPUT_POST, 'quantity')
                );
        }
        else { // product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    }
    else { //if shopping cart doesn't exit, create first product with array key 0
        //create array using ubmitted form data, start from key 0 and fill with values
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches wtih GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the cart when it matches with the GET id 
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<?php include 'myheader.php'?>
<div class="row pt-3">
<?php include 'db.php';
//Page for food orders from the restaurant
    //Query for selecting all the products from the database
    $query = 'SELECT * FROM products ORDER BY id ASC';
    //Storing everything inside $result variable
    $result = mysqli_query($conn, $query);

    //checking that the products table isn't empty
    if ($result){
        //checking that the $result is more than zero
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3 text-center" >
                    <form method="post" action="orderfood.php?action=add&id=<?php echo $product['id']; ?> ">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-fluid" />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>$ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name'] ; ?>"/>
                            <input type="hidden" name="price" value="<?php echo $product['price'] ; ?>"/>
                            <input type="submit" name="add_to_order" class="btn btn-danger mt-1"
                                    value="Add to Order" />
                        </div>
                    </form>
                </div>
            <?php
            }//endwhile
        }//endif
    }//endif
    ?>
    <div style="clear:both"></div>
    <br>
    <div class="table-responsive ">
    <table class="table products">
        <tr><th colspan="5"><h3>Order Details</h3></th></tr>
    <tr>
        <th width="40%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="20%">Price</th>
        <th width="15%">Total</th>
        <th width="5%">Action</th>
    </tr>
    <?php
    if(!empty($_SESSION['shopping_cart'])):
        //variable total that is used to calculate the grand total of the order
        $total = 0;

        foreach($_SESSION['shopping_cart'] as $key => $product):
    ?>
    <tr>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['quantity']; ?></td>
        <td>$ <?php echo $product['price']; ?></td>
        <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
        <td>
            <a href="orderfood.php?action=delete&id=<?php echo $product['id']; ?>">
                <div class="btn-danger pl-1">Remove</div>
            </a>
        </td>
    </tr>
    <?php
        //calculating the grand total for the order
                $total =  $total + ($product['quantity'] * $product['price']);
        endforeach;
    ?>
    <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?></td>
            <td></td>
    </tr>
    <tr>
        <!-- Show checkut button only if the shopping cart is empty -->
        <td colspan="5">
            <?php
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
            ?>
                <a href="#" class="checkbutton">Checkout</a>
            <?php endif; endif; ?>
        </td>
    </tr>
    <?php
    endif;
    ?>
    </table>
    </div>
</div>
   
<?php include 'myfooter.php'?>