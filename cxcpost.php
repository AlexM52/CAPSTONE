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
    
	if(isset($_POST["boxes"])){
		foreach($_POST["boxes"] as $boxValue){
			echo $boxValue;
			$query = "SELECT * FROM cxc WHERE cxc_name = '$boxValue'";
			$results = mysql_query($connection, $query);
			while($record = mysql_fetch_assoc($results))
			{
				$type = $record['type'];
				$query1 = "INSERT INTO studentcxc (`stid`,`cxc_name`, `type`) VALUES ('stid', '$boxValue', '$type')";
				$results2 = mysql_query($query1);
				
				if($results2)
				{
					echo "success";
				}
				else
				{
					echo "failure";
				}
			}
		}
	}
?>