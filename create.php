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
 //method go with name of the variable 
$d= $_POST['date'];
$t= $_POST['time'];
$the_time = date('h:i A', strtotime($t));
$n= $_POST['number'];
$f=$_POST['fname'];
$l=$_POST['lname'];
$e=$_POST['email'];


$sql= "insert into booking(date,time,number,fname,lname,email)
values ('$d','$t','$n','$f','$l','$e')";

if($conn->query($sql)===TRUE){
    echo "<td>";
    include 'booking_done.php';
    echo "</td>";
   // echo'<p style="color:white;font-size:20px;font-family:cubic;margin:50px;">Booking successfully. </p>';
   // echo '<p style="color:white;font-size:20px;font-family:cubic;margin:50px;">Thank you! </p>';
    
} else{
    echo "ERROR: " .$sql . "<br>" .$conn->error;

}
$conn->close();

?>
