<?php
include_once 'function.php';
	connect();
	session_start();
	$_SESSION['year'] = $_SESSION['year'];
	
	$depart = $_POST["search"];
	$level = $_POST["level"];

	// $host = 'localhost';   //host name
 //    $user = 'root';                     //username
 //    $pass = '';                                 //password
 //    $db = 'capstone';                          //Your database name you want to connect to

	$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	
	$depart = mysql_real_escape_string($depart);
	$level = mysql_real_escape_string($level);
	
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
    <div class="col-sm-9" style="float: right;  margin-right: -50px">
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
          </div>
        </div>
        <div class="panel-body">
          
         <form class="form form-vertical" method="post" action="add_search.php" onsubmit="return totalcredits(this)">
            
      <div class="control-group">
              <label class="form-control" align="center"><h4>RESULT(S) FROM SEARCH</h4></label>
			  <p style="color: blue">You can use these courses to add to your credit count.</p>
              <div class="controls">
                <?php $myData2 = mysql_query("SELECT * FROM courses WHERE dept='$depart' and c_level='$level' and semester='1'");
				$myData3 = mysql_query("SELECT * FROM courses WHERE dept='$depart' and c_level='$level' and semester='2'");
						include 'mydegree.php';
?>
				
      </br>
              </div>
            </div> 
 
			<div align="right">
			<?php echo "<a href=\"javascript:history.go(-1)\"><input type='button' class='btn btn-primary' value='Go Back'/></a>"?>
			<button type="submit" class="btn btn-primary" align="right">Add to my worksheet</button>
			</div>
          </form>
  
 <script language="javascript" type="text/javascript">
    function totalcredits()
    {

      var semester1 = document.getElementById("count").innerHTML;
      var semester2 = document.getElementById("count2").innerHTML;
      var status = document.getElementById("status").value;
      var credittotal = parseInt(semester1) + parseInt(semester2);

      if((semester1 < 13) && (status=="Full Time")){
        alert("You need to do more than 12 credits in semester one.");
        return false;
      }
      else if((semester2 < 13) && (status=="Full Time")) {
        alert("You need to do more than 12 credits in semester two.");
        return false;
      }
      else if((credittotal < 33) && (status=="Full Time")){
        alert("You need to do a minimum of 33 credits for the year.");
        return false;
      }
      else if((credittotal > 39) && (status=="Full Time")){
        alert("You have exceeded your credit limit for the year.");
        return false;
      }
      else if((semester1 > 12) && (status=="Part Time")){
        alert("You can only do 12 credits in semester one.");
        return false;
      }
      else if((semester2 > 12) && (status=="Part Time")){
        alert("You can only do 12 credits in semester two.");
        return false;
      }
      else if((credittotal < 18) && (status=="Part Time")){
        alert("You need to do a minimum of 18 credits for the year.");
        return false;
      }
      else if((credittotal > 27) && (status=="Part Time")){
        alert("You have exceeded your credit limit for the year.");
        return false;
      }
      else{
        return true;
      }
  }
  </script>
  
  <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
<?php
}
?>