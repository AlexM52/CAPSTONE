<?php
  //include_once 'function.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard</title>
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
  <div class="col-sm-3">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="highschool.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
      </ul>
      
      <hr>
      
    </div><!-- /span-3 -->
    <div class="col-sm-9" >
        
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
          
          <form class="form form-vertical">
            <div class="control-group">
              <label class="form-control" style="text-align: center">CSEC Subjects</label>
              <div class="controls">
        <table style="width: 100%">
        <tr style="vertical-align: top">
        <td>
        <input type="checkbox">Additional Mathematics<br>
        <input type="checkbox">Agricultural Science (Double Award)<br>
        <input type="checkbox">Agricultural Science (Single Award)<br>
        <input type="checkbox">Biology<br>
        <input type="checkbox">Building Technology<br>
        <input type="checkbox">Caribbean History<br>
        <input type="checkbox">Chemistry<br>
        <input type="checkbox">Clothing & Textiles<br>
        <input type="checkbox">Economics<br>
        <input type="checkbox">Electronic Document Preparation & Management<br>
        <input type="checkbox">English A<br>
        <input type="checkbox">English B<br>
        <input type="checkbox">Food & Nutrition<br>
        <input type="checkbox">French<br>
        <input type="checkbox">Geography<br>
        <input type="checkbox">Home Economics Management<br>
        <input type="checkbox">Human & Social Biology<br>
        </td>
        <td>
        <input type="checkbox">Information Technology<br>
        <input type="checkbox">Integrated Science<br>
        <input type="checkbox">Mathematics<br>
        <input type="checkbox">Mechanical Engineering Technology<br>
        <input type="checkbox">Music<br>
        <input type="checkbox">Office Administration<br>
        <input type="checkbox">Physical Education & Sport<br>
        <input type="checkbox">Physics<br>
        <input type="checkbox">Principles of Accounts<br>
        <input type="checkbox">Principles of Business<br>
        <input type="checkbox">Religious Education<br>
        <input type="checkbox">Social Studies<br>
        <input type="checkbox">Spanish<br>
        <input type="checkbox">Technical Drawing<br>
        <input type="checkbox">Theatre Arts<br>
        <input type="checkbox">Visual Arts<br>
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
        <input type="checkbox">Accounting<br>
        <input type="checkbox">Agricultural Science<br>
        <input type="checkbox">Applied Mathematics<br>
        <input type="checkbox">Art and Design<br>
        <input type="checkbox">Biology<br>
        <input type="checkbox">Caribbean Studies<br>
        <input type="checkbox">Chemisty<br>
        <input type="checkbox">Communication Studies<br>
        <input type="checkbox">Computer Science<br>
        <input type="checkbox">Digital Media<br>
        <input type="checkbox">Economics<br>
        <input type="checkbox">Electrical and Electronic Technology<br>
        <input type="checkbox">Entrepreneurship<br>
        <input type="checkbox">Environmental Science<br>
        <input type="checkbox">Food and Nutrition<br>
        <input type="checkbox">French <br>
        </td>
        <td>
        <input type="checkbox">Geography<br>
        <input type="checkbox">Geometrical and Mechanical Engineering (GMED)<br>
        <input type="checkbox">History<br>
        <input type="checkbox">Information Technology<br>
        <input type="checkbox">Law<br>
        <input type="checkbox">Literatures in English<br>
        <input type="checkbox">Management of Business<br>
        <input type="checkbox">Performing Arts<br>
        <input type="checkbox">Physics<br>
        <input type="checkbox">Physical Education and Sport<br>
        <input type="checkbox">Pure Mathematics<br>
        <input type="checkbox">Sociology<br>
        <input type="checkbox">Spanish<br>
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