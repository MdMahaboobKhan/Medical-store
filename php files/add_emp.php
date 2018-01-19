<?php
	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');
	
	if(isset($_POST['submit']))
		echo "successful";
	$id=$_POST['M_ID'];
	$name=$_POST['M_NAME'];
	$ph=$_POST['M_COM'];
	$add=$_POST['M_COST'];
	$sal=$_POST['M_SAL'];
	
	$select = "INSERT INTO employee VALUES ('$id','$name','$ph','$add','$sal')";
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
<center>	<h1> Employee added successfully</h1>
	<br><br>
	<table>
	<tr>	<td>Employee ID :</td>
		<td><?php echo $id?><td></tr>
	<tr>	<td>Employee NAME :</td>
		<td><?php echo $name?></td></tr>
	<tr>	<td>Employee PHONE :</td>	
		<td><?php echo $ph?></td>/tr>
	<tr>	<td>Employee ADDRESS :</td>
		<td><?php echo $add?></td></tr>
	<tr>	<td>Employee SALARY :</td>
		<td><?php echo $sal?></td></tr>
	</table>
	
	<br><br><br><br><br><br><form action="owner_check.php" method="post">
    <input type="hidden" name="OWNER" value="final">

	<button>GO BACK</button>
	</form>
</center>
</body>
</html>