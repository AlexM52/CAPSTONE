<?php
  include_once 'function.php';
  connect();
  session_start();
  $_SESSION['year'] = 1;
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
    <div class="col-sm-9" >
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-education"></i> Here are some suggestions.</h3>  
            
       <hr>
     
       <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
      <p>Please take into consideration that these are merely suggestions. You have the right to accept or decline our advice. In addition, pay 
      keen attention to the credit limits for each semester.</p>
          </div>
        </div>
        <div class="panel-body">
          
         <form class="form form-vertical" method="post" action="selected_courses.php">
            <div class="control-group" name="major1"id="major1">
              <label class="form-control" id="controls" align="center"><h4><?php query_MyCourses_major1() ?></h4></label>
              <div class="controls">
          <?php query_MyCourses_major1_level1() ?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls').innerHTML === '<h4><option value="--Select Major--">--Select Major--</option></h4>'){
        document.getElementById('major1').style.display='none';
        }
      </script>
      
      
      
            <div class="control-group" name="major2" id="major2">
              <label class="form-control" id="controls2" align="center"><h4><?php query_MyCourses_major2() ?></h4></label>
              <div class="controls">
          <?php query_MyCourses_major2_level1() ?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls2').innerHTML === '<h4><option value="--Select Major--">--Select Major--</option></h4>'){
        document.getElementById('major2').style.display='none';
        }
      </script>
      
            <div class="control-group" name="special" id="special">
              <label class="form-control" id="controls3" align="center"><h4><?php query_MyCourses_special() ?></h4></label>
              <div class="controls">
          <?php query_MyCourses_special_level1() ?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls3').innerHTML === '<h4><option value="--Select Special--">--Select Special--</option></h4>'){
        document.getElementById('special').style.display='none';
        }
      </script>
        
      
            <div class="control-group" name="minor1" id="minor1">
              <label class="form-control" id="controls4" align="center"><h4><?php query_MyCourses_minor1() ?></h4></label>
              <div class="controls">
          <?php query_MyCourses_minor1_level1() ?></br>
              </div>
            </div> 
      <script>
        if(document.getElementById('controls4').innerHTML === '<h4><option value="--Select Minor--">--Select Minor--</option></h4>'){
        document.getElementById('minor1').style.display='none';
        }
      </script>
      
      <div class="control-group" name="minor2" id="minor2">
              <label class="form-control" id="controls5" align="center"><h4><?php query_MyCourses_minor2() ?></h4></label>
              <div class="controls">
          <?php query_MyCourses_minor2_level1() ?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls5').innerHTML === '<h4><option value="--Select Minor--">--Select Minor--</option></h4>'){
        document.getElementById('minor2').style.display='none';
        }
      </script>
      
      <div class="control-group">
              <label class="form-control" align="center"><h4>ELECTIVES</h4></label>
			  <p style="color: blue">By setting <a href="interests.php">your interest(s)</a>, we are better able to suggest elective courses.</p>
        <p style="color: red">Use these courses to add to your credit count.</p>
              <div class="controls">
                <?php electiveslevel1() ?>
      </br>
              </div>
            </div>   
      
      <div class="control-group">
			<label class="form-control" align="center"><h4>FOUNDATIONS</h4></label>
			<p style="color: blue">You must complete a total of three(3) foundation courses in the span of your university life. 
			Start by completing one each academic year</p>
			<p style="color:red">Select your foundation course under the semester in which you wish to complete it.</p>
			<div class="controls">
				<?php query_Foundation_level1() ?></br>
            </div>
        </div>   
         
            <div class="control-group">
              <label class="form-control" align="center"><h4>CREDIT DETAILS</h4></label>
              <div class="controls">
            <table width=100%>
              <tr style="vertical-align: top">
                <td style="color: blue">Maximum Credits for Semester I: 18</td>
                <td style="color: blue">Maximum Credits for Semester II: 21</td>
                </tr>
                <tr style="vertical-align: top">
                <td style="color: blue">Your Total Credit(s):<p id="count">0</p></td>
                <td style="color: blue">Your Total Credit(s):<p id="count2">0</p></td>
                </tr>
            </table></br>
              </div>
			</div> 
			  <button type="submit" class="btn btn-primary" align="right">View my worksheet</button>
          </form>
  
 </div>
  </div>
  </div>
  </div>
  </body>
  
  <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>


