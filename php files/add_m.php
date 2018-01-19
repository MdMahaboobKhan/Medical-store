<?php
	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');
	
	if(isset($_POST['submit']))
		echo "successful";
	$id=$_POST['M_ID'];
	$name=$_POST['M_NAME'];
	$com=$_POST['M_COM'];
	$cost=$_POST['M_COST'];
	
	$select ="INSERT INTO `medicines`(`MED_ID`, `MED_NAME`, `COMPANY`, `COST`) VALUES ('$id','$name','$com','$cost')";
	$db->query($select);
	
?>

<html>
<head>
	<title>Medicine store</title>
	
	<style>
	body{
		color: white;
		background-image: url("image1.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
		font-size: 20px;
	     }
	button{
    			background-color: background-color: #e7e7e7; 
    			border: none;
    			color: black;
    			padding: 15px 32px;
    			text-align: center;
    			text-decoration: none;
    			display: inline-block;
    			font-size: 16px;
		}
	</style>
</head>
<body>
	<br><br><br>
	<center><h1>Medicine added successfully</h1>
	<br><br>
	<table>
	<tr>	<td>Medicine ID :</td>
		 <td><?php echo $id?></td></tr>
	<tr>	<td>Medicine NAME :</td>
		<td><?php echo $name?></td></tr>
	<tr>	<td>Medicine COMPANY :</td>
		<td><?php echo $com?></td></tr>
	<tr>	<td>Medicine COST :</td>
		<td><?php echo $cost?></td></tr>
	</table>


	<br><br><br><br><br><br><form action="owner_check.php" method="post">
    <input type="hidden" name="OWNER" value="final">

	<button>GO BACK</button>
</form>
</center>
</body>
</html>