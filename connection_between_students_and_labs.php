<?php

include("connection.php");

$AEM=$_POST['AEM'];
$labKey=$_POST['labKey'];


if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("INSERT INTO connection_between_students_and_labs (Lab_key,AEM) VALUES ('".$labKey."', '".$AEM."')");
	header("Location: index.php?message=successinsert");
}
else header("Location: index.php?message=incomplete");

?>