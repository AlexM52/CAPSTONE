<?php
  include_once 'function.php';
  connect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fequently Asked Questions</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <?php include 'navbar.php';?>
      </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Frequently Asked Questions
                    <small>Did this help?</small>
                </h1>
                </div>
        </div>

        <!-- Question and Answer Row -->
        <div class="row">
           <?php
        $myData = mysql_query("SELECT distinct topic_name FROM faq");
        while($record = mysql_fetch_array($myData))
        {
          $name =$record['topic_name'];
          ?><h2><strong><?php echo $name ?></strong></h2></br>
          <?php $myData2 = mysql_query("SELECT distinct * from faq where topic_name= '$name'");
              while($record2 = mysql_fetch_array($myData2))
              {
                ?><h4><?php echo  '<option value="'.$record2['topic_name'].'">'.$record2['question'].'</option>';?></h4>
                <?php
                echo '<p value="'.$record2['topic_name'].'">'.$record2['answer'].'</p>';?></br></br><?php
              }
        }
      ?>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Student Course Adviser 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
