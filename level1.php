<?php 
	
	include_once 'function.php';

	function major2level1 ()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{

			if($record['major2']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			

			elseif($record['major2']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major2']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				
			}
			

			elseif($record['major2']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major2']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			

			elseif($record['major2']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['major2']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['major2']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			 
			elseif($record['major2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}

	}

	


	function minor1level1 ()
	{

		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{

			if($record['minor1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			elseif($record['minor1']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			 
			elseif($record['minor1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			 
			elseif($record['minor1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['minor1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			 
			elseif($record['minor1']=="COASTAL ECOSYSTEMS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['minor1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			
			 
			elseif($record['minor1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			

			 
			elseif($record['minor1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
		}		
	}



?>