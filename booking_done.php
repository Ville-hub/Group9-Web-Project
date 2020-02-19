<?php include 'home.php' ?>
<html>
    <head>
        <style>
 .modal3{
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.7);
    position:fixed;
   overflow:auto;
   top:0;
  left:0;
   justify-content:center;
   align-items:center;
   display:flex;
 }
  
  .modal4{
    width:550px;
    height:350px;
    background-color:white;
    position:relative;
  }
.bookingDone{
   font-family: Garamond, serif;
   color:black; 
   font-size:20px;
   margin-top:150px;
   margin-left:10px;
   text-align:center;
   border:1px solid black;

}
.closeForm{
    position:absolute;
    top:0;
    right:14px;
    font-size:42px;
    transform:rotate(45deg);
    cursor:pointer;
    color:black;
}

        </style>
    </head>
</html>

<div class="modal3">
    <div class="modal4">
        <div class="closeForm" id="closeIdForm">+</div>
            <form action="" name="bookingDone" class="container">
            <p class="bookingDone"> Hi! Booking successfully! See you at Saigon Diner! </p>
            </form>

        </div>
    </div>

<script>


document.getElementById('closeIdForm').addEventListener('click',function(){
  document.querySelector('.modal3').style.display='none';
});
</script>