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
<?php include 'db.php' ;
$t= $_POST['time']; //method go with name of the variable 
$d= $_POST['date'];
$n= $_POST['number'];
$w= $_POST['wishes'];
$na=$_POST['name'];
$e=$_POST['email'];
$sql= "insert into booking(time,date,number,wishes,name,email)
values ('$t','$d','$n','$w','$na','$e')";

if($conn->query($sql)===TRUE){
    
    echo'<p style="color:white;font-size:20px;font-family:cubic;margin:15px;">Booking successfully. </p>';
    echo '<p style="color:white;font-size:20px;font-family:cubic;margin:15px;">Thank you! </p>';
} else{
    echo "ERROR: " .$sql . "<br>" .$conn->error;

}
$conn->close();

?>
<?php include 'myfooter.php' ?>