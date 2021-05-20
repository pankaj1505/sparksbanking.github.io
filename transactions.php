<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
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
  background-image: url('img/abc.jpg');
  background-size: 100% 100%;
  background-attachment: fixed;
  width: 100%;
  height: 840px;
}

table, td, th {
  border:1px solid black;
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

        <h2 class="text-black">All Transactions</h2>
        <hr style="width:500px ;height:2px;border-width:1px;color:gray;background-color:gray">
        
        <table>
    <thead>
      <tr>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      
      <?php while($row = $result->fetch_assoc()) { ?>
      
      <tr>
        <td><?php echo $row["sender"]; ?></td>
        <td><?php echo $row["receiver"]; ?></td>
        <td><?php echo $row["amount"]; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

      </center>
      
    </div>
<br>

  </body>
</html>