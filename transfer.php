<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title>SPARKS BANK
  </title>
 <?php
include "includes/links.php";
  ?>

  <style>
    #bg_img2 {
  background-image: url('img/pan.jpg');
  background-size: 100% 100%;
  background-attachment: fixed;
  width: 100%;
  height: 840px;
}

table, td, th {
  border: 1px solid black;
  text-align: center;
  color: black;
  padding-top: 10px;
  padding-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<script>
     function random_function()
            {
                var a=document.getElementById("input").value;
        if(a==="Pankaj"){
         var arr=["Anurag","Pawan","Abhi","Sakshi","Swati","Sanu","Akash","Champakali","Ramdulari"];
        }
        else if(a==="Anurag"){
          var arr=["Pankaj","Pawan","Abhi","Sakshi","Swati","Sanu","Akash","Champakali","Ramdulari"];
        }
        else if(a==="Pawan"){
          var arr=["Pankaj","Anurag","Abhi","Sakshi","Swati","Sanu","Akash","Champakali","Ramdulari"];
        }
        else if(a==="Abhi"){
          var arr=["Pankaj","Anurag","Pawan","Sakshi","Swati","Sanu","Akash","Champakali","Ramdulari"];
         }
         else if(a==="Sakshi"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Swati","Sanu","Akash","Champakali","Ramdulari"];
         }
         else if(a==="Swati"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Sakshi","Sanu","Akash","Champakali","Ramdulari"];
         }
         else if(a==="Sanu"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Sakshi","Swati","Akash","Champakali","Ramdulari"];
         }
         else if(a==="Akash"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Sakshi","Swati","Sanu","Champakali","Ramdulari"];
         }
         else if(a==="Champakali"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Sakshi","Swati","Sanu","Akash","Ramdulari"];
         }
         else if(a==="Ramdulari"){
          var arr=["Pankaj","Anurag","Pawan","Abhi","Sakshi","Swati","Sanu","Akash","Champakali"];
         }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
  </script> 


</head>
<body>

<div id="bg_img2">
   
   <nav class="navbar navbar-expand-md navbar-light">

    <div class="container-fluid" style="padding-left: 70px; padding-right: 70px; padding-top: 30px;">
      
        <a class="navbar-brand" href="#"><h1>SPARKS BANK</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style="padding-right: 50px;";>
            <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" style="padding-right: -10px;">
            <a class="nav-link" href="aboutBank.php"><h3>about</h3></a>
            </li>
          </ul>

    </div>

   </nav>  
<br>

<br>
   
   <div class="container">
     <center>
     <h1 class="text-black">Transfer Amount</h1>

     <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
  <div class="center">
  <form action="updatecredit.php" method="post">
    <label for="sender" align="left" class="text-black" style="padding-right: 30px;" >Senders Name: &nbsp;</label>
    <select id="input" name="sender"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function()">
      <option  selected>Select Name</option>
      <option value="Pankaj">Pankaj</option>
      <option value="Anurag">Anurag</option>
      <option value="Pawan">Pawan</option>
      <option value="Abhi">Abhi</option>
      <option value="Sakshi">Sakshi</option>
      <option value="Swati">Swati</option>
      <option value="Sanu">Sanu</option>
      <option value="Akash">Akash</option>
      <option value="Champakali">Champakali</option>
      <option value="Ramdulari">Ramdulari</option>
    </select><br><br>
    <label for="receiver" align="left" class="text-black" style="padding-right: 30px;" >Receiver Name:&nbsp;</label>
    <select id="output" name="receiver"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function1()" >
        </select><br><br>
    <label for="transfer" align="left" class="text-black" style="padding-right: 20px;" >Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
    <input type="number"  name="transfer" style="font-size: 12pt; height: 30px; width:285px;" align="middle" required>
    <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
    <div class="button1" style="padding-left:130px; ">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:200px;">
    </div>
  </form> 
  </div>

     </center>
   </div>

  </body>
</html>