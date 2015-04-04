<?php
  //include_once 'function.php';
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
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
<!-- Header -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include 'navbar.php';?>
  </nav>
<!-- /Header -->
<h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
  <div class="col-sm-3">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Questions</h3>
            <p>Choose a category</p>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="cxc.php"><i class="glyphicon glyphicon-flash"></i> Admissions</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Registration</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Examination</a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-list-alt"></i> Financial Information </a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-book"></i> Course Selction</a></li>
        <li><a href="javascript:;"><i class="glyphicon glyphicon-briefcase"></i> Other Questions</a></li>
      </ul>
      
      <hr>
      
    </div><!-- /span-3 -->
    <div class="col-sm-9">
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-hand-down"></i> Frequently Asked Questions</h3>  
            <p>Here you can can find answers to most questions relating to the registration process at The University of the West Indies Mona
            </p>
       <hr>
      
     <div class="row">

        <!-- Team Members Row -->
        <div class="row">
            <p><i> <strong>Q: How can the Faculty of Science and Technology, Dean's Office Help me?</i></strong> </p>
            <p><strong>A:</strong> The mission of the Faculty of Science and Technology is to offer the students, the University Community and visitors the highest standards of service. We aim to provide accurate and complete information on the Faculty's policies and procedures. We aslo offer academic advice and counselling and represent the students at various University bodies.</p>
        </div>
     
       </div><!--/row-->
    </div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  
   
              
    
      
      
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->

<!-- /Main -->








  <footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>