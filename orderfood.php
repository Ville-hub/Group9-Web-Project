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
</div>
   
<?php include 'myfooter.php'?>