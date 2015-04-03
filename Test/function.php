<?php
	include_once 'db_setup.php';
	//include_once 'queries.php';

	
	function connect()
	{
		mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
		mysql_select_db(DB_NAME);
	}
		
	function close()
	{
		mysql_close();
	}

	function query_majors()
	{
		$myData = mysql_query("SELECT * FROM majors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
	function query_minors()
	{
		$myData = mysql_query("SELECT * FROM minors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	

	function query_special()
	{
		$myData = mysql_query("SELECT * FROM special");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
	function query_MyCourses_major1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['major1'].'">'.$record['major1'].'</option>';
		}
	}
	
	function query_MyCourses_major2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['major2'].'">'.$record['major2'].'</option>';
		}
	}

	function query_MyCourses_minor1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['minor1'].'">'.$record['minor1'].'</option>';
		}
	}


	function query_MyCourses_major1_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

		

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				
			}
			

			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			 
			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}

		
	}


	function level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';

			}

		

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				
			}
			

			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			 
			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

		}
	}


	function level3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';

			}

		

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				
			}
			

			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			

			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			 
			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

		}
	}


?>	