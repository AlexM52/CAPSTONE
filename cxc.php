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
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="cxc.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
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
    <div class="col-sm-9" style="float: right;  margin-right: -50px">
	<div style="float: right"><a align="right" class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a></div> 
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-education"></i> Welcome to all our 1st year students!</h3>  
            
       <hr>
     
       <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
      <p>In our to better assist you, we ask that you take the time to complete the form below by selecting the subjects that you have acquired 
      at the respective level(s).</p>
          </div>
        </div>
        <div class="panel-body">
          <form class="form form-vertical" method="post" action="cxcpost.php">
            <div class="control-group">
              <label class="form-control" style="text-align: center">CSEC Subjects</label>
              <div class="controls">
        <table style="width: 100%">
        <tr style="vertical-align: top">
        <td>
        <?php query_cxc1()?>
        </td>
        <td>
        <?php query_cxc2()?>
        </td>
        </tr>
        </table>
              </div>
            </div> 
      
            <div class="control-group">
              <label class="form-control" style="text-align: center">CAPE Subjects</label>
              <div class="controls">
        <table style="width: 100%" >
        <tr style="vertical-align: top">
        <td>
        <?php query_cape1()?>
        </td>
        <td>
        <?php query_cape2()?>
        </td>
        </tr>
        </table>
              </div>
            </div>   
         
            <div class="control-group" style="float: right">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>   
            
          </form>
    
         
            <!--center-right-->
          
       </div><!--/row-->
    </div><!--/col-span-9-->
     <div class="row">
           
          
     
      </div><!--/row-->
    </div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  
   
              
    
      
      
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->

<!-- /Main -->








  <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>