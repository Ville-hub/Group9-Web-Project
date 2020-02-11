<?php
$servername ="localhost";
$username="booking";
$password="123456";
$dbname="booking";
// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if($conn->connect_error){
    die("Connection failed;". $conn->connect_error );
}
?>