<?php include 'home_nobell.php' ?>
<html>
    <head>
        <style>
 .modal1{
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
  
  .modal2{
    width:550px;
    height:350px;
    background-color:white;
    position:relative;
  }
.thanks{
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

<div class="modal1">
    <div class="modal2">
        <div class="closeForm" id="closeIdForm">+</div>
            <form action="" name="thanksForm" class="container">
            <p class="thanks"> THANK YOU FOR SIGNING UP! </p>
            </form>

        </div>
    </div>

<script>


document.getElementById('closeIdForm').addEventListener('click',function(){
  document.querySelector('.modal1').style.display='none';
});
</script>