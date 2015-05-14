<?php include 'function.php';


session_start();
if (!isset($_SESSION['stid']) || !isset($_POST['interests'])){
    echo "ERROR - No user or valid input detected.";
}else{
    $stid = $_SESSION['stid'];
    $interests = $_POST['interests'];
    connect();
    // $interests = explode(",", $interests);
    $query = 'UPDATE student SET interests="'.$interests.'" WHERE stid='.$stid;
    // $query = 'INSERT INTO student_interests VALUES('.$stid.', '.$interest.')';
    $result = mysql_query($query);
    // echo $result;
    close();
    if ($result == 1){
        echo 'INTERESTS SAVED!';
    }
}
// foreach($interests as $interest){
//     $query = 'UPDATE student SET interests="'.$interests.'" WHERE stid='.$stid;
//     // $query = 'INSERT INTO student_interests VALUES('.$stid.', '.$interest.')';
//     $result = mysql_query($query);
//     echo $result;
//     if ($result) 
//     {
//     	//include("Location: dashboard.php"); /* Redirect browser */
//     	//exit();
//     // 	$_SESSION["stid"]=$id;
//     // 	$_SESSION["fname"]=$Fname;
//     // 	$_SESSION["lname"]=$lname;
//         echo $result;                   //NEED TO HANDLE FAILED UPDATE SCENARIOS...what is $result on success/failure
//     }
// }


?>