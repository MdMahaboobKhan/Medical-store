<?php

	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');

	if(isset($_POST['submit']))
		echo "successful";

	$ieid=$_SESSION['teid'];
	$q="SELECT MAX(BILL_NO) FROM bill ";
	$result1 = mysqli_query($db,$q) or die ('dead');
	$row1 = mysqli_fetch_array($result1) or die ('dead2');
	$bno = $row1[0] or die ('dead3');

	//$bno = $_POST['bno'];
	//$_SESSION['sbno']=$bno;
	$num = $_POST['member'] or die ('here');
	//$id=$_POST['CUST_ID'];
	$name=$_POST['CUST_NAME'];
	$_SESSION['sname']=$name;
	$ph=$_POST['CUST_PHONE'];

	for($i=0,$j=0;$i<$num;$i++,$j++)
	{
		$s=$_POST['med'.$i] or die('sad');
		$q=$_POST['qty'.$j];
		//echo $s;
		//echo br;
		//echo $q;
		//echo br;
		$query = "SELECT COST FROM MEDICINES WHERE MED_ID='$s'";
		mysqli_query($db, $query) or die('Error querying database.');

		//Step3
		$result = mysqli_query($db, $query) or die ('dead');
		$row = mysqli_fetch_array($result) or die ('dead2');
		$res = $row['COST'] or die ('dead3');
		$final_cost = $res * $q;

		$sq="INSERT INTO QTY_MED VALUES ($bno,$s,$q,$final_cost)";
		$db->query($sq) or die('very sad');
	}

	$select="INSERT INTO CUSTOMER(CUST_NAME,CUST_PHONE) VALUES('$name','$ph')";

	$db->query($select) or die('sad af');



	$teid1=$_SESSION['teid'];
	$q2="SELECT MAX(CUST_ID) FROM CUSTOMER";
	$result2 = mysqli_query($db,$q2) or die ('dead');
	$row2 = mysqli_fetch_array($result2) or die ('dead2');
	$id = $row2[0] or die ('dead3');


	$select2 ="UPDATE BILL SET CUST_ID=$id WHERE EMP_ID=$teid1";
	$db->query($select2);



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
		font-size: 20px
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
	<br>
	<center><h1> CLICK NEXT TO CONTINUE </h1>
	<p>The medicines and their IDs</p>

	<?php
	$query = "SELECT * FROM MEDICINES";
	//mysqli_query($db, $query) or die('Error querying database.');

	$result = mysqli_query($db, $query);
	//$row = mysqli_fetch_array($result);
?>
		
	

	</center>
</head>
<body>
<center>
<table border =2 bordercolor=white style="height:30%; width:50%; font-size: 20px" >

	<tr>
		<td>MEDICINE ID</td>
		<td>NAME</td>
	</tr>
<?php
	while ($row = mysqli_fetch_array($result)) { 
?>	
	<tr>
	<td><?php echo $row['MED_ID'] ?></td>
	<td><?php echo $row['MED_NAME'] ?></td>
	</tr>
<?php	 } 
?>

</table>
	<br><br><br><br>
	<a href="page3.php"><button>next</button></a></center>
</body>
</html>
