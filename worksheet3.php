<?php
  include_once 'function.php';
  connect();
  session_start();
  $_SESSION['year'] = 3;
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
   <div class="col-sm-3" style="position: fixed">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="cxc.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
		<li><a href="interests.php"><i class="glyphicon glyphicon-flash"></i> State Your Interests</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="worksheet2.php"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li class="active"><a href="worksheet3.php"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="worksheet4.php"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
		<li><a href="view_worksheet.php"><i class="glyphicon glyphicon-flash"></i> My Courses</a></li>
      </ul>
      
      <hr>
	  
	   <div class="control-group">
              <label class="form-control" align="center"><h5><strong>CREDIT DETAILS</strong></h5></label>
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
      
    </div><!-- /span-3 -->
	
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel" style="color: blue" align="center"><strong>Pre-requisites</strong></h4>
			  </div>
			  <div class="modal-body">
					<form method="post" action="pre-req_lookup.php">
						<div class="form-group">
							<label>Lookup</label></br>
								Course Code: <input class="form-control" name="search" required />
							
								<button type="submit" class="btn btn-default" align="right">Go</button></br>
								</a>
						</div>
					</form>
					<?php echo $_SESSION['prereq']; ?>
					
				
          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="container">
                    <input type="checkbox" name="fst" value="Networking">Foreign Languages</input>
                    <br>
                    <input type="checkbox" name="fst" value="Security">Education</input>
                    <br>
                 </div>
			</div>
		</div>
							 
			<div class="panel-body"><?php 
				$req = $_SESSION['req'];
					foreach($req as $key){?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
									<strong><?php print_r($key);?></strong>
								</div>
							</div>
						</div><?php

						$myData7 = mysql_query("SELECT distinct * FROM prereq WHERE c_code='$key'");
						if($record7 = mysql_fetch_array($myData7)){
							while($record7 = mysql_fetch_array($myData7)){
								echo('<p style="display: inline-block" value="'.$record7['prereq_code'].'"> '.$record7['prereq_code'].'</p>, ');
								}
							}
							else{
								echo "No pre-requisite(s).";
							}
						}?>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
		
    <div class="col-sm-8" style="float: right;  position:relative;">
     <div style="float: right"><a align="right" class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a></div>  
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-education"></i> Here are some suggestions.</h3>
	   <li class="dropdown">
		          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href=""> Search For More Courses <span class="caret"></span></a>
		          <ul id="g-account-menu" class="dropdown-menu" role="menu">
		            <form class="navbar-form navbar-left" method="post" action="search.php">
                              <div class="form-group">
									Department: <select class="form-control" name="search" required autofocus>
											<option selected>LIFE SCIENCES</option>
											<option>MEDICAL SCIENCES</option>
											<option>CHEMISTRY</option>
											<option>COMPUTING</option>
											<option>PHYSICS</option>
											<option>GEOGRAPYH AND GEOLOGY</option>
											<option>MATHEMATICS</option>
									</select>
									
									Level: <select class="form-control" name="level" required autofocus>
											<option selected>1</option>
											<option>2</option>
											<option>3</option>
									</select>
								</div>
                              <button type="submit" class="btn btn-default">Go</button>
                     </form>

		          </ul>
		        </li>
       <hr>
     
       <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
      <p>Please take into consideration that these are merely suggestions. You have the right to accept or decline our advice. In addition, pay 
      keen attention to the credit limits for each semester.</p>
	   <div style="float: right"><b><a href="#" data-toggle="modal" data-target="#t_and_c_m"> Get Pre-requisites</a></b></div></br>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical" method="post" action="selected_courses.php">
            <div class="control-group" name="major1"id="major1">
              <label id="controls" class="form-control" align="center"><h4><?php query_MyCourses_major1() ?></h4></label>
              <div class="controls">
          <b><?php echo "Level II Courses";?></b><?php major1level2(); ?><b><?php echo "Level III Courses";?></b><?php major1level3();?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls').innerHTML === '<h4><option value="--Select Major--">--Select Major--</option></h4>'){
        document.getElementById('major1').style.display='none';
        }
      </script>
      
      
      
            <div class="control-group" name="major2" id="major2">
              <label id="controls2" class="form-control" align="center"><h4><?php query_MyCourses_major2() ?></h4></label>
              <div class="controls">
          <b><?php echo "Level II Courses";?></b><?php major2level2(); ?><b><?php echo "Level III Courses";?></b><?php major2level3();?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls2').innerHTML === '<h4><option value="--Select Major--">--Select Major--</option></h4>'){
        document.getElementById('major2').style.display='none';
        }
      </script>
      
      

      <form class="form form-vertical">
            <div class="control-group" name="special" id="special">
              <label id="controls3" class="form-control" align="center"><h4><?php query_MyCourses_special() ?></h4></label>
              <div class="controls">
          <b><?php echo "Level II Courses";?></b><?php programlevel2(); ?><b><?php echo "Level III Courses";?></b><?php programlevel3();?></br>
              </div>
            </div>
      <script>
        if(document.getElementById('controls3').innerHTML === '<h4><option value="--Select Special--">--Select Special--</option></h4>'){
        document.getElementById('special').style.display='none';
        }
      </script>
        
      
            <div class="control-group" name="minor1" id="minor1">
              <label id="controls4" class="form-control" align="center"><h4><?php query_MyCourses_minor1() ?></h4></label>
              <div class="controls">
          <b><?php echo "Level II Courses";?></b><?php minor1level2(); ?><b><?php echo "Level III Courses";?></b><?php minor1level3();?></br>
              </div>
            </div> 
      <script>
        if(document.getElementById('controls4').innerHTML === '<h4><option value="--Select Minor--">--Select Minor--</option></h4>'){
        document.getElementById('minor1').style.display='none';
        }
      </script>
      
      <div class="control-group" name="minor2" id="minor2">
              <label id="controls5" class="form-control" align="center"><h4><?php query_MyCourses_minor2() ?></h4></label>
              <div class="controls">
          <b><?php echo "Level II Courses";?></b><?php minor2level2(); ?><b><?php echo "Level III Courses";?></b><?php minor2level3();?></br>
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

     <!--   <div class="controls">-->
			  <!--<b><php echo "Level II Courses";?></b><php electiveslevel2();?><b><php echo "Level III Courses";?></b><php electiveslevel3();?></br>-->
					<!--</br>-->

        <table style="width: 100%" >
        <tr>
          <td style="text-align: center"><b>Semester I</b></td>
          <td style="text-align: center"><b>Semester II</b></td>
        </tr>
        <tr>
          <td>
          <?php
          // Get student's interests
          $myData = mysql_query("SELECT interests FROM student WHERE stid=".$_SESSION['stid']);
          $res = mysql_fetch_array($myData);
          $s_ints = parse_interests($res['interests']);   // $s_ints now holds array of iid's
          foreach($s_ints as $i){             // for each iid...
            $res = query_icourses_sem($i, 1);   // ...return result set of courses matching iid for given semester
            if($row = mysql_fetch_array($res)){       // ...use the first one
          ?>
            <input type="checkbox" name="boxes[]" value="<?php echo $row['c_code']; ?>"><a href=""><?php echo $row['c_code']; ?></a></input><br>
          <?php
            }
          }
          ?>
          </td>
          <td>
          <?php
          // Get student's interests
          $myData = mysql_query("SELECT interests FROM student WHERE stid=".$_SESSION['stid']);
          $res = mysql_fetch_array($myData);
          $s_ints = parse_interests($res['interests']);   // $s_ints now holds array of iid's
          foreach($s_ints as $i){             // for each iid...
            $res = query_icourses_sem($i, 2);   // ...return result set of courses matching iid for given semester
            if($row = mysql_fetch_array($res)){       // ...use the first one
          ?>
            <input type="checkbox" name="boxes[]" value="<?php echo $row['c_code']; ?>"><a href=""><?php echo $row['c_code']; ?></a></input><br>
          <?php
            }
          }
          ?>
          </td>
        </tr>
        
        </table>

              </div>
            </div></br>  
      
      <div class="control-group">
			<label class="form-control" align="center"><h4>FOUNDATIONS</h4></label>
			<p style="color: blue">You must complete a total of three(3) foundation courses in the span of your university life. 
			Start by completing one each academic year</p>
			<p style="color: red">Select your foundation course under the semester in which you wish to complete it.</p>
			<div class="controls">
				<?php query_Foundation_level2() ?></br>
            </div>
	</div>
	
			<div class="control-group">
			<p style="color: blue"><strong>Want to try something new? Replace your foundation courses with a language!</strong></p>
			<div class="controls" align="right">
			<select class="form-control">
				<option selected>--Select a Language--</option>
				<option>Chinese</option>
				<option>French</option>
				<option>Japanese</option>
				<option>Spanish</option>
			</select></br>
			</div>
			</div>
        </div>   
			  <div align="right"><button type="submit" class="btn btn-primary">Update my worksheet</button></div>
          </form>
		  
  </div>
   <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  </div>
  </div>
  </div>
  </body>
  
 
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
<?php
}
?>

