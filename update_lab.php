<?php

include("connection.php");

$lesson_name=$_POST["lesson_name"];
$lesson_hour=$_POST["lesson_hour"];

$lab_id=$_POST["id"];

if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("UPDATE labs SET lesson_name='".$lesson_name."', lesson_hour='".$lesson_hour."' WHERE Lab_key='".$lab_id."'");
	header("Location: index.php?message=successupdate");
}
else header("Location: index.php?message=incomplete");

?>