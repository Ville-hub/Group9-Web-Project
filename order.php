<?php
session_start();
include 'db.php';
include 'myheader.php'?>

<div class="row pt-3">
<?php
if(isset($_GET['do'])){ // check request from page forms
	$action = $_GET['do'];
	//Array ( [quantity] => 1 [item_number] => 2 [item_name] => pant [item_price] => 38 ) Array ( [do] => add ) 
	switch($action){
	case"add":
	// code of adding new items to the order
	// first get item details in variables
		$item_number = mysqli_real_escape_string($conn, $_POST['item_number']);
		$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
		$item_price = mysqli_real_escape_string($conn, $_POST['item_price']);	
		$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);	
		// check if there is an existing order from the session where we save session id 
		if(!isset($_SESSION['order_id'])) 
		{ // if there isn't an order, make new order in orders table and save its id in session array
			
			$today = date('Y-m-d : h-i-s');
			$sql_order = "INSERT INTO orders (date) VALUES ('$today')";
			$result = mysqli_query($conn,$sql_order) or die(mysqli_error($conn));
			$order_id = mysqli_insert_id($conn);
			$_SESSION['order_id'] = $order_id;
			
		}
		else 
		{
			//if there is an order, count items in order has the same type of added item
			$order_id = $_SESSION['order_id'];
			$sql_item_quantity = "select count(*) as quantity from order_items where order_id =$order_id and item_number = $item_number";
			$result = mysqli_query($conn,$sql_item_quantity) or die(mysqli_error($conn));
			$row = mysqli_fetch_assoc($result);

			$item_quantity = $row['quantity'];
			//$result->fetch_assoc()['quantity'];//$row[0];

			
		}
		//Adding new item
		// if there is one or more from this item we only update the record of existed item add one to the quantity and add an item price to the existing cost 
		if( intval($item_quantity) >= 1 ){
			$sql_add_item = "Update order_items set quantity=quantity+1 , price = price + $item_price";
		}else{ 
		// there is no items in the same type so ,we make a new record to add the item
			$sql_add_item = "INSERT INTO order_items (order_id,item_number,item_name,quantity,price ) VALUES ($order_id,$item_number,'$item_name',$quantity,$item_price)";
			
		}
		$result = mysqli_query($conn,$sql_add_item) or die(mysqli_error($conn));
		if($result){
			$msg = "Item added";
		}else{
			$msg = "Cannot add item";
		}			
	break;	
	case"delete":
	// Code of deleting a specific items details from order 
		$item_id = intval($_GET['id']);
		$order_id = $_SESSION['order_id'];
		$sql_item_delete = "DELETE FROM order_items where order_id = $order_id and id = $item_id ";
		$result = mysqli_query($conn,$sql_item_delete)or die(mysqli_error($conn).'-'. $sql_item_delete);
		if($result){
			$msg = "item was deleted";
		}else{
			$msg = "Cannot delete item";
		}	
		
	break;
	case"delete_all":
	// Code of deleting all items from order 
		$order_id = $_SESSION['order_id'];
		$sql_item_delete = "DELETE FROM order_items where order_id = $order_id ";
		$result = mysqli_query($conn,$sql_item_delete)or die(mysqli_error($conn));
		if($result){
			$msg = "Cart is empty";
		}else{
			$msg = "Cannot empty cart";
		}		
	break;
	case"add_one":
	//  Code of increasing the quantity of an item by one 
		$item_id = intval($_GET['id']);
		$order_id = $_SESSION['order_id'];
		$sql_add_item = "Update order_items set quantity=quantity+1 , price = ( price /( quantity - 1) ) * quantity where id =$item_id";
		$result = mysqli_query($conn,$sql_add_item)or die(mysqli_error($conn).'-'. $sql_item_delete);
		if($result){
			$msg = "Item added";
		}else{
			$msg = "Cannot add item";
		}	
	
	break;
	case"remove_one":
	//  Code of decreasing the quantity of an item by one 	
		$item_id = intval($_GET['id']);
		$order_id = $_SESSION['order_id'];
		$sql_remove_item = "Update order_items set quantity=quantity-1 , price = ( price /( quantity + 1) ) * quantity where id =$item_id";
		$result = mysqli_query($conn,$sql_remove_item)or die(mysqli_error($conn).'-'. $sql_item_delete);
		if($result){
			$msg = "Item was removed";
		}else{
			$msg = "Cannot remove item";
		}		
		break;
			
		
	}	
	
}

if(isset($_SESSION['order_id'])){
	// getting the saved items in the existing order
	$order_id = mysqli_real_escape_string($conn, $_SESSION['order_id']) ;
	$sql_get_order_items = "select * from order_items where order_id =$order_id ";
	$cart_data = mysqli_query($conn,$sql_get_order_items)or die(mysqli_error($conn));
	$items_number = mysqli_num_rows($cart_data);
	
} 

?>
</div>
<?php
// get the view code from template file
include 'cart_template.php';
include 'myfooter.php';
?>
