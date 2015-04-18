<?php
	include_once 'function.php';
	connect();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Worksheet</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
  </head>
		
			<table style="width: 100%">
								<tr>
								<td style="text-align: center"><b>Semester I </b></td>
								<td style="text-align: center"><b>Semester II</b></td>
								</tr>
								<tr>
								<td>
								<?php 
								$code=array();
								while($record2 = mysql_fetch_array($myData2)){
									echo '<input type="checkbox" id="semester1" value="'.$record2['c_code'].'" onClick="checkboxes1();" name="boxes[]"> <span class="'.$record2['c_code'].'" onmouseover="enterShow(this)">'.$record2['c_code'].'</span><div id="'.$record2['c_code'].'" style ="display:none;">'.$record2['c_name'].'</div></br>';
									$code[] = $record2['c_code'];
									$coursename = $record2['c_name'];
								}
								?>
								</td>
								<td>
								<?php 
								while($record3 = mysql_fetch_array($myData3)){
									echo '<input type="checkbox" id="semester2" onClick="checkboxes1();" value="'.$record3['c_code'].'" name="boxes[]"> <span id="getName" onmouseover="javascript:function_to_make_query(this.id)">'.$record3['c_code'].'</span></br>'; 
									$course = $record3['creditnum'];
									$code[] = $record3['c_code'];
									$coursename = $record3['c_name'];
								}
								?>
								<!-- Modal -->
									<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
									<div class="modal-content">
									<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title" id="myModalLabel" align="center"><strong>Pre-requisites</strong></h4>
									</div>
									<div class="modal-body">
										<?php foreach($code as $boxValue){?>
												<div class="panel panel-default">
												<div class="panel-heading">
												<div class="panel-title">
													<strong><?php print_r($boxValue);?></strong>
													</div>
													</div>
													</div>
									
										<div class="panel-body">										
											<?php $myData7 = mysql_query("SELECT distinct * FROM prereq WHERE c_code='$boxValue'");
												while($record7 = mysql_fetch_array($myData7)){
														echo '<p style="display: inline-block" value="'.$record7['prereq_code'].'"> '.$record7['prereq_code'].'</p>, ';
												}?>
												</div>
												<?php
											}
										
										?>
									</div>
									<div class="modal-footer">
									<?php
									$id = $_SESSION["stid"];
									$myData6 = mysql_query("SELECT status FROM student WHERE stid='$id'");
									while($record6 = mysql_fetch_array($myData6)){
										$status = $record6['status'];
									}
									echo '<input type="hidden" name="status" id= status value="'.$status.'" />' ?>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
								</div>
								</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
								</div>
								
								<div style="float: right"><b><a href="#" data-toggle="modal" data-target="#t_and_c_m"> Get Pre-requisites</a></b></div>

		</table>

    <script>
		/*function_to_make_query(idreq)
		{
			<?php echo "hi"; ?>
		}*/
		function enterShow(x){
	        var code = x.class;
	        alert(code);
	        document.getElementById(code).style.display = "block";
		};

		function exitHide(x){
		    var checkbox = document.getElementById('semester1').value;
	        var showing = document.getElementById(checkbox);
			showing.style.display = "none";
		};

function checkboxes1()
      {
       var inputElems = document.getElementsByTagName("input"),
        count = 0;
		count2 = 0;
          
        for (var i=0; i<inputElems.length; i++) { 
			var course = <?php echo $course; ?>;
			if (inputElems[i].id == "semester1" && inputElems[i].type == "checkbox" && inputElems[i].checked == true) 
			{
				count = count + course;
				if(count > 18){
					alert("Credits exceeded for semester one.");
					inputElems[i].checked = false;
					count = count - course;
				}
				
			}
			else
			{
				if (inputElems[i].id == "semester2" && inputElems[i].type == "checkbox" && inputElems[i].checked == true) 
				{
					count2 = count2 + course;
					if(count2 > 22){
						alert("Credits exceeded for semester two.");
						inputElems[i].checked = false;
						count2 = count2 - course;
					}
				}
			}
		}
		document.getElementById("count").innerHTML = count;
		document.getElementById("count2").innerHTML = count2;
	} 
</script>