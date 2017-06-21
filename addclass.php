
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
				<form action="addclass.php" method="POST" enctype="multipart/form-data">
					<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
						<tr>
							<td width="100"><input type='file' name='upload1'></td>
							<td><button class="btn btn-default" type="submit" name="btnUpload">Upload</button></td>
						</tr>
						
					</table>
					<?php include_once('incs/csv_upload.php');?>
					<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
					<tr>
						<td colspan="5" align='center'><p>Available Classes</p></td>
					</tr>
					<tr>
						<td>Class ID</td>
						<td>Level</td>
						<td>Course</td>
						<td>No of Students</td>
						<td>Status</td>
						<td></td>
					</tr>
					<tr>
											<?php
												$report ="";
												include('connections/connect.php');
												$query = mysql_query("SELECT * FROM addclass");
												$result = mysql_num_rows($query);
												if($result > 0){
													while($row = mysql_fetch_array($query)){
													$classID = $row['classid'];
													$className = $row['classname'];
													$courses = $row['Courses'];
													$nos = $row['numberofstudent'];
													$semester = $row['semester_id'];
													$status = $row['status'];
													
											
												
												
											?>
											<td><?php echo $classID;?></td>
											<td><?php echo $className;?></td>
											<td><?php echo $courses;?></td>
											<td><?php echo $nos;?></td>
											<td><?php echo $status;?></td>
											
										</tr>
										<?php }
										
										}else{
													
													$report="<font color='red'>No Class Exits in the Cache</font>";
												}?>
					</table>
				</form>
				
					<center><p> <?php if(isset($report)){echo $report;}?></p></center>
			</div>
			<?php include_once('incs/footer.php')?>
		</div>
	</body>
	</html>