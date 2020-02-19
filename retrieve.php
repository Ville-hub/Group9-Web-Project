<!DOCTYPE html>
<html>
<head>
<style>
h3{
    color: white;
    margin: 300px;
    text-align: left;
    padding: 90px;
    }

</style>
</head>
<body>
    <h3>Order Information</h3>
</body>
</html>



<?php include 'db.php' ?>
<?php include 'myheader.php' ;



$sql = "select * from orders";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class='table table-active table-hover '><thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Order</th><th>Request</th><th>Order Received at</th></tr></thead>";

    while($row = $result ->fetch_assoc()){
        echo "<tbody><tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['food'] . "</td><td>" . $row['request'] . "</td><td>" . $row['ordertime'] . "</td></tr></tbody>"      
        ."<br>";
    }
}

else 
{
    echo "no results";
}
 
$conn->close();







?>
