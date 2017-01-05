<?php
include("connection.php");
	$data = $_GET["data1"];
	$Lab_key = $_GET["lab_key"];

	
	for($i=0; $i!= count($data); $i++){
			$new_var = mysql_query("INSERT INTO connection_between_students_and_labs(Lab_key, AEM , absence) VALUES ('".$Lab_key."','".$data[$i]."','0')");
	}
				header("Location: administrator_index.php");
				
?>
