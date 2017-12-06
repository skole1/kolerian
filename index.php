
<!DOCTYPE html>
<?php
	session_start();
	
	ob_start();
	
	if(!isset($_SESSION['admin_username'])){
		header('Location: login.php');
	
	}

?>
<html>
<head>
	<title>trying change here </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	
</head>	
	<body>
		<div id='container'>
			<?php include_once('incs/header.php')?>
			<?php include_once('incs/nav.php')?>
			
			<div id='operations'>
				<b>:: You login as:: </b>
				<a href='adminlogin.php'>Administrator</a><br />
				
				<br/>
				
				<?php include_once('incs/menu.php');?>
				
			</div>
			<div id='activities'>
				<br/>
				<br/>
				<br/>
				<center><h4>Welcome to ATBU Faculty of Science Time Table Generating System</h4></center>
				<p>This System Generates Exams Time Table using "Shortest Job First Algorithm"</p>
				
			<br />
				</div>
			<?php include_once('incs/footer.php')?>
		</div>
	
	
	</body>
	</html>