<?php

$db = mysqli_connect('localhost','root','','mdbms')
or die('Error connecting to MySQL server.');

	$query = "SELECT * FROM MEDICINES";
	//mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
	//$row = mysqli_fetch_array($result);
	
	?>

	<html>
	<head>
		<title>Medicine store</title>

		<style>
		body{
			color: black;
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
		<center><h1>MEDICINES</h1></center>
	</head>
	<body>
	<center>
	<table border=2 bordercolor=white style="height:30%; width:50%; font-size: 20px">
	<tr>	<td>MED_ID</td><td>NAME</td><td>COMPANY</td><td>COST</td></tr>

<?php
		while ($row = mysqli_fetch_array($result)) {
 	//echo $row[0] . ' --- ' . $row[1] . ' --- '.$row[2] . ' --- '.$row[3] . ' --- ' .$row[4]  .'<br />';
?>

	<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td></tr>
<?php } ?>
	</table>		

	
		<br><br><br><br><br><br><form action="owner_check.php" method="post">
	    <input type="hidden" name="OWNER" value="final">

		<button>GO BACK</button></a>
	</center>
	</body>
	</html>
