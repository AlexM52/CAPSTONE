<?php
	include_once 'function.php';
	connect();
?>

		
			<table style="width: 100%">
								<tr>
								<td style="text-align: center"><b>Semester I</b></td>
								<td style="text-align: center"><b>Semester II</b></td>
								</tr>
								<tr>
								<td>
								<?php while($record2 = mysql_fetch_array($myData2)){?><input type="checkbox" name="semester1" onClick="checkboxes1();" value= "<?php
									echo '<option value="'.$record2['c_code'].'"><a href="#" data-toggle="modal" data-target="#t_and_c_m">'.$record2['c_code'].' '.$record2['c_name'].'</a></option>';?></br></a>
									<?php
								}
								?>
								</td>
								<td>
								<?php while($record3 = mysql_fetch_array($myData3)){
									?><input type="checkbox" name="semester2" onClick="checkboxes1();" value= "<?php  
									echo '<option value="'.$record3['c_code'].'"><a href="#" data-toggle="modal" data-target="#t_and_c_m">'.$record3['c_code'].' '.$record3['c_name'].'</a></option>'; 
									$course = $record3['creditnum'];
									$code = $record3['c_code'];
									?></br></a>
									<!-- Modal -->
									<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
									<div class="modal-content">
									<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title" id="myModalLabel">Pre-requisites</h4>
									</div>
									<div class="modal-body">
										<?php
										$myData5 = mysql_query("SELECT distinct prereq_code FROM prereq WHERE c_code='$code'");
										while($record5 = mysql_fetch_array($myData5))
										{
											echo '<option value="'.$record5['prereq_code'].'">'.$record5['prereq_code'].'</option>';
								
										}
										?>
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
								</div>
								</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
								</div>
									<?php
								}
								?>
		</table>


    <script>
function checkboxes1()
      {
       var inputElems = document.getElementsByTagName("input"),
        count = 0;
		count2 = 0;
          
        for (var i=0; i<inputElems.length; i++) { 
			var course = <?php echo $course; ?>;
			if (inputElems[i].name == "semester1" && inputElems[i].type == "checkbox" && inputElems[i].checked == true) 
			{
				count = count + course;
			}
			else
			{
				if (inputElems[i].name == "semester2" && inputElems[i].type == "checkbox" && inputElems[i].checked == true) 
				{
					count2 = count2 + course;
				}
			}
		}
		document.getElementById("count").innerHTML = count;
		document.getElementById("count2").innerHTML = count2;
	}
</script>