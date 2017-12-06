<!doctype html>
<html>
	<head>
		<title>This is  a test script</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	</head>

	<body>
	<?php

$class = $semester = $course =  $course_tite = null; //declare vars

$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('timetable',$conn);

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

<form name="theForm" method="get">
<table class="table table-bordered">
	<tr>
		<td>
	<select name="class" onChange="autoSubmit();" style="width:150px;">
								<option>-- Select --</option>
								<?php
								include_once('connections/connect.php');
								$query = mysql_query("select * from addclass");
								while($rows = mysql_fetch_array($query)){
									//$classid = $rows['classid'];
									//$classname = $rows['classname'];
									//$stream = $rows['stream'];
								
								 echo "<option value=\"".$rows["classid"]."\"";
								if($_GET['class'] == $rows['classid'])
								echo 'selected';
									echo ">".$rows["classname"].""." ".$rows['stream']."</option>";
								}	
							?>
								
									
							
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
								if($_GET['semester'] == $row['semester_id']){echo 'selected';}
								
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
</form>

	</body>
</html>