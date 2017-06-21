<?php
		session_start();
	
	ob_start();
	
	if(!isset($_SESSION['admin_username'])){
			header('Location:index.php');
	}
	


		if (isset($_POST["add"])){
	
		$venuename= $_POST["venuename"];
		$venuecapacity= $_POST["venuecapacity"];

			
			if($venuename && $venuecapacity){
			include ('connections/connect.php');
			
				$query = "INSERT INTO addvenues VALUES('','$venuename','$venuecapacity')" or die ('cannot connect');
					
					$query_run = mysql_query($query);
			
				if($query_run){
					echo '<script>alert("reccord saved sucessfully")</script>';
					echo '<script>window.open("addvenue.php","_self")</script>';
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
				<form action="addvenue.php" method="POST">
					<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
						<tr>
							<td width="100">VENUE NAME:</td>
							<td><input type="text" name="venuename" placeholder="enter venue name"></td>
						</tr>
						<tr>
							<td>VENUE CAPACITY:</td>
							<td><input type="text" name="venuecapacity" placeholder="enter capacity"></td>
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