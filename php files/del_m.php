<?php
	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');
	
	if(isset($_POST['submit']))
		echo "successful";
	$id=$_POST['M_ID'] or die('i died here');
	
	$getinfo ="SELECT * FROM MEDICINES WHERE MED_ID='$id'";
	$result = mysqli_query($db, $getinfo);    
    $row = mysqli_fetch_array($result);
       $name = $row['MED_NAME'];
       $com = $row['COMPANY'];
       $cost =$row['COST'];

	$select = "DELETE FROM MEDICINES WHERE MED_ID = '$id'";
	$db->query($select) or die ('sad');
	
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
<center>	
	<h1> Medicine Deleted successfully</h1>
	<br><br>
	 Medicine Details :
	<table>
	<tr>	<td>Medicine ID :</td>
		<td><?php echo $id?></td></tr>
	<tr>	<td>Medicine Name :</td>
		<td><?php echo $name?></td></tr>
	<tr>	<td>Medicine Company :</td>
		<td><?php echo $com?></td></tr>
	<tr>	<td>Medicine Cost :</td>
		<td><?php echo $cost?><td></tr>
	</table>

		<br><br><br><br><br><br><form action="owner_check.php" method="post">
    <input type="hidden" name="OWNER" value="final">

	<button>GO BACK</button>
</form>
</center>
</body>
</html>