<?php
	ob_start();
		include_once('dompdf/dompdf_config.inc.php');	
			
				
				include_once('connections/connect.php');
				$query ="SELECT * FROM timetable";
				$query_run = mysql_query($query);
				While($row = mysql_fetch_array($query_run)){
					$class = $row['class'];
					$semester = $row['semester'];
					//$coursecode = $row['coursecode'];
					//$coursetitle = $row['coursetittle'];
					$dates = $row['date'];
					//$starttime = $row['start_time'];
					//$endtime = $row['end_time'];
					//$venue = $row['venue'];
					
					
					
							
							switch($semester){
								case 1:
									$newf_semester ="First Semester";
									break;
									
								case 2:
									$newf_semester ="Second Semester";
									break;
									
									default:
									echo 'Wrong Semester';
								
							}
						
							
			}	
				
				
?>
		
<!Doctype html>
<html>
	<head>
		<title>School- Print Out</title>
		<style type="text/css">
			#container{
				width:750px;
				height:100%;
				margin:0px auto;
				border:1px solid black;
				text-indent:5px;
			}
			
			th#logo{
				background-image:url("print.jpg") no-repeat;
				background-size:contain;
			}
			
			table#table_view{
				border:1px solid silver;
				
			}
			
			table#table_view tr td{
				border:1px solid #000;
				
			}
			
			
		</style>
	</head>
	

	<body>
		<div id="container">
			<table align="center" width="100%">
				<tr>
					<td></td>
					<td align="center"><img src="images/atbulogo.jpg" height="90"></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" align="center">Abubakar Tafawa Balewa University, Bauchi<br> <?php  echo $newf_semester; ?> Examination Time Table 2015/2016 Academic Session</td>
					
				</tr>
				
			</table>
			<br/>
			<br/>
			<table align="center" id="table_view" width="100%" style="border-collapse:collapse;">
				<tr>
				
					<td><b>Date</b></td>
					<td><b>Level</b></td>
					<td><b>Course Code</b></td>
					<td><b>Course Title</b></td>
					<td><b>Start Time</b></td>
					<td><b>End Time</b></td>
					<td><b>Venue</b></td>
					<td><b> No. Invigilators</b></td>
				</tr>
				
				<?php 
					include_once('connections/connect.php');
					$query2 ="SELECT * FROM timetable";
					$query_fly = mysql_query($query2);
					While($rows = mysql_fetch_array($query_fly)){
						$class1 = $rows['class'];
						$semester1 = $rows['semester'];
						$coursecode1 = $rows['coursecode'];
						$coursetitle1 = $rows['coursetittle'];
						$dates1 = $rows['date'];
						$starttime1 = $rows['start_time'];
						$endtime1 = $rows['end_time'];
						$venue1 = $rows['venue'];
						$invg = $rows['invigilators'];
						
						switch($class1){
									
									case 29:
									$newf_class ="500L ST";
									break;
									
									case 28:
									$newf_class ="300L ST";
									break;
									
									case 27:
									$newf_class ="200L ST";
									break;
									
									case 26:
									$newf_class ="100L ST";
									break;
									
									case 25:
									$newf_class ="500L MTH";
									break;
									
									case 24:
									$newf_class ="300L MTH";
									break;
									
									case 23:
									$newf_class ="200L MTH";
									break;
									
									case 22:
									$newf_class ="100L MTH";
									break;
									
									case 21:
									$newf_class ="500L GEO";
									break;
									
									case 20:
									$newf_class ="300L GEO";
									break;
									
									case 19:
									$newf_class ="200L GEO";
									break;
									
									case 18:
									$newf_class ="100L GEO";
									break;
									
									case 17:
									$newf_class ="500L BIO";
									break;
									
									case 16:
									$newf_class ="300L BIO";
									break;
									
									case 15:
									$newf_class ="200L BIO";
									break;
									
									case 14:
									$newf_class ="100L BIO";
									break;
									
									case 13:
									$newf_class ="500L CS";
									break;
									
									case 12:
									$newf_class ="300L CS";
									break;
									
									case 11:
									$newf_class ="200L CS";
									break;
									
									case 10:
									$newf_class ="100L CS";
									break;
									
									case 9:
									$newf_class ="500L CHM";
									break;
									
									case 8:
									$newf_class ="300L CHM";
									break;
									
									case 7:
									$newf_class ="200L CHM";
									break;
									
									case 6:
									$newf_class ="100L CHM";
									break;
									
									case 5:
									$newf_class ="500L PHY";
									break;
									
									case 3:
									$newf_class ="300L PHY";
									break;
									
									case 2:
									$newf_class ="200L PHY";
									break;
									
									case 1:
									$newf_class ="100L PHY";
									break;
									
									default:
									echo '';
								
								
							}
							
							
						
					?>
					
					<tr>
						
						<td><?php  echo $dates1;?></td>
						<td><?php  echo $newf_class;?></td>
						<td><?php  echo $coursecode1; ?></td>
						<td><?php echo $coursetitle1; ?></td>
						<td><?php echo $starttime1; ?></td>
						<td><?php echo $endtime1; ?></td>
						<td><?php echo $venue1; ?></td>
						<td><?php echo $invg; ?></td>
					</tr>
					
					<?php }?>
			</table>
			
			

		<div>
						   
	</body>
	

</html>
<?php

			
			$html = ob_get_clean();
			$dompdf = new DOMPDF();
			$dompdf->set_paper("landscape");
			$dompdf->load_html($html);
			$dompdf->render();
			$dompdf->stream('complete_timetable.pdf');
			
			echo "end!";exit;
		
	?>