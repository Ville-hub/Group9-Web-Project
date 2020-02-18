<?php include 'myheader.php' ?>
<html>
    <head>
        <style>
            
            </style>
        </head>
    </html>
<?php include 'db.php' ;
$e=$_POST['email'];
$sql= "insert into newsletter(email)
values ('$e')";

if($conn->query($sql)===TRUE){
    
    echo "<td>";
    include 'thankForm.php';
    echo "</td>";
    

} else{
    echo "ERROR: " .$sql . "<br>" .$conn->error;

}
$conn->close();

?>
