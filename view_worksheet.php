<?php
  include_once 'function.php';
  connect();
  session_start();
   if (!isset($_SESSION["stid"]))
{
    ?><script> alert("I'm sorry, you did not login");</script><?php
	echo "<meta http-equiv=\"refresh\" content=\"0; url=http://146.148.57.189/Capstone/\">";
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Before You Start</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Header -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include 'navbar.php';?>
  </nav>
<!-- /Header -->
<h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
  <div class="col-sm-3" style="position: fixed">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="cxc.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
		<li><a href="interests.php"><i class="glyphicon glyphicon-flash"></i> State Your Interests</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="worksheet2.php"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="worksheet3.php"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="worksheet4.php"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
		<li><a href="view_worksheet.php"><i class="glyphicon glyphicon-flash"></i> My Courses</a></li>
      </ul>
      
      <hr>
      
    </div><!-- /span-3 -->
    <div class="col-sm-9" id="print" style="float: right;  margin-right: -50px">
	<div style="float: right"><a align="right" class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a></div> 
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-education"></i> Your Selected Courses.</h3>  
            
       <hr>
     
       <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
      <p>Ensure that the courses you have registered for equates to the correct amount of credits for each semester.</p>
          </div>
        </div>
        <div class="panel-heading">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year I</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
					</tr></br>
						<tr style="vertical-align: top">
							<td><?php year1_semester1_courses() ?> </td>
							<td><?php year1_semester2_courses() ?> </td>
						</tr>
					</table>
              </div></br>
			  <div class="control-group" style="color: blue"><b>Your Total Credit(s) for year I:</b> <?php echo $_SESSION['level1'] ?></div>
                   
			  
		<div class="panel-body">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year II</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
					</tr></br>
						<tr style="vertical-align: top">
							<td><?php year2_semester1_courses() ?> </td>
							<td><?php year2_semester2_courses() ?> </td>
						</tr>
					</table>
              </div></br>
			  <div class="control-group" style="color: blue"><b>Your Total Credit(s) for year II:</b> <?php echo $_SESSION['level2'] ?></div>
			
			<div class="panel-body">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year III</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
					</tr></br>
						<tr style="vertical-align: top">
							<td><?php year3_semester1_courses() ?> </td>
							<td><?php year3_semester2_courses() ?> </td>
						</tr>
					</table>
              </div></br>
			  <div class="control-group" style="color: blue"><b>Your Total Credit(s) for year III:</b> <?php echo $_SESSION['level3'] ?></div>
			
			<div class="panel-body">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year IV+</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
					</tr></br>
						<tr style="vertical-align: top">
							<td><?php year4_semester1_courses() ?> </td>
							<td><?php year4_semester2_courses() ?> </td>
						</tr>
					</table>
              </div></br>
			 <div class="control-group" style="color: blue"><b>Your Total Credit(s) for year IV+:</b> <p id="count2">0</p></div>
			
			<div class="control-group" align="right">
				<?php echo "<a href=\"javascript:history.go(-1)\"><input type='button' class='btn btn-primary' value='Edit Worksheet'/></a>"?>
				<input type="button" class="btn btn-primary" value="Finish" onclick="window.location.href='dashboard.php'" />
				<input type="button" class="btn btn-primary" onclick="printDiv('print')" value="Print My Courses" />
			</div>
			<script>
				function printDiv(divName) {
				var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
  
   </div>
  </div>
  </div>
  </div>
  
			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
  </div>
  </div>
  </div>
   <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  </body>
 
    <script src="js/bootstrap.min.js"></script>
</html>
<?php
}
?>