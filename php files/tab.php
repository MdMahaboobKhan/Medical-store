<?php
	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');
	
	if(isset($_POST['submit']))
		echo "successful";
	$id=$_POST['MED_ID'];
	$qty=$_POST['QUANTITY'];

	//Step2
	$query = "SELECT COST FROM MEDICINES WHERE MED_ID='$id'";
	mysqli_query($db, $query) or die('Error querying database.');

	//Step3
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);
	$res = $row['COST'];
	$final_cost = $res * $qty;

	//step4
	$teid1=$_SESSION['teid'];
	
	
	$select2 ="UPDATE BILL SET PRICE=$final_cost WHERE EMP_ID=$teid1";
	$db->query($select2);
	echo "done";
	

	
	
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
	<center><h1> CLICK NEXT TO CONTINUE </h1></center>
</head>
<body>
	<br><br><br><br><br><br>
	<center><a href="billfinal.html"><button>next</button></a></center>
</body>
</html>