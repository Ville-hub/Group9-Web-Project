<?php
session_start();
include('db.php');
include 'myheader.php';
if(isset($_POST['save_order'])){
	if(empty($_POST['ship_name']) || empty($_POST['email']) || empty($_POST['phone'])){
		$msg = "Please ,complete order data ";
	}else{
		$ship_name = mysqli_real_escape_string($conn, $_POST['ship_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
												
			
		$order_id = mysqli_real_escape_string($conn, $_SESSION['order_id']) ;
		$sql_get_save_order = "UPDATE orders set ship_name='$ship_name',email='$email',phone='$phone' where id = $order_id ";
		$save_order = mysqli_query($conn,$sql_get_save_order)or die(mysqli_error($conn));
		if($save_order){
			print_r($_SESSION);
			unset($_SESSION['order_id']);
			print_r($_SESSION);
			die( "Order succesful! It will be ready for pick up soon.<br />
	Go back to <a href='home.php'>front page</a>");
		}else{
			$msg = "Cannot save your order, please try again!"	;
		}
		
		
	}
}

if(isset($_SESSION['order_id'])){
	// getting the saved items in the existing order
	$order_id = mysqli_real_escape_string($conn, $_SESSION['order_id']) ;
	$sql_get_order_items = "select * from order_items where order_id =$order_id ";
	$cart_data = mysqli_query($conn,$sql_get_order_items)or die(mysqli_error($conn));
	$items_number = mysqli_num_rows($cart_data);
	
}else{
	header("Location:cart.php");
	} 
if($items_number < 1){
	die( "You didn't add any items to your order ! <br />
	Go to  <a href='cart.php'>items page </a>");
	}
    include 'submit_order_template.php';
    include 'myfooter.php';
?>