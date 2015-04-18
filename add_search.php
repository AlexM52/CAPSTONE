<?php
	include_once 'function.php';
	connect();
	session_start();

	// $host = 'localhost';   //host name
 //    $user = 'root';                     //username
 //    $pass = '';                                 //password
 //    $db = 'capstone';                          //Your database name you want to connect to

	$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	
   $id = $_SESSION['stid'];
   $year = $_SESSION['year'];
   $code=array();
    
	if(isset($_POST["boxes"])){
		foreach($_POST["boxes"] as $boxValue)
		{
			$query =mysql_query("SELECT * FROM studentcourses WHERE c_code='$boxValue' AND stid='$id'");
			while($row=mysql_fetch_array($query))
			{				
				$codes[]=$row['c_code'];
			}
		}
	}

		if($codes==[])
		{
			foreach($_POST["boxes"] as $boxValue)
			{
				$query1 = mysql_query("SELECT * FROM courses WHERE c_code = '$boxValue'");
				while($record = mysql_fetch_array($query1))
				{
					$id = $_SESSION['stid'];
					$year = $_SESSION['year'];
					$course= $record['c_name'];
					$semester = $record['semester'];
					$credit = $record['creditnum'];
					$level = $record['c_level'];
					$query = "INSERT INTO studentcourses(stid, c_code, c_name, semester, credits, level, year) VALUES ('$id', '$boxValue', '$course', '$semester', '$credit', '$level', '$year')";
					$result = mysql_query($query);
					if($result)
					{
						?><script type="text/javascript"> window.location="view_worksheet.php";</script><?php
					}
				}
			}
		}
		else
		{?>
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
  
				<div>
					 <form class="form form-vertical" method="post" action="selected_courses.php" onsubmit="return totalcredits(this)">
						<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title" align="center">
						<label><h4>Oops... Looks like you have already registered for the following course(s).</h4></label>
						 </div>
						</div>
						<div class="panel-body" align="center"><?php
							foreach($codes as $boxValue)
							{
								print_r($boxValue)?></br><?php
							}
						?>
						<div align="right"><?php echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";?>
						<footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
						  <!-- script references -->
							<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
							<script src="js/bootstrap.min.js"></script>
						  <?php exit() ?>
						  </div>
						 </div>
						</div>   
					  </form>
				</div><?php
		}
?>