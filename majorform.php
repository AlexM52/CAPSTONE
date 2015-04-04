<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Select your Major(s)/Minor(s)</h4>
          </div>
        </div>
        <div class="panel-body">
      
		<form class="form form-vertical" method="post" onsubmit="return FormValidation()" action="degree_added.php">
			<div class="control-group" id="specialgroup">
				<label>Programs/Special:</label>
				<div class="controls">
					<select class="form-control" name="special" id="special" onchange="return specialSelectHandler()" required autofocus>
						<option >--Select Special--</option>
						<?php query_special()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="major1group">
				<label>1st Major:</label>
				<div class="controls">
					<select class="form-control" name="major1" id="major1" onchange="return major1SelectHandler()" required autofocus>
						<option selected>--Select Major--</option>
						<?php query_majors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="major2group" style="display: none;">
				<label>2nd Major:</label>
				<div class="controls">
					<select class="form-control" name="major2" id="major2" onchange="major2SelectHandler()">
						<option selected>--Select Major--</option>
						<?php query_majors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="minor1group" style="display: none;">
				<label>1st Minor:</label>
				<div class="controls">
					<select class="form-control" name="minor1" id="minor1" onchange="minor1SelectHandler()">
						<option selected>--Select Minor--</option>
						<?php query_minors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="minor2group" style="display: none;">
				<label>2nd Minor:</label>
				<div class="controls">
					<select class="form-control" name="minor2" id="minor2">
					<option selected>--Select Minor--</option>
						<?php query_minors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group">
				<label>Level:</label>
				<div class="controls">
					<select class="form-control" name="level">
					<option selected>--Select Year--</option>
					<option>1st Year</option>
					<option>2nd Year</option>
					<option>3rd Year</option>
					<option>4th Year +</option>
					</select></br>
				</div>
			</div>
			
			<div class="control-group">
				<label>Status:</label>
				<div class="controls">
					<select class="form-control" name="status">
					<option selected>--Select Status--</option>
					<option>Full Time</option>
					<option>Part Time</option>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" style="float: right">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">Plan My Degree</button>
              </div>
            </div>


		</form>