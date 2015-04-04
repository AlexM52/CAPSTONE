<?php
// this code should be placed in a login php file that will receive form
// data and use it to check for a user in a database, then start a session
// for that user.
// 
// Start the session.
include_once 'db_setup.php';
session_start();

$USER = $_POST["username"];
$PASS = $_POST["password"];


    $connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
    mysql_select_db(DB_NAME);
	$USER = mysql_real_escape_string($USER);
	$PASS = mysql_real_escape_string($PASS);
    
    //$query = "SELECT * FROM studentpersonal";
    $result = mysql_query("SELECT * FROM studentpersonal WHERE email='$USER' AND password='$PASS'");

    if($result){
		while ($row = mysql_fetch_assoc($result)) {
        //echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];

            
        $_SESSION["stid"] = $row['stid'];
        $_SESSION["fname"] = $row['fname'];
		$_SESSION["lname"] = $row['lname'];
		// include 'dashboard.php';
         ?>
        <script type="text/javascript"> window.location="dashboard.php";</script>
        <?php
		}
	}
    if(!isset($_SESSION["stid"]))
    {
        ?>
            <script type="text/javascript"> 
            alert("Invalid username or password.");
            window.location="index.php";</script>
        <?php
    }
	
	//header( 'Location: http://localhost/capstone/dashboard.html' ) ;
?>
