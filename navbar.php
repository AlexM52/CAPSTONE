      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="faqs.php">FAQ's</a>
                    </li>
                    <li>
                        <a href="contactform.php">Contact</a>
                    </li>
                    <li>
                        <a href="features.php">Features</a>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["fname"]?>  <?php echo $_SESSION["lname"];?><span class="caret"></span></a>
                      <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->