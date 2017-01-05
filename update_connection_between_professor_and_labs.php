<?php

include("connection.php");

$lab_key=$_POST["lab_key"];
$professor_id=$_POST["professor_id"];


if($lab_key!=NULL && $professor_id!=NULL) {
	mysql_query("UPDATE connection_between_professor_and_labs SET Lab_key='".$lab_key."', Professor_key='".$professor_id."' WHERE Lab_key='".$Lab_key."' and Professor_key = '".$professor_id."'");
	header("Location: index.php?message=successupdate");
}
else header("Location: index.php?message=incomplete");

?>