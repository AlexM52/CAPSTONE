<?php
	include_once 'db_setup.php';
	
	function connect()
	{
		mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
		mysql_select_db(DB_NAME);
	}
		
	function close()
	{
		mysql_close();
	}
	
	function year1_semester1_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=1 AND year=1 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year1_semester2_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=2 AND year=1 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year2_semester1_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=1 AND year=2 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year2_semester2_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=2 AND year=2 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year3_semester1_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=1 AND year=3 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year3_semester2_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=2 AND year=3 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year4_semester1_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=1 AND year=4 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}
	
	function year4_semester2_courses()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT distinct * FROM studentcourses WHERE semester=2 AND year=4 AND stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['c_name'].'">'.$record['c_code'].' '.$record['c_name'].'</option>';
		}
	}

	function query_cxc1()
	{
		$myData = mysql_query("SELECT * FROM cxc WHERE type= 'CSEC'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['id'] <= 17){
				echo '<input type="checkbox" id="'.$record['type'].'" value="'.$record['cxc_name'].'" name="boxes[]">'.$record['cxc_name'].'<br>';
			}
		}
	}
	
	function query_cxc2()
	{
		$myData = mysql_query("SELECT * FROM cxc WHERE type= 'CSEC'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['id'] > 17){
				echo '<input type="checkbox" id="'.$record['type'].'" value="'.$record['cxc_name'].'" name="boxes[]">'.$record['cxc_name'].'<br>';
			}
		}
	}

	function query_cape1()
	{
		$myData = mysql_query("SELECT * FROM cxc WHERE type= 'CAPE'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['id'] <= 58){
				echo '<input type="checkbox" id="'.$record['type'].'" value="'.$record['cxc_name'].'" name="boxes[]">'.$record['cxc_name'].'<br>';
			}
		}
	}
	
	function query_cape2()
	{
		$myData = mysql_query("SELECT * FROM cxc WHERE type= 'CAPE'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['id'] > 58){
				echo '<input type="checkbox" id="'.$record['type'].'" value="'.$record['cxc_name'].'" name="boxes[]">'.$record['cxc_name'].'<br>';
			}
		}
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
	
	function query_Foundation_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			$myData2 = mysql_query("SELECT * FROM courses where c_code='FOUN1014'");
			$myData3 = mysql_query("SELECT * FROM courses where c_code='FOUN1014'");
			include 'mydegree.php';
		}
	}
	
	function query_Foundation_level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			$myData2 = mysql_query("SELECT * FROM courses where c_code='FOUN1014' OR c_code='FOUN1101' OR c_code='FOUN1301'");
			$myData3 = mysql_query("SELECT * FROM courses where c_code='FOUN1014' OR c_code='FOUN1101' OR c_code='FOUN1301'");
			include 'mydegree.php';
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
	
	function query_MyCourses_major1_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci  WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				echo "Notice: All students with Chemistry as their 1st Major, should ensure that you register for at least two(2) 'MATH' courses";
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				echo "Notice: All students with Chemistry as their 1st Major, should ensure that you register for at least two(2) 'MATH' courses";
				;$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				echo "Notice: All students with Chemistry as their 1st Major, should ensure that you register for at least two(2) 'MATH' courses";
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				echo "Notice: All students with Chemistry as their 1st Major, should ensure that you register for at least two(2) 'MATH' courses";
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM mathmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM mathmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
						 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM mathmodel WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM mathmodel WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
	
			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
 
			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

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
	
	function query_MyCourses_major2_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major2']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			elseif($record['major2']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci  WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				
			}
			
			elseif($record['major2']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
						 
			elseif($record['major2']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
	
			elseif($record['major2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major2']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
 
			elseif($record['major2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}
	}
	
	function query_MyCourses_special()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['program'].'">'.$record['program'].'</option>';
		}
	}
	
	function query_MyCourses_special_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['program']=="INFORMATION TECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['program']=="COMPUTER STUDIES")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}	

			elseif($record['program']=="COMPUTER SYSTEMS ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}	

			elseif($record['program']=="PHYSICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}	

			elseif($record['program']=="ACTUARIAL SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}	

			elseif($record['program']=="MATHEMATICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}

			elseif($record['program']=="BIOLOGY WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}

			elseif($record['program']=="ENVIRONMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}

			elseif($record['program']=="EXPERIMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 1 AND c_level=1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 2 AND c_level=1");
				include 'mydegree.php';
			}
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
	
	function query_MyCourses_minor1_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor1']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			elseif($record['minor1']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			 
			elseif($record['minor1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}
	}
	
	function query_MyCourses_minor2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['minor2'].'">'.$record['minor2'].'</option>';
		}
	}
	
	function query_MyCourses_minor2_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor2']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			elseif($record['minor2']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			 
			elseif($record['minor2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}
	}

	function major1level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM electronicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM electronicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM energyphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM energyphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM genphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM genphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code,creditnum FROM materialssciencemajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code,creditnum FROM materialssciencemajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

		}
	}

	function major2level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major2']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';

			}

			elseif($record['major2']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				
			}
			
			elseif($record['major2']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			 
			elseif($record['major2']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['major2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

		}
	}

	function minor1level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor1']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';

			}

			elseif($record['minor1']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			 
			elseif($record['minor1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

		}
	}

	function minor2level2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor2']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';

			}

			elseif($record['minor2']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			 
			elseif($record['minor2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

		}
	}

	function programlevel2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['program']=="INFORMATION TECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}

			elseif($record['program']=="COMPUTER STUDIES")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}	

			elseif($record['program']=="COMPUTER SYSTEMS ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}	

			elseif($record['program']=="PHYSICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}	

			elseif($record['program']=="ACTUARIAL SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}	

			elseif($record['program']=="MATHEMATICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}

			elseif($record['program']=="BIOLOGY WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}

			elseif($record['program']=="ENVIRONMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}

			elseif($record['program']=="EXPERIMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 1 AND c_level=2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 2 AND c_level=2");
				include 'mydegree.php';
			}
		}
	}
	
	function major1level3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM biochem3 WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM biochem3 WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM biotech WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM biotech WHERE semester = 2 AND c_level = 3");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM microb WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM microb WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			 
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

		}
	}

	function programlevel3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['program']=="INFORMATION TECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM it WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['program']=="COMPUTER STUDIES")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compstudies WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}	

			elseif($record['program']=="COMPUTER SYSTEMS ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM compeng WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}	

			elseif($record['program']=="PHYSICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM physicsdept WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}	

			elseif($record['program']=="ACTUARIAL SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM actsci WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}	

			elseif($record['program']=="MATHEMATICS WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}

			elseif($record['program']=="BIOLOGY WITH EDUCATION")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}

			elseif($record['program']=="ENVIRONMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirobio WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}

			elseif($record['program']=="EXPERIMENTAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 1 AND c_level=3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM exbio WHERE semester = 2 AND c_level=3");
				include 'mydegree.php';
			}
		}
	}

	function major2level3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major2']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';

			}

			elseif($record['major2']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM biochem3 WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM biochem3 WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM biotech WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM biotech WHERE semester = 2 AND c_level = 3");
				
			}
			
			elseif($record['major2']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM microb WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM microb WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM appchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM software WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologymajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialssciencemajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			 
			elseif($record['major2']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmodel WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM horti WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['major2']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM marinebiomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['major2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecomajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

		}
	}

	function minor1level3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor1']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';

			}

			elseif($record['minor1']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			 
			elseif($record['minor1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

		}
	}

	function minor2level3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['minor2']=="FOOD PROCESSING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';

			}

			elseif($record['minor2']=="INDUSTRIAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genchemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM envirochemminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM foodchemmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geologyminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM electronicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM energyphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM genphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM materialsscienceminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medicalphysicsminor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			
			elseif($record['minor2']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathmajor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}
			 
			elseif($record['minor2']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM animalbiominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM plantbiominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

			elseif($record['minor2']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 1 AND c_level = 3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM freshecominor WHERE semester = 2 AND c_level = 3");
				include 'mydegree.php';
			}

		}
	}

	function electiveslevel1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1  WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}

		
	}
	
	function electiveslevel2()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =1 AND c_level =2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =2 AND c_level =2");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1  WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =1 AND c_level =2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =2 AND c_level =2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}

		
	}

	function electiveslevel3()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			if($record['major1']=="COMPUTER SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =1 AND c_level =3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =2 AND c_level =3");
				include 'mydegree.php';

			}

			elseif($record['major1']=="BIOCHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1  WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="BIOTECHNOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				
			}
			
			elseif($record['major1']=="MICROBIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM mathlevel1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MOLECULAR BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM medsci WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="APPLIED CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="GENERAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ENVIRONMENTAL CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="FOOD CHEMISTRY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="SOFTWARE ENGINEERING")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =1 AND c_level =3");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM courses WHERE c_code LIKE  'INFO%' AND semester =2 AND c_level =3");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOGRAPHY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GEOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM geoelect1 WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ELECTRONICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 2");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 2");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="ENERGY AND ENVIRONMENTAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="GENERAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATERIALS SCIENCE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MEDICAL PHYSICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MATHEMATICS AND MODELLING PROCESSES(DOUBLE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="ANIMAL BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="PLANT BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="HORTICULTURE")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}
			
			elseif($record['major1']=="MARINE BIOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

			elseif($record['major1']=="TERRESTRIAL AND FRESHWATER ECOLOGY")
			{
				$myData2 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 1 AND c_level = 1");
				$myData3 = mysql_query("SELECT c_name, c_code, creditnum FROM computerscience WHERE semester = 2 AND c_level = 1");
				include 'mydegree.php';
			}

		}

		
	}
	// Converts an array of ints to string in format "x,y,...,z"
	//  for storing interest id#'s for each student (if needed)
	function serialize_interests($arr_interests){
		$s = "";
		foreach($arr_interests as $value){
			$s = $s.$value.",";
		}
		//strip last ','
		$s = chop($s, ",");
		return $s;
	}
	
	// Converts a string of format "x,y,...,z" to an array
	//  for retrieving serialized interest id# values
	function parse_interests($str_interest){
		return explode(",", $str_interest);
	}
?>	