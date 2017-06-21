<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<script type="text/javascript">
			function populate(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "0";
			if(s1.value == "Frst Semester 500L"){
			var optionArray = ["|","First Semester|First Semester","Second Semester|Second Semester"];
			}else if(s1.value == "300L"){
			var optionArray = ["|","First Semester|First Semester","Second Semester|Second Semester"];
			}else if(s1.value == "200L"){
			var optionArray = ["|","First Semester|First Semester","Second Semester|Second Semester"];
			}else if(s1.value == "100L"){
			var optionArray = ["|","First Semester|First Semester","Second Semester|Second Semester"];
			} 
			
			
			for(var option in optionArray){
			var pair = optionArray[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			s2.options.add(newOption);
			}
			}
		
	</script>
	
</head>	
	<body>
		<div id='container'>
			<?php include_once('incs/header.php')?>
			<?php include_once('incs/nav.php')?>
			
			<div id='operations'>

				<?php include_once('incs/menu.php');?>
				
			</div>
			<div id='activities'>
				<br/>
				<br/>
				<br/>
				<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
					<tr>
						<td colspan="5" align='center'><p>Available Class with lowest Number of Students</p></td>
					</tr>
					<tr>
						<tr>
						<td>Class</td>
						<td>Course</td>
						<td>No of Students</td>
						<td>Status</td>
						
					</tr>
					<?php
						$report ="";
						include_once('connections/connect.php');
						$query =mysql_query("SELECT * FROM addclass WHERE numberofstudent =  ( SELECT MIN(numberofstudent) FROM addclass )") or die('error occure in your query');
						$returns = mysql_num_rows($query);
						if($returns > 0){
							while($rows = mysql_fetch_object($query)){
							$class_id = $rows->classid;
							$class_name = $rows->classname;
							$courses = $rows->Courses;
							$nos = $rows->numberofstudent;
							$status = $rows->status;
							
							if($status == '0'){
								$st ="<font color='red'>Unavailable</font>";
								
							}else{
								$st="<font color='green'>Available</font>";
							}
							
							//$qr ="select count()"
							}
						
							
						}else{
							
							$report ="<font color='red'>No Class Exist in the Cache</font>";
						}
					
					?>
					
					<tr>
						<td><?php echo $class_name;?></td>
						<td><?php echo $courses;?></td>
						<td><?php echo $nos;?></td>
						<td><?php echo $st;?></td>

						</tr>
					<?php
							
					?>
					
				</table>
				<center><p> <?php if(isset($report)){echo $report;}?></p></center>
			<br />
			<br />
			
			
			<table class='table table-bordered' cellspacing="10" cellpadding="10" border="1">
					<tr>
						<td colspan="4" align='center'><p><b>Allocate Time Table</b></p></td>
					</tr>
					<tr>
						<td><b>Class Name</b></td>
						<td><b>Semester</b></td>
						<td><b>Course Code</b></td>
						<td><b>Course Title</b></td>
						
					</tr>
				</table>
		
			<br />
				<?php

$class = $semester = $course =  $course_tite = null; //declare vars

$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('examtimetable',$conn);

if(isset($_GET["class"]) && is_numeric($_GET["class"]))
{
    $class = $_GET["class"];
}

if(isset($_GET["semester"]) && is_numeric($_GET["semester"]))
{
    $semester = $_GET["semester"];
}

if(isset($_GET["course"]) && is_numeric($_GET["course"]))
{
    $course = $_GET["course"];
}

if(isset($_GET["course_title"]) && is_numeric($_GET["course_title"]))
{
    $course = $_GET["course_title"];
}

?>

<script language="JavaScript">

function autoSubmit()
{
    var formObject = document.forms['theForm'];
    formObject.submit();
}

</script>

<form action="" name="theForm" method="get">
<table class="table table-bordered" style="font-size:10px;">
	<tr>
		<td>
	<select name="class" onChange="autoSubmit();" style="width:150px;">
			<option>-- Select --</option>
			<?php
			/*include_once('connections/connect.php');
			$query = mysql_query("select * from addclass");
			while($rows = mysql_fetch_array($query)){
				//$classid = $rows['classid'];
				//$classname = $rows['classname'];
				//$stream = $rows['stream'];
			
			 echo "<option value=\"".$rows["classid"]."\"";
			if(@$_GET['class'] == $rows['classid'])
			echo 'selected';
				echo ">".$rows["classname"].""." ".$rows['Courses']."</option>";
			}*/
		?>
			<option <?php if(@$_GET['class']== $class_id){echo "selected='selected'"; }?> value="<?php echo $class_id;?>"><?php echo $class_name.' '.$courses;?></option>														
	</select>

		</td>
	
	

    <!-- COUNTRY SELECTION BASED ON REGION VALUE -->

    <?php

    if($class != null && is_numeric($class))
    {


				
    ?>

	<td>
	
    <select name="semester" onChange="autoSubmit();" style="width:150px;">
        <option VALUE="null">--Select--</option>

        <?php

        //POPULATE DROP DOWN MENU WITH COUNTRIES FROM A GIVEN REGION

        $sql = "SELECT semester_id, semester_name FROM semester";
        $semester = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($semester))
        {
           // echo ("<option VALUE=\"$row[semester_name]\" " . ($semester == $row["semester_name"] ? " selected" : "") . ">$row[semester_name]</option>");
        
			 echo "<option value=\"".$row["semester_id"]."\"";
								if(@$_GET['semester'] == $row['semester_id']){echo 'selected';}
								
									echo ">".$row["semester_name"]."</option>";
							
		}

        ?>

    </select>

    <?php

    }

    ?>

	</td>
  

    <?php

    if($semester != null   && $class != null)
    {
	
	
				

    ?>

	<td>
  <select name="course" onChange="autoSubmit();" style="width:150px;">
        <option VALUE="null">--Select--</option>

        <?php

        //POPULATE DROP DOWN MENU WITH STATES FROM A GIVEN REGION, COUNTRY
		$classSelect = $_GET['class'];
		$semesterSelect = $_GET['semester'];

        $sql = "select * from addcourse where class_id = $classSelect and semester_id = $semesterSelect";
        $course = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($course))
        {
            //echo ("<option VALUE=\"$row[coursecode]\" " . ($course == $row["coursecode"] ? " selected" : "") . ">$row[coursecode]</option>");
        
			 echo "<option value=\"".$row["coursecode"]."\"";
								if($_GET['course'] == $row['coursecode']){echo 'selected';}
								
									echo ">".$row["coursecode"]."</option>";
		}

        ?>    

    </select>

    <?php

    }

    ?>

		</td>
	

    <?php

    if($course != null  && $semester != null && $class != null)
    {
		
    ?>

	<td>
    <select name="course_title" onChange="autoSubmit();" style="width:150px;">
        <option VALUE="null"></option>

        <?php

        //POPULATE DROP DOWN MENU WITH CITIES FROM A GIVEN REGION, COUNTRY, STATE
		$classSelect = $_GET['class'];
		$semesterSelect = $_GET['semester'];
		$coursecodeSelect = $_GET['course'];

        $sql = "select * from addcourse where class_id = '$classSelect' and semester_id = $semesterSelect and coursecode = '$coursecodeSelect'";
        $courseTitle = mysql_query($sql,$conn);

        while($row = mysql_fetch_array($courseTitle))
        {
            //echo ("<option VALUE=\"$row[CIT_ID]\" " . ($city == $row["CIT_ID"] ? " selected" : "") . ">$row[CITY_NAME]</option>");
        
			 echo "<option value=\"".$row["coursename"]."\"";
								if($_GET['course_title'] == $row['coursename']){echo 'selected';}
								
									echo ">".$row["coursename"]."</option>";
		}

        ?>    

    </select>

    <?php

    }

    ?>
		</td>
	</tr>
	</table>
	<br/>
	<br/>
	
	<table class='table table-bordered' cellspacing="10" cellpadding="10" style="font-size:10px;">
					
					<tr>
						<td style="width:150px;"><b>Date</b></td>
						<td align="center" style="width:120px;"><b>Start Time</b></td>
						<td align="center" style="width:120px;"><b>End Time</b></td>
						<td style="width:152px;"><b>Venue</b></td>
						<td style="width:50px;"><b>No. of Invigilators</b></td>
						
					</tr>
	</table>

				<table class='table table-bordered' cellspacing="10" cellpadding="10" style="font-size:10px;">
					
					<tr>
						<td style="width:50px;">
							<input type='text' name='date' id="date" oninput="autoSubmit()" value="<?php if(isset($_GET['date'])){echo htmlentities($_GET['date']);}?>" placeholder='Show calendar'>
						</td>
						<td>
							<select name='startTime' style="width:120px;" onChange="autoSubmit();">
								<option value="">--Start Time--</option>
								<!--<option value="10:00am">10:00am</option>
								<option value="2:00pm">2:00pm</option>-->
								 <option name="startTime"  <?php if (@$_GET['startTime']=="10:00am") {echo "selected='selected'"; } ?>   value="10:00am">10:00am</option>
                                 <option name="startTime"  <?php if (@$_GET['startTime']=="2:00pm") {echo "selected='selected'"; } ?> value="2:00pm">2:00pm</option>
							</select>
							<!--<input type='text' name='startTime' placeholder='Start Time...'>-->
						</td>
						<td>
							<select name='endTime' style="width:120px;" onChange="autoSubmit();">
								<option value="">--End Time--</option>
								<!--<option value="1:00pm">1:00pm</option>
								<option value="5:00pm">5:00pm</option>-->
								<option name="endTime"  <?php if (@$_GET['endTime']=="1:00pm") {echo "selected='selected'"; } ?> value="1:00pm">1:00pm</option>
                                 <option name="endTime"  <?php if (@$_GET['endTime']=="5:00pm") {echo "selected='selected'"; } ?> value="5:00pm">5:00pm</option>
							</select>
						<!--<input type='text' name='endTime' placeholder='End Time...'>-->
						</td>
						
						
						<td><select name="venue" style="width:152px;" onChange="autoSubmit();">
								<option value="">--Select</option>
								<?php
								include_once('connections/connect.php');
								$query = mysql_query("select * from addvenues");
								while($rows = mysql_fetch_array($query)){
									$venueid = $rows['venueid'];
									$venuename = $rows['venuename'];
									$venuecapacity = $rows['venuecapacity'];
									
									 echo "<option value=\"".@$rows["venuename"]." ".@$rows["venuecapacity"]."\"";
										if(@$_GET['venue'] == @$rows['venuename']." ".@$rows["venuecapacity"]){echo 'selected';}
									echo ">".@$rows["venuename"]."  ".$venuecapacity." (Seaters)</option>";
									
								}
								
							?>
								<!--<option value="<?php //echo $venuename;?>"><?php //echo $venuename.', '.$venuecapacity.' (Seaters)';?></option>-->
								</select>
							</td>
							<td><input type="text" name="invigilators" style="width:50px;"></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Allocate" name="btnAllocate"></td>
					</tr>
				</table>
				
				
				<br/>
				<br/>
		</form>
		<?php
		//for allocating the timetable button
			if(isset($_GET['btnAllocate'])){
				$ClassName = strip_tags($_GET['class']);
				$SemesTer = strip_tags($_GET['semester']);
				$CourseCode = strip_tags($_GET['course']);
				$CourseTitle = strip_tags($_GET['course_title']);
				$DaTe = strip_tags($_GET['date']);
				$stTime = strip_tags($_GET['startTime']);
				$edTime = strip_tags($_GET['endTime']);
				$VeNue = strip_tags($_GET['venue']);
				$invigilators= strip_tags($_GET['invigilators']);
				
				if($ClassName && $SemesTer && $CourseCode && $CourseTitle && $DaTe && $stTime && $edTime){
					
					include_once('connections/connect.php');
					$sqchecker = mysql_query("select * from timetable where class ='".$ClassName."' && coursecode ='".$CourseCode."' && coursetittle='".$CourseTitle."'");
					$reporter = mysql_num_rows($sqchecker);
					if($reporter > 0){
							echo"<script>alert('This Course is already allocated')</script>";
							echo"<script>window.open('set_schedules.php','_self')</script>";
					}else{	
					if(filter_var($_GET['venue'], FILTER_SANITIZE_NUMBER_INT) < intval($nos)){
							echo "<script>alert('Insuficient Space for this Venue. Please select another venue')</script>";
						}else{
							mysql_query("update addvenues set venuecapacity = venuecapacity - ".$nos." WHERE venuename ='".preg_replace("/[^a-zA-Z]/", "", $_GET['venue'])."'");
							$qallocate = mysql_query("INSERT INTO timetable VALUES('','$ClassName','$SemesTer','$CourseCode','$CourseTitle','$DaTe','$stTime','$edTime','".preg_replace("/[^a-zA-Z]/", "", $VeNue)."','$invigilators')");
							if($qallocate){
								$last_id =$_GET['class'];
								mysql_query("DELETE FROM addclass WHERE classid = $last_id");
								//reduce hall capacity
								//$venuecapacity, $nos and $_post['vanue']
								//update addvenues set venuecapacity = venuecapacity - 20 WHERE venuename ='Auditorium'
								
								echo"<script>alert('Record Allocated Successfully')</script>";
								echo"<script>window.open('set_schedules.php','_self')</script>";
								
							}
					}	
				}
				}else{
					echo"<script>alert('Please enter required Schedules')</script>";
				}
				
			}
		?>
				<table class="table table-bordered" cellspacing="10" cellpadding="10" width="100%" style="font-size:10px;">
					<tr>
						<td colspan="9" align='center'><p><b>TIME TABLE PREVIEW</b></p></td>
					</tr>
					<tr>
						
						
						<td><b>SEMESTER</b></td>
						<td><b>COURSE CODE</b></td>
						<td><b>COURSE TITLE</b></td>
						<td><b>START TIME</b></td>
						<td><b>END TIME</b></td>
						<!--<td><b>DURATION</b></td>-->
						<td><b>VENUE</b></td>
						<td><b>ACTION</b></td>
					</tr>
					<?php
						include_once('connections/connect.php');
						$geT_record = mysql_query("select * from timetable order by table_id desc limit 0,5");
						while($founds = mysql_fetch_array($geT_record)){
							$f_tblid = $founds['table_id'];
							$f_class = $founds['class'];
							$f_semester = $founds['semester'];
							$f_coursecode = $founds['coursecode'];
							$f_coursetitle = $founds['coursetittle'];
							//$f_date = $founds['date'];
							$f_venue = $founds['venue'];
							$f_starttime = $founds['start_time'];
							$f_endtime = $founds['end_time'];
							
							switch($f_class){
									case 5:
									$newf_class ="500L";
									break;
									
									case 3:
									$newf_class ="300L";
									break;
									
									case 2:
									$newf_class ="200L";
									break;
									
									case 1:
									$newf_class ="100L";
									break;				
									default:
									echo '';
								
								
							}
							
							switch($f_semester){
								case 1:
									$newf_semester ="First Semester";
									break;
									
								case 2:
									$newf_semester ="Second Semester";
									break;
									
									default:
									echo 'Wrong Semester';
								
							}
						
					?>
					<tr>
							
						<td><?php echo $newf_semester?></td>
						<td><?php echo $f_coursecode?></td>
						<td><?php echo $f_coursetitle?></td>
						<td><?php echo $f_starttime?></td>
						<td><?php echo $f_endtime?></td>
						<!--<td><?php //echo $f_endtime - $f_starttime.' hr(s)';?></td>-->
						<td><?php echo $f_venue?></td>
						<td><a href="delete_schedule.php?delid=<?php echo urlencode($f_tblid);?>" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
					</tr>
					
					<?php }?>
				</table>
				
					<a href="generated_timetable.php" target="_blank"><button>Generate Time Table</button></a>
					<br/>
					<br/>
				</div>
				
			<?php include_once('incs/footer.php')?>
		</div>
	
	<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery-ui.js"></script>
	</body>
	
	<script type="text/javascript">
	$.datepicker.setDefaults({
		changeMonth : true,
		changeYear  : true,
		dateFormat  :'yy/mm/dd'
		
	});
	
	$(function(){
		$('#date').datepicker();
		$('body').delegate('#date',click,function(e)
		{
			$(this).datepicker();
		
		});
	});

</script>
<script type="text/javascript">
    function getval(sel) {
       alert(sel.value);
       window.location.href = 'set_schedules.php?venue='+sel.value;
       // give your same page url if you want same page redirect
       // or try window.location.href = '?year='+sel.value;
    }
</script>
	</html>