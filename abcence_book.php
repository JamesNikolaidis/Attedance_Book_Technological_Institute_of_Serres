<?php

include("connection.php");

	$data = $_GET["data1"];
	$Lab_key = $_GET["lab_key"];
	for($i=0; $i!= count($data); $i++){
		 
		$bet = mysql_query("SELECT absence FROM connection_between_students_and_labs WHERE AEM='".$data[$i]."' AND Lab_key='".$Lab_key."'");
		$bet1 = mysql_fetch_array($bet);
		$bet2=$bet1["absence"]+1;
		$Var = mysql_query("UPDATE connection_between_students_and_labs SET absence = '".$bet2."' WHERE AEM='".$data[$i]."' and Lab_key='".$Lab_key."'");
         
		
	  
}

?>
