<?php
	
	if(isset($_POST['submit']))
		echo "successful";
	$pass = $_POST['OWNER'];
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
	
</head>
<body>
<center>

<?php
	if($pass == 'final')
	{	
		
		echo "<center>OWNER LOGIN SUCCESSFUL<center>";
		
?>
	<br><br><br><br><br>
	<a href="view_emp.php">
	<button>View Employees</button><br><br>
	</a>
	<a href="view_med.php">
	<button>View Medicines</button><br><br>
	</a>
	<a href="add_m.html">
	<button>Add Medicines</button><br><br>
	</a>
	<a href="del_m.html">
	<button>Delete Medicines</button><br><br>
	</a>
	<a href="add_emp.html">
	<button>Add Employee</button><br><br>
	</a>
	<a href="del_emp.html">
	<button>Delete Employee</button><br><br>
	</a>
	<a href="home.html">
	<button>Back to home</button>
	</a>

<?php } ?>
	
<?php	
	if($pass != 'final'){

		echo "<center><br><br>invalid password</center>";
?>
	<br><br><br>
 	<a href="owner_login.html"><button>RE-LOGIN</button></a>
	
<?php } ?>
	
	<br><br><br><br><br>
	
	</center>
</body>
</html>