<?php

session_start();
	
	ob_start();
	
	if(!isset($_SESSION['admin_username'])){
			header('Location:index.php');
	}
	
	if (isset($_POST["add"])){
	
		$firstname= $_POST["firstname"];
		$surname= $_POST["surname"];
		$username= $_POST["username"];
		$password= $_POST["password"];

			
			if($firstname && $surname && $username && $password){
			include ('connections/connect.php');
			
				$query = "INSERT INTO admin VALUES('','$firstname','$surname','$username','$password')" or die ('cannot connect');
					
					$query_run = mysql_query($query);
			
				if($query_run){
					echo '<script>alert("reccord saved sucessfully")</script>';
			}
	}else{
		echo '<script>alert("Please fill in the form")</script>';
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	
</head>	
	<body>
		<div id='container'>
			<?php include_once('incs/header.php')?>
			<?php include_once('incs/nav.php')?>
			<div id='operations'>
				 <?php include_once('incs/menu.php');?>
			</div>
			<div id='activities'><br /><br />
				<form action="admin.php" method="POST">
					<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
						<tr>
							<td width="100">FIRSTNAME:</td>
							<td><input type="text" name="firstname" placeholder="enter first name "></td>
						</tr>
						<tr>
							<td>SURNAME:</td>
							<td><input type="text" name="surname" placeholder="enter  surname "></td>
						</tr>
						<tr>
							<td>USERNAME:</td>
							<td><input type="text" name="username" placeholder="enter username"></td>
						</tr>
						<tr>
							<td>PASSWORD:</td>
							<td><input type="password" name="password" placeholder="enter password"></td>
						</tr>
						<tr>
							<td><input type="submit" name="add" value="add"></td>
							<td><input type="reset" name="clear" value="clear"></td>
						</tr>
					</table>
				</form>
			</div>
			<?php include_once('incs/footer.php')?>
		</div>
	</body>
	</html>