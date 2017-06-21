<?php
session_start();
	
	ob_start();
	
	if(!isset($_SESSION['admin_username'])){
			header('Location:index.php');
	}
	
	
	if (isset($_POST["add"])){
	
		$firstname= $_POST["fname"];
		$surname= $_POST["sname"];
		$othername= $_POST["oname"];
		$age= $_POST["age"];
		$gender= $_POST["gender"];
		$state= $_POST["state"];
		$phone= $_POST["phone"];
		$username= $_POST["username"];
		$password= $_POST["password"];
			
			if($firstname && $surname && $othername && $age && $gender && $state && $phone && $username && $password){
			include ('connections/connect.php');
			
				$query = "INSERT INTO addstaff VALUES('','$firstname','$surname','$othername','$age','$gender','$state','$phone','$username','$password')" or die ('cannot connect');
					
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
				<form action="addstaff.php" method="post">
					<table table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
						<tr>
							<td>FIRST NAME:</td>
							<td><input type="text" name="fname" placeholder="enter your name"></td>
						</tr>
						<tr>
							<td>SURNAME:</td>
							<td><input type="text" name="sname" placeholder="enter your surname pls"></td>
						</tr>
						<tr>
							<td>OTHERNAME:</td>
							<td><input type="text" name="oname" placeholder="enter your othername pls"></td>
						</tr>
						<tr>
							<td>AGE:</td>
							<td><input type="text" name="age" placeholder="enter your age"></td>
						</tr>
						<tr>
							<td>GENDER:</td>
							<td>
							<select name="gender">
								<option value="">::Select gender::</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>STATE:</td>
							<td>
							<select name="state">
								<option value="">::Select state::</option>
								<option value="bauchi">Bauchi</option>
								<option value="kogi">Kogi</option>
								<option value="kano">Kano</option>
								<option value="kaduna">Kaduna</option>
								<option value="kebbi">Kebbi</option>
								<option value="anambra">Anambra</option>
								<option value="abuja">Abuja</option>
								<option value="oyo">Oyo</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>PHONE NUMBER:</td>
							<td><input type="text" name="phone" placeholder="enter your phone"></td>
						</tr>
						<tr>
							<td>USERNAME:</td>
							<td><input type="text" name="username" placeholder="enter your username"></td>
						</tr>
						<tr>
							<td>PASSWORD:</td>
							<td><input type="password" name="password" placeholder="enter your password"></td>
						</tr>
						<tr>
							<td><input type="submit" name="add" value="add"></td>
							<td><input type="reset" name="clear" value="clear"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class='clear'></div>
			<div id='foot' align='center'>
				copyrigth &copy;Computer Science ATBU<br />
				
			</div>
		</div>
	</body>
	</html>