<?php include 'myheader.php' ?>
<html>
    <head>
        <style>
            .booking{
                color:white;
            }
            </style>
        </head>
    </html>
<div  class="row mt-5">
    <div class="col-md-12 bg-dark text-center pt-3">
<?php include 'db.php' ;

$na=$_POST['name'];
$e=$_POST['email'];
$f=$_POST['food'];
$r=$_POST['request'];
$sql= "insert into orders(name,email,food,request)
values ('$na','$e','$f','$r')";

if($conn->query($sql)===TRUE){
    
    echo'<p style="color:white;font-size:20px;font-family:cubic;margin:15px;">Order succesful. </p>';
    echo '<p style="color:white;font-size:20px;font-family:cubic;margin:15px;">Thank you! </p>';
} else{
    echo "ERROR: " .$sql . "<br>" .$conn->error;

}
$conn->close();

?>
    </div>
</div>
<?php include 'myfooter.php' ?>