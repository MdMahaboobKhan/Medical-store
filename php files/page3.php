<?php
	session_start();

	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');

	if(isset($_POST['submit']))
		echo "successful";
	//$id=$_POST['M_ID'] or die('i died here');
	//$ibno=$_SESSION['sbno'];
	$q="SELECT MAX(BILL_NO) FROM bill ";
 	$result1 = mysqli_query($db,$q) or die ('dead');
  	$row1 = mysqli_fetch_array($result1) or die ('dead2');
  	$bno = $row1[0] or die ('dead3');
	
	$cname = $_SESSION['sname'];	

	$fc=0;
	$getinfo ="SELECT q.med_id,m.med_name,m.cost,q.quantity,q.cost from medicines m,qty_med q where m.med_id=q.med_id and q.bno=$bno";
	$result = mysqli_query($db, $getinfo);
	
	
	
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

	<center><h1> BILL </h1></center>
<body>
<center>
	<br><br><br><br>
<table border=2 bordercolor=white style="height:30%; width:50%; font-size: 20px" >
	<tr>
		<td>Bill no :</td>
		<td><?php echo $bno ?></td>
		<td>Customer Name :</td>
		<td><?php echo $cname ?></td>
	</tr>
	<br>
	<tr><td>MED_ID</td><td>MED_NAME</td><td>COST</td><td>QUANTITY</td><td>TOTAL</td></tr>
	
<?php
if($result->num_rows>0)
		{
			 while ($row = mysqli_fetch_array($result)) {
?>

       <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td><td><?php echo $row[2]?></td><td><?php echo $row[3]?></td><td><?php echo $row[4]?></td></tr>
<?php
			 $fc=$fc+$row[4];
		 }
?>		

<?php } 
	$select2 ="UPDATE BILL SET PRICE=$fc WHERE BILL_NO = $bno";
	$db->query($select2);	
?>



	<tr>
		<td>final cost :</td>
		<td><?php echo $fc ?></td>
	</tr>
</table>
<br><br>
	<button>PRINT</button><br><br>
	<a href="home.html"><button>GO BACK TO HOME</button></a><br>
</center>
</body>
</html>
