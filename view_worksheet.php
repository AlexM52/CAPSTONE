<?php
  include_once 'function.php';
  connect();
  session_start();
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
        <li><a href="highschool.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
        <li><a href="interests.php"><i class="glyphicon glyphicon-flash"></i> State Your Interests</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="worksheet2.php"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="worksheet3.php"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="worksheet4.php"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
      </ul>
      
      <hr>
      
    </div><!-- /span-3 -->
    <div class="col-sm-9" style="float: right;  margin-right: -50px">
        
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
						<tr style="vertical-align: top">
							<td><?php year1_semester1_courses() ?> </td>
							<td><?php year1_semester2_courses() ?> </td>
						</tr>
					</table>
              </div>
			  <div class="control-group">
              <label></label>
              <div class="controls">
            <table width=100%>
              <tr style="vertical-align: top">
                <td style="color: blue">Maximum Credits for Semester I: 18</td>
				<td style="color: blue">Maximum Credits for Semester II: 27</td>
                </tr>
                <tr style="vertical-align: top">
                <td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
				<td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
                   </tr>
            </table>
			  
		<div class="panel-body">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year II</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
						<tr style="vertical-align: top">
							<td><?php year2_semester1_courses() ?> </td>
							<td><?php year2_semester2_courses() ?> </td>
						</tr>
					</table>
              </div>
			  <div class="control-group">
              <label></label>
              <div class="controls">
            <table width=100%>
              <tr style="vertical-align: top">
                <td style="color: blue">Maximum Credits for Semester I: 18</td>
				<td style="color: blue">Maximum Credits for Semester II: 27</td>
                </tr>
                <tr style="vertical-align: top">
                <td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
				<td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
                   </tr>
            </table>
			
			<div class="panel-body">
          <div class="control-group">
              <label class="form-control" style="text-align: center"><h4>Year III</h4></label>
              <div class="controls">
					<table style="width: 100%">
					<tr align="center">
						<td><strong>Semester I</strong></td>
						<td><strong>Semester II</strong></td>
						<tr style="vertical-align: top">
							<td><?php year3_semester1_courses() ?> </td>
							<td><?php year3_semester2_courses() ?> </td>
						</tr>
					</table>
              </div>
			  <div class="control-group">
              <label></label>
              <div class="controls">
            <table width=100%>
              <tr style="vertical-align: top">
                <td style="color: blue">Maximum Credits for Semester I: 18</td>
				<td style="color: blue">Maximum Credits for Semester II: 27</td>
                </tr>
                <tr style="vertical-align: top">
                <td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
				<td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
                   </tr>
            </table>
			
			<div class="control-group" align="right">
					<input type="button" class="btn btn-primary" value="Edit Worksheet" onclick="window.location.href='worksheet.php'" />
				<input type="button" class="btn btn-primary" value="Finish" onclick="window.location.href='dashboard.php'" />
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
  </div>
   <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  </body>
 
    <script src="js/bootstrap.min.js"></script>
</html>