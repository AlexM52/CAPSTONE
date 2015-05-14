<?php
		//include_once 'function.php';
		include_once 'db_setup.php';
		session_start();
		$Major1 = $_POST["major1"];
		$Major2 = $_POST["major2"];
		$Minor1 = $_POST["minor1"];
		$Minor2 = $_POST["minor2"];
		$Special = $_POST["special"];
		$Level = $_POST["level"];
		$Status = $_POST["status"];
	

    //Connect to the database
    // $host = '173.194.252.98';   //host name
    // $user = 'root';                     //username
    // $pass = 'capstone';                                 //password
    // $db = 'capstone';                          //Your database name you want to connect to
    //$port = 3306;                               //The port #. <usually 3306>

    $connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	//$db_selected=mysqli_select_db($connection,'SCA');

	$Major1 = mysql_real_escape_string($Major1);
	$Major2 = mysql_real_escape_string($Major2);
	$Special = mysql_real_escape_string($Special);
	$Minor1 = mysql_real_escape_string($Minor1);
	$Minor2 = mysql_real_escape_string($Minor2);

    //check for user
	$id = $_SESSION['stid'];
	$query = "UPDATE student set stid='$id', major1='$Major1',major2='$Major2',program='$Special',minor1='$Minor1',minor2='$Minor2' where stid='$id'";
     $result = mysql_query($query);

    if($result)
		{
			?><script type="text/javascript"> window.location="worksheet.php";</script><?php
		}
	
	//header( 'Location: http://localhost/capstone/dashboard.html' ) ;
    
// Anything here....probably redirect to a profile page or something.
// BY THE WAY: I can also add a timestamp as a variable, which can be 
// used to timeout a session that's been inactive for some time.
?>