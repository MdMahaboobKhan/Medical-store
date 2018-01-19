<?php
	
	session_start();
	
	$db = mysqli_connect('localhost','root','','mdbms')
 	or die('Error connecting to MySQL server.');
	
	if(isset($_POST['submit']))
		echo "successful";
	$eid=$_POST['EMP_ID'];
	
	$_SESSION['teid'] = $eid;
	
	$select1 ="SELECT EMP_ID FROM EMPLOYEE";
	$result = mysqli_query($db, $select1);
	
	//$row = mysqli_fetch_array($result);

	
	//if($eid == '' || $eid != '100'|| $eid != '101'|| $eid != '102')
			//echo "INVALID ID!! Please go back and enter a valid Employee ID";
	//else{
		$select="INSERT INTO BILL(EMP_ID) VALUES('$eid')";
		$db->query($select);
		//echo "EMPLOYEE LOGIN SUCCESSFUL";
	
	
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
	<center><h1> CLICK NEXT TO CONTINUE </h1></center>
</head>
<body>
	<br><br><br><br><br><br>
	<center>

<?php
	$flag = 0;
	
	while ($row = mysqli_fetch_array($result)){
		if($row['EMP_ID']== $eid){
		echo "Login successful";
		$flag = 1;
?>
	<br><br><br><br>
	<a href="index.html"><button>PROCEED</button></a>
<?php } ?>
<?php } ?>

<?php
	if($flag==0){
		echo "Invalid id! Go back and try again";
?>
	<br><br><br><br><br><br>
	<a href="emp.html"><button>RETRY</button></a>
<?php } ?>

</center>
</body>
</html>