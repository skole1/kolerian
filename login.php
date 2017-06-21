<?php
	session_start();
	
	ob_start();

?>
<!doctype html>
<html>
	<head>
		<title>Secure Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		<body>
			<div id="container">
				<?php include_once('incs/header.php')?>
				
				<div class='rows'>
					<div class="col-md-4"></div>
					<div class="col-md-4">
				<div id="login_container">
				<div class="panel panel-default">
		<div><p>&nbsp; &nbsp;System Login</p></div>
		<hr/>
			<div class="panel-body">
						<?php 
				if(isset($_POST['btnLogin'])){
						$username = $_POST['username'];
						$password = $_POST['password'];
						$account_type = $_POST['account_type'];
						
						if($username && $password && $account_type){
							$pass_hash = md5($password);
							include_once('connections/connect.php');
							
							if($account_type == "Student"){
									$query ="select * from student where username ='".$username."' and password ='".$pass_hash."'";
								$q_execute = mysql_query($query);
								if(mysql_num_rows($q_execute) >0){
									
									while($rows = mysql_fetch_array($q_execute)){
										 $username = $rows['username'];
										
										
									}
									
									
										$_SESSION['stdusername'] = $stdusername;
										header('Location: studlogin.php');
								}else{
									echo "<script>alert('Invalid Username/Password Combination')</script>";
									exit;
								}
							}
								
								
								
								if($account_type == "Staff"){
									$query ="select * from addstaff where username ='".$username."' and password ='".$pass_hash."'";
								$q_execute = mysql_query($query);
								if(mysql_num_rows($q_execute) >0){
									
									while($rows = mysql_fetch_array($q_execute)){
										 $stusername = $rows['username'];
										
										
									}
									
									
										$_SESSION['username'] = $stusername;
										header('Location: staff_page.php');
								}else{
									echo "<script>alert('Invalid Username/Password Combination')</script>";
									exit;
								}	
								}
								
								if($account_type == "Admin"){
									$query ="select * from admin where admin_username ='".$username."' and password ='".$pass_hash."'";
								$q_execute = mysql_query($query);
								if(mysql_num_rows($q_execute) >0){
									
									while($rows = mysql_fetch_array($q_execute)){
										 $secusername = $rows['admin_username'];
										
										
									}
									
									
										$_SESSION['admin_username'] = $secusername;
										header('Location: index.php');
								}else{
									echo "<script>alert('Invalid Username/Password Combination')</script>";
									exit;
								}
								}								
							
							}else{
							echo "<script>alert('Please supply your username and password')</script>";
						}
						}
			?>
						<form action="login.php" method="post">
						<table>
							<tr>
								<td><b>Username:</b></td>
								<td><p><input type="text" name="username"></p></td>
							</tr>
							<tr>
								<td><b>Password:</b></td>
								<td><p><input type="password" name="password"></p></td>
							</tr>
							<tr>
								<td><b>Account Type:</b></td>
								<td><p><select name="account_type">
									<option>-- Select --</option>
									<!--<option value="Staff">Staff</option>-->
									<option value="Student">Student</option>
									<option value="Admin">Admin</option>
								
								</select></p></td>
							</tr>
							<tr>
								<td></td>
								<td><p><input type="submit" value="Login" name="btnLogin"></p></td>
		
							</tr>
						</table>
						</form>
						
					</div>
					<center><p><b>Developed by::</b> <i>Abdulrahman Mustapha <b>12/28679/D/1</b></i></p></center>
				</div>
				
			</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				
			</div>
		
		</body>
</html>