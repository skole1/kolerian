<?php
	
	session_start();
	
	ob_start();
	
	if(!isset($_SESSION['admin_username'])){
			header('Location:index.php');
	}
	

		if (isset($_POST["add"])){
	
		$coursename= $_POST["coursename"];
		$coursecode= $_POST["coursecode"];
		$courseunit= $_POST["courseunit"];
		$class= $_POST["class"];
		$semester= $_POST["semester"];

			
			if($coursename && $coursecode && $courseunit && $class){
			include ('connections/connect.php');
			
				$query = "INSERT INTO addcourse VALUES('','$class','$coursename','$coursecode','$courseunit','$semester')" or die ('cannot connect');
					
					$query_run = mysql_query($query);
			
				if($query_run){
					echo '<script>alert("reccord saved sucessfully")</script>';
					echo'<script>window.open("addcourse.php","_self")</script>';
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
				<form action="addcourse.php" method="POST">
					<table colspan="2" class="table table-bordered">
						<tr>
							<td width="100">COURSE NAME:</td>
							<td><input type="text" name="coursename" placeholder="Enter course name..."></td>
						</tr>
						<tr>
							<td>COURSE CODE:</td>
							<td><input type="text" name="coursecode" placeholder="Enter course code..."></td>
						</tr>
						<tr>
							<td>COURSE UNIT:</td>
							<td><input type="text" name="courseunit" placeholder="Enter the unit..."></td>
						</tr>
						<tr>
							<td>SELECT CLASS:</td>
							
							<td><select name="class" style="width:152px;">
								<option value="">--Select</option>
								<?php
								include_once('connections/connect.php');
								$query = mysql_query("select * from addclass");
								while($rows = mysql_fetch_array($query)){
									$classid = $rows['classid'];
									$classname = $rows['classname'];
									$courses = $rows['Courses'];
								
							?>
								<option value="<?php echo $classid;?>"><?php echo $classname.' '.$courses;?></option>
								
							<?php } ?>	
							</select></td>
						</tr>
						
						<tr>
							<td>SELECT SEMESTER:</td>
							
							<td><select name="semester" style="width:152px;">
								<option value="">--Select</option>
								<?php
								include_once('connections/connect.php');
								$query = mysql_query("select * from semester");
								while($rows = mysql_fetch_array($query)){
									$semesterid = $rows['semester_id'];
									$semestername = $rows['semester_name'];
									//$stream = $rows['stream'];
								
							?>
								<option value="<?php echo $semesterid;?>"><?php echo $semestername;?></option>
								
							<?php } ?>	
							</select></td>
						</tr>
						
						<tr>
							<td></td>
							<td><input type="submit" name="add" value="add"> &nbsp; &nbsp; &nbsp; &nbsp; <input type="reset" name="clear" value="clear"></td>
							
						</tr>
					</table>
				</form>
			</div>
			<?php include_once('incs/footer.php')?>
		</div>
	</body>
	</html>