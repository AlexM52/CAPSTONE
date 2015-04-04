<?php
session_start();
// FOLLOWING COMMENTED CODE WAS USED FOR TESTING
// PAGE DIFFERENCES WITH SET AND UNSET SESSION.
// WILL BE REMOVED WHEN SESSION MGMT FULLY IMPLEMENTED.
// $_SESSION['id']=1;
// $_SESSION['fname']="Alex"
// session_unset();
// session_destroy();
// if (!isset($_SESSION['id'])){
    ?>
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/cover/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>UWI Mona Student Adviser</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Student Course Adviser</h3>
              <nav>
                <ul class="nav masthead-nav">
                    <?php
                    if (!isset($_SESSION['id'])){
                    ?>
                  <li class="dropdown">
		          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="">
		            <i class="glyphicon glyphicon-user"></i> Login <span class="caret"></span></a>
		          <ul id="g-account-menu" class="dropdown-menu" role="menu">
		            <form class="navbar-form navbar-left" method="post" action="_starter_login.php">
                              <div class="form-group">
                                <input type="text" class="form-control" name ="username" placeholder="Username">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-default">Log in</button>
                     </form>

		          </ul>
		        </li>
		            
                   
		            
		          
		        
                  <!--  <li class="active"><a href="./Cover Template for Bootstrap_files/Cover Template for Bootstrap.html">Log In</a></li> -->
                  <li><a href="about.php">About</a></li>
                  <li><a href="faqs.php">FAQ's</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">UWI MONA Student Course Adviser</h1>
            <p class="lead">We plan your degree so you don't have to!</p>
            <p class="lead">
                
              <a href="signup.php" class="btn btn-lg btn-default">Sign up</a>
                
            </p>
          </div>

          <div class="mastfoot">
            
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    

</body>
</html>