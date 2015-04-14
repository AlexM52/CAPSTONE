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
   $query1 = "DELETE FROM studentcourses WHERE stid='$id' AND year='$year'";
	$result1 = mysql_query($query1);
	if($result1){ 
	if(isset($_POST["boxes"])){
		foreach($_POST["boxes"] as $boxValue){
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
	}
	ELSE
	{
			ECHO "fail";
	}
?>