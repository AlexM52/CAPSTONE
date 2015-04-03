<table style="width: 100%">
	<tr>
	<td style="text-align: center"><b>Semester I</b></td>
	<td style="text-align: center"><b>Semester II</b></td>
	</tr>
	<tr>
	<td>
	<?php while($record2 = mysql_fetch_array($myData2)){?><input type="checkbox" value= "<?php
		echo '<option value="'.$record2['c_name'].'">'.$record2['c_code'].' '.$record2['c_name'].'</option>';?></br>
		<?php
	}
	?></td>
	<td>
	<?php while($record3 = mysql_fetch_array($myData3)){ ?><input type="checkbox" value= "<?php
		echo '<option value="'.$record3['c_name'].'">'.$record3['c_code'].' '.$record3['c_name'].'</option>'; ?>
		</br>
		<?php
	}
	?></td>
	<tr style="vertical-align: top">
	<td>
		<p style="color: blue">Total Credits Semester I: </p>
	</td>

	<td>
		<p style="color: blue">Total Credits Semester II: </p>
	</td>
</table>