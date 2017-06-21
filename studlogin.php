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
			<div id='operations'></div>
			<div id='activities'>WELCOME PLEASE CLICK HERE TO VIEW YOUR EXAM TIMETABLE<br />
				 <br />
						<table colspan='2'>
							<tr>
								<td><a href = "generated_timetable.php"><input type="button" value="view timetable" ></a></td>
							</tr>
						</table></div>
			<?php include_once('incs/footer.php')?>
		</div>
	</body>
	</html>