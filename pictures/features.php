<?php
  include_once 'function.php';
  connect();
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
      <!-- Header -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <?php include 'navbar.php';?>
	    </nav>

      	<div class="container">

        	<!-- Page Header -->
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Features
	                    <small><i>Planning your degree, now made simple</i></small>
	                </h1>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-6 portfolio-item">
	                <a href="#">
	                    <img class="img-responsive" src="pictures/major.png" alt="">
	                </a>
	                <h3>
	                    <a href="#">Select A Degree</a>
	                </h3>
	                <p>Choose from a pre-populated list of majors, minors and programs that are available at the University of The West Indies Mona</p>
            	</div>

            	<div class="col-md-6 portfolio-item">
	                <a href="#">
	                    <img class="img-responsive" src="pictues/Course.png" alt="">
	                </a>
	                <h3>
	                    <a href="#">Let us suggest your courses</a>
	                </h3>
	                <p>Based on your Major/Minor, we provide you with suitable course options.</p>
            	</div>
        	</div>










			</div>























    	<footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>