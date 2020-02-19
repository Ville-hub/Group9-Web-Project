<?php include 'myheader.php' ?>
<?php include 'db.php' ?>

<style>
h3{
    color: white;
    margin: 300px;
    text-align: left;
    padding: 90px;
    }

</style>

<?php 


$sql = "select * from orders";
$result = $conn->query($sql); ?>
<div class="table-responsive ">
<table class="table table-striped table-bordered">
    <thead class="thead-light" >
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Order</th>
            <th scope="col">Request</th>
            <th scope="col">Order Received At</th>
            
        </tr>
    </thead>

    <tbody class="table-light">
<?php     
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.


    while($row = $result ->fetch_assoc()){?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["food"]?></td>
            <td><?php echo $row["request"]?></td>
            <td><?php echo $row["ordertime"]?></td>
        </tr>
        <?php
    }
}

else 
{
    echo "no results";
}
?>
    </tbody>
    </table>
    </div>

<?php
$conn->close();
?>

<?php include 'myfooter.php' ?>