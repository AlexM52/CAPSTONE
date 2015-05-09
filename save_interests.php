<?php include 'function.php';
session_start();
$stid = $_SESSION['stid'];
$interests = $_POST['interests'];
connect();
$query = 'UPDATE student SET interests="'+$interests+'" where item_id=0';
$result = mysql_query($query);
echo $result;
if ($result) 
{
	//include("Location: dashboard.php"); /* Redirect browser */
	//exit();
// 	$_SESSION["stid"]=$id;
// 	$_SESSION["fname"]=$Fname;
// 	$_SESSION["lname"]=$lname;
    echo $result;                   //NEED TO HANDLE FAILED UPDATE SCENARIOS...what is $result on success/failure?
}

?>