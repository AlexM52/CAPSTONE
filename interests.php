<?php
  include_once 'function.php';
  session_start();
  // if (!isset($_SESSION['stid'])){
  if (false){
    ?>
    <script type="text/javascript">window.location="/";</script>
    <?php
  }else{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Interests</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<!--<script type="text/javascript">-->
		<!--  function check(){-->
		    
		<!--  }-->
		<!--</script>-->
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
      <h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="cxc.php"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
		<li><a href="interests.php"><i class="glyphicon glyphicon-flash"></i> State Your Interests</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="worksheet2.php"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="worksheet3.php"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="worksheet4.php"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
		<li><a href="view_worksheet.php"><i class="glyphicon glyphicon-flash"></i> My Courses</a></li>
      </ul>
      
      <hr>
      
    </div><!-- /span-3 -->
    <div class="col-sm-9">
	<div style="float: right"><a align="right" class="navbar-brand" href="index.php"><img style="width:250px; height:80px" src="pictures/logo_1570017_web.jpg" alt=""></a></div> 
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-check"></i> Interests</h3>  
            
       <hr>
      
     <div class="row">
           
          
     
       </div><!--/row-->
       
       <!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">-->
       <!-- <div class="panel panel-default">-->
       <!--   <div class="panel-heading" role="tab" id="headingOne">-->
       <!--     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">-->
       <!--       <h4 class="panel-title">-->
              <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
       <!--         Humanities Interests-->
              <!--</a>-->
       <!--       </h4>-->
       <!--     </a>-->
       <!--   </div>-->
       <!--   <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">-->
       <!--     <div class="panel-body">-->
       <!--       <form action="action_page.php">-->
                <!--<div class="panel panel-default">-->
                <!--  <div class="panel-heading">Interest Area 1</div>-->
                <!--  <div class="panel-body">-->
       <!--         <div class="container">-->
       <!--             <input class="cb_interest" type="checkbox" name="fst" value="Networking">Foreign Languages</input>-->
       <!--             <br>-->
       <!--             <input type="checkbox" name="fst" value="Security">Education</input>-->
       <!--             <br>-->
       <!--             </div>-->
                <!--  </div>-->
                <!--</div>-->
       <!--         <div class="panel panel-default">-->
       <!--           <div class="panel-heading">Interest Area 2</div>-->
       <!--           <div class="panel-body">-->
       <!--             <input type="checkbox" name="fst" value="Security">Media</input>-->
       <!--             <br><br>-->
       <!--           </div>-->
       <!--         </div>-->
       <!--       </form>-->
       <!--     </div>-->
       <!--   </div>-->
       <!-- </div>-->
       <!-- <div class="panel panel-default">-->
       <!--   <div class="panel-heading" role="tab" id="headingTwo">-->
       <!--     <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
       <!--       <h4 class="panel-title">-->
              <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
       <!--         Law Interests.-->
              <!--</a>-->
       <!--       </h4>-->
       <!--     </a>-->
       <!--   </div>-->
       <!--   <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">-->
       <!--     <div class="panel-body">-->
       <!--       <form action="action_page.php">-->
       <!--       <input type="checkbox" name="fst" value="Networking">Law stuff</input>-->
       <!--       <br>-->
       <!--       <input type="checkbox" name="fst" value="Security">More law stuff....?</input> -->
       <!--       <br><br>-->
       <!--       </form>-->
       <!--     </div>-->
       <!--   </div>-->
       <!-- </div>-->
       <!-- <div class="panel panel-default">-->
       <!--   <div class="panel-heading" role="tab" id="headingThree">-->
       <!--     <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
       <!--       <h4 class="panel-title">-->
              <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
       <!--         Science and Technology Interests-->
              <!--</a>-->
       <!--       </h4>-->
       <!--     </a>-->
       <!--   </div>-->
       <!--   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">-->
       <!--     <div class="panel-body">-->
       <!--       <form action="action_page.php">-->
       <!--         <div class="col-md-3">-->
                  <!--<div class="panel panel-default">-->
                  <!--  <div class="panel-heading">Computing</div>-->
                  <!--  <div class="panel-body">-->
       <!--               <input type="checkbox" name="fst" value="ComputerNetworking">Computer Networking</input>-->
       <!--               <br>-->
       <!--               <input type="checkbox" name="fst" value="ComputerSecurity">Computer Security</input> -->
       <!--               <br>-->
       <!--               <input type="checkbox" name="fst" value="ComputerProgramming">Computer Programming</input> -->
       <!--               <br>-->
                  <!--  </div>-->
                  <!--</div>-->
       <!--         </div>-->
       <!--         <div class="col-md-3">-->
                  <!--<div class="panel panel-default">-->
                  <!--  <div class="panel-heading">General Sciences</div>-->
                  <!--  <div class="panel-body">-->
       <!--               <input type="checkbox" name="fst" value="Biology">Biology</input>-->
       <!--               <br>-->
       <!--               <input type="checkbox" name="fst" value="Chemistry">Chemistry</input> -->
       <!--               <br>-->
       <!--               <input type="checkbox" name="fst" value="Physics">Physics</input> -->
       <!--               <br>-->
                  <!--  </div>-->
                  <!--</div>-->
       <!--         </div>-->
       <!--         <div class="col-md-3">-->
       <!--           <input type="checkbox" name="fst" value="Engineering">Engineering</input>-->
       <!--           <br>-->
       <!--           <input type="checkbox" name="fst" value="Electronics">Electronics</input> -->
       <!--           <br>-->
       <!--           <input type="checkbox" name="fst" value="Mathematics">Mathematics</input> -->
       <!--           <br>-->
       <!--         </div>-->
       <!--         <div class="col-md-3">-->
       <!--           <input type="checkbox" name="fst" value="Biology"></input>-->
       <!--           <br>-->
       <!--           <input type="checkbox" name="fst" value="Chemistry"></input> -->
       <!--           <br>-->
       <!--           <input type="checkbox" name="fst" value="Physics"></input> -->
       <!--           <br>-->
       <!--         </div>-->
       <!--       </form>-->
       <!--     </div>-->
       <!--   </div>-->
       <!-- </div>-->
       <!-- <div class="panel panel-default">-->
       <!--   <div class="panel-heading" role="tab" id="headingFour">-->
       <!--     <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">-->
       <!--       <h4 class="panel-title">-->
              <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
       <!--         Social Sciences Interests-->
              <!--</a>-->
       <!--       </h4>-->
       <!--     </a>-->
       <!--   </div>-->
       <!--   <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">-->
       <!--     <div class="panel-body">-->
       <!--       <form action="action_page.php">-->
       <!--       <input type="checkbox" name="fst" value="Networking">Caribbean History</input>-->
       <!--       <br>-->
       <!--       <input type="checkbox" name="fst" value="Security">World History</input> -->
       <!--       <br>-->
       <!--       <input type="checkbox" name="fst" value="Security">Psychology?</input>-->
       <!--       <br><br>-->
       <!--       </form>-->
       <!--     </div>-->
       <!--   </div>-->
       <!-- </div>-->
        
              <!--<input type="submit">-->
              <!--<br><input type="button" onclick="alert('Hello World!')" value="SAVE">-->
       <!--       <br><input id="btn_save_interests" type="button" value="SAVE">-->
       <!--       <div id="status_div"></div>-->
       <!--</div>-->
       
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Interests (max. 15)</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <!--<input type="checkbox" name="fst" value="Engineering">Engineering</input>-->
              <!--<br>-->
              <!--<input type="checkbox" name="fst" value="Electronics">Electronics</input> -->
              <!--<br>-->
              <!--<input type="checkbox" name="fst" value="Mathematics">Mathematics</input> -->
              <!--<br>-->
              <?php
              connect();
              // Get list of current student's interests
              $myData = mysql_query("SELECT interests FROM student WHERE stid=".$_SESSION['stid']);
              $record = mysql_fetch_array($myData);
              $s_ints = $record['interests'];
              $s_ints = explode(",", $s_ints);  // <-- Split serialized string into array of indiv. values
              // Get # interest, to split into columns
              $myData = mysql_query("SELECT COUNT(interest) AS cnt FROM interests");
              $record = mysql_fetch_array($myData);
              $i_count = $record['cnt'];
              $i_colcnt = 0;
              $myData = mysql_query("SELECT * FROM interests ORDER BY interest ASC");
              // $first_so_skip = true;
              // $prev_area = "meh";
          		while($record = mysql_fetch_array($myData))
          		{
            		// 	echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
            		// $interest_split = str_split(" ", $record['interest']);
            		// if ($first_so_skip){
            		//   echo "first";
            		//   $first_so_skip = false;
            		//   $prev_area = $interest_split[0];
            		// }else{
            		//   echo $interest_split[0];
            		//   echo $prev_area;
            		//   if ($interest_split[0] != $prev_area){
            		//     echo $interest_split[0];
            		//     echo $prev_area;
            		//     >
            		//     <hr />
            		//     <?php
            		//   }
            		// }
            		if ($i_colcnt < ($i_count/3)){
              		?><input type="checkbox" class="cb_interest" name="interests" value="<?php echo $record['iid']; ?>"<?php if(in_array($record['iid'], $s_ints)){echo "checked";} ?>><?php echo $record['interest']; ?></input>
                    <br>
                  <?php
                  $i_colcnt += 1;
            		}else{
            		  ?>
            		  </div>
            		  <div class="col-md-4">
            		    <input type="checkbox" class="cb_interest" name="interests" value="<?php echo $record['iid']; ?>"<?php if(in_array($record['iid'], $s_ints)){echo "checked";} ?>><?php echo $record['interest']; ?></input>
                    <br>
          		    <?php
          		    $i_colcnt = 0;
            		}
          		}
              ?>
            </div>
          </div>
          <!--<div class="row">-->
          <br><input id="btn_save_interests" type="button" value="SAVE">
          <div id="status_div"></div>
          <!--</div>-->
        </div>
      </div>
       
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
		<script type="text/javascript" src="js/interests.js"></script>
	</body>
</html>
<?php
}
?>
