<?php

include("connection.php");

$professor_key=$_POST['professor_key'];
$labKey=$_POST['labKey'];


if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("INSERT INTO connection_between_students_and_labs (Lab_key,lastname,mail) VALUES ('".$labkey."', '".$professor_key."')");
	header("Location: index.php?message=successinsert");
}
else header("Location: index.php?message=incomplete");

?>