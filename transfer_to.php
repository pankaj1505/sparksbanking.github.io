<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
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
   <br>
    
<form action="checkcredit.php" method="post" >
	<center>
     	<div class="container">

     		<h2 class="text-black">Money Transfer</h2>
     		<br>

     		 <table class="table" class="text-black" style="width: 700px ; height: 220px;">
    <tbody>
      <tr>
<td>
	                        <div style="height: 60px; padding-top: 15px;">
							<label for="sender" align="left">Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
		</div> 
			</td>
      </tr>
      <tr  style="padding-top: -20px;">
<td>
	        <div style="height: 60px; padding-top: -10px;">
			<br><label for="transfer">Amount:</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required>
            </div>
			</td>
      </tr>
      <tr>
<td>
				<div class="button" style="padding-left: 35px; padding-top: -20px; padding-bottom: 20px;">
					<center> 
				<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:30px; width:290px;">Transfer</button>
			</center>
				</div>
		   </td>      </tr>
    </tbody>
  </table>
     		
     	</div></center>
      </form>
    	
     


  </body>
</html> 