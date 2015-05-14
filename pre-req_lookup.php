<?php
include_once 'function.php';
	connect();
	session_start();
	$_SESSION['year'] = $_SESSION['year'];
	
	$search = $_POST["search"];

	// $host = 'localhost';   //host name
 //    $user = 'root';                     //username
 //    $pass = '';                                 //password
 //    $db = 'capstone';                          //Your database name you want to connect to

	$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	
	$search = mysql_real_escape_string($search);
	
	 if (!isset($_SESSION["stid"]))
{
    ?><script> alert("I'm sorry, you did not login");</script><?php
	echo "<meta http-equiv=\"refresh\" content=\"0; url=http://146.148.57.189/Capstone/\">";
}
else
{
	$myData7 = mysql_query("SELECT distinct * FROM prereq WHERE c_code='$search'");
	if($record7 = mysql_fetch_array($myData7)){
		while($record7 = mysql_fetch_array($myData7)){
			$_SESSION['prereq']=('<p style="display: inline-block" value="'.$record7['prereq_code'].'"> '.$record7['prereq_code'].'</p>, ');
			}
		}
		else{
			$_SESSION['prereq']="No pre-requisite(s).";
		}
}?>