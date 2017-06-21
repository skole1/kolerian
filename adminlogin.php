<?php


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
			<div id='operations'><br />
				please provide your login detail<br />
				 <br />
					<form>
						<table colspan='2'>
							<tr>
								<td>Username:</td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr> 
								<td>Password:</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td><input type="button" name="login" value="login"></td>
							</tr>
						</table>
					</form>
			</div>
			<div id='activities'>ACTIVITIES GOES HERE</div>
			<?php include_once('incs/footer.php')?>
		</div>
	</body>
	</html>