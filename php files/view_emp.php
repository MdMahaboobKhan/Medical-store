<?php

	$db = mysqli_connect('localhost','root','','mdbms')
	or die('Error connecting to MySQL server.');

	$query = "SELECT * FROM EMPLOYEE";
	

	$result = mysqli_query($db, $query);
	

?>

	<html>
	<head>
		<title>Medicine store</title>

		<style>
		body{
			color:black;
			background-image: url("image1.jpg");
			background-repeat: no-repeat;
			background-size: 100%;
			font-size: 22px;
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
		<center><h1> EMPLOYEE DETAILS </h1></center>
	</head>
	<body>
	<center>
	<br><br>
	<table border=2 bordercolor=white style="height:30%; width:50%; font-size: 20px">
	<tr>	<td>EMP_ID</td><td>NAME</td><td>PHONE</td><td>ADDRESS</td><td>SALARY</td></tr>

<?php
		while ($row = mysqli_fetch_array($result)) {
 	//echo $row[0] . ' --- ' . $row[1] . ' --- '.$row[2] . ' --- '.$row[3] . ' --- ' .$row[4]  .'<br />';
?>

	<tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td></tr>
<?php } ?>
	</table>		

	<br><br><br><br><br><br><form action="owner_check.php" method="post">
	    <input type="hidden" name="OWNER" value="final">

		<button>GO BACK</button>
	</center>
	</body>
	</html>
