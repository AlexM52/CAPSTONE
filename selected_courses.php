<?php
		//include_once 'function.php';
		include_once 'db_setup.php';
		session_start();
		$Semester1 = $_POST["semester1"];
		$Semester2 = $_POST["semester2"];
	
    //Connect to the database
    // $host = '173.194.252.98';   //host name
    // $user = 'root';                     //username
    // $pass = 'capstone';                                 //password
    // $db = 'capstone';                          //Your database name you want to connect to
    //$port = 3306;                               //The port #. <usually 3306>

    $connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	//$db_selected=mysqli_select_db($connection,'SCA');

	$Semester1 = mysql_real_escape_string($Semester1);
	$Semester2 = mysql_real_escape_string($Semester2);

    //check for user
	$id = $_SESSION['stid'];
	$query = "UPDATE studentcourses set id='$id', semester1='$Semester1',semester2='$Semester2' where stid='$id'";
     $result = mysql_query($query);

    if($result)
		{
			include 'view_worksheet.php';
		}
		else
			{ echo "bye";}
	
	//header( 'Location: http://localhost/capstone/dashboard.html' ) ;
    
// Anything here....probably redirect to a profile page or something.
// BY THE WAY: I can also add a timestamp as a variable, which can be 
// used to timeout a session that's been inactive for some time.
?>