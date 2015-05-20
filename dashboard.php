<?php
  include_once 'function.php';
  connect();
  session_start();
  if (!isset($_SESSION["stid"]))
{
    ?><script> alert("I'm sorry, you did not login");</script><?php
// 	echo "<meta http-equiv=\"refresh\" content=\"0; url=http://146.148.57.189/Capstone/\">";
  echo '<script type="text/javascript">window.location="/Capstone";</script>';
}
else
{
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
    <div class="col-sm-9" style="float: right;  margin-right: -50px">
	<div style="float: right"><a align="right" class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a></div> 
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-dashboard"></i> Your Dashboard</h3>  
            
       <hr>
      
     <div class="row">

      <div class="panel panel-default">
      <!-- Default panel contents -->
        <?php
          $connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
          mysql_select_db(DB_NAME); 
          $id = $_SESSION['stid'];
          $query2 = "SELECT fname, lname, email FROM studentpersonal WHERE stid = '$id'";
          $results2 = mysql_query($query2);

          while ($obj2 = mysql_fetch_array($results2)) //fetch results set as object and output HTML
          {
            ?>
            <div class="panel-heading">Personal Details</div>
            <div class="panel-body">
                Name: <?php echo $obj2['fname']. " " .$obj2['lname']?> </br>
                Email: <?php echo $obj2['email']?> </br>
                ID Number: <?php echo $id?> </br>
            </div>
            <?php
          }
              
          $query = "SELECT * FROM student WHERE stid = '$id'";
          $results = mysql_query($query);

          while($obj = mysql_fetch_array($results)) //fetch results set as object and output HTML
          {
            ?>
              <div class="panel-heading">Registration Details</div>
              <div class="panel-body">
                Faculty: <?php echo $obj['faculty']?> </br>
                Status: <?php echo $obj['status']?> </br>
                Level: <?php echo $obj['level']?> </br>
              </div>
            <?php
            ?>
              <div class="panel-heading">Degree</div>
              <div class="panel-body" id>
                <span id="specialmain">Special: <span id="special"><?php echo $obj['program']?></span></span></br>
                <script>
                  if((document.getElementById('special').innerHTML === 'NULL')||(document.getElementById('special').innerHTML === '')||(document.getElementById('special').innerHTML === '--Select Special--')){
                    document.getElementById('specialmain').style.display='none';}
                </script>
                  <span id="major1main">First Major: <span id="major1"><?php echo $obj['major1']?></span></span></br>
                  <script>
                    if((document.getElementById('major1').innerHTML === 'NULL')||(document.getElementById('major1').innerHTML === '')||(document.getElementById('major1').innerHTML === '--Select Major--')){
                      document.getElementById('major1main').style.display='none';}
                  </script>
                  <span id="major2main">Second Major: <span id="major2"><?php echo $obj['major2']?></span></span></br>
                  <script>
                    if((document.getElementById('major2').innerHTML === 'NULL')||(document.getElementById('major2').innerHTML === '')||(document.getElementById('major2').innerHTML === '--Select Major--')){
                      document.getElementById('major2main').style.display='none';}
                  </script>
                  <span id="minor1main">First Minor: <span id="minor1"><?php echo $obj['minor1']?></span></span></br>
                  <script>
                    if((document.getElementById('minor1').innerHTML === 'NULL')||(document.getElementById('minor1').innerHTML === '')||(document.getElementById('minor1').innerHTML === '--Select Minor--')){
                      document.getElementById('minor1main').style.display='none';}
                  </script>
                  <span id="minor2main">Second Minor: <span id="minor2"><?php echo $obj['minor2']?></span></span></br>
                  <script>
                    if((document.getElementById('minor2').innerHTML === 'NULL')||(document.getElementById('minor2').innerHTML === '')||(document.getElementById('minor2').innerHTML === '--Select Minor--')){
                      document.getElementById('minor2main').style.display='none';}
                  </script>
                </div>
              <?php 
            }
          ?>
          <div class="panel-heading">Credits Required Details</div>
          <div class="panel-body">
            <?php
              $query3 = "SELECT * FROM studentcourses WHERE stid = '$id'";
              $results3 = mysql_query($query3);
              $_SESSION['level1'] = 0;
			  $_SESSION['level2'] = 0;
			  $_SESSION['level3'] = 0;
              $level23 = 0;
              $foundation = 0;
              $total = 0;

              while($obj3 = mysql_fetch_array($results3)) //fetch results set as object and output HTML
              {
                if($obj3['level']=='1'){
                  $_SESSION['level1'] = $_SESSION['level1'] + $obj3['credits'];
                }
				elseif($obj3['level']=='2'){
					$_SESSION['level2'] = $_SESSION['level2'] + $obj3['credits'];
					$level23 = $level23 + $obj3['credits'];
                }
				elseif($obj3['level']=='3'){
					$_SESSION['level3'] = $_SESSION['level3'] + $obj3['credits'];
					$level23 = $level23 + $obj3['credits'];
                }
                elseif($obj3['level']=='-1')
                {
                  $foundation = $foundation + $obj3['credits'];
                }
              }
              $total = $total + $_SESSION['level1'] + $level23 + $foundation;
            ?>    
               <table style="width: 100%">
                <tr>
                  <td style="text-align: left"><b>Courses</b></td>
                  <td style="text-align: center"><b>Level One</b></td>
                  <td style="text-align: center"><b>Level Two/Three</b></td>
                  <td style="text-align: center"><b>Foundation</b></td>
                  <td style="text-align: center"><b>Total</b></td>
                </tr>
                <tr>
                  <td style="text-align: left"><b>Minimum Credits Required</b></td>
                  <td style="text-align: center">24</td>
                  <td style="text-align: center">60</td>
                  <td style="text-align: center">9</td>
                  <td style="text-align: center"><b>93</b></td>
                </tr>
                <tr>
                  <td style="text-align: left"><b>Your Progress</b></td>
                  <td style="text-align: center"><?php echo $_SESSION['level1'] ?></td>
                  <td style="text-align: center"><?php echo $level23 ?></td>
                  <td style="text-align: center"><?php echo $foundation ?></td>
                  <td style="text-align: center"><b><?php echo $total ?></b></td>
                </tr>
              </table>
            </div>
        </div>

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
	<?php
}
?>