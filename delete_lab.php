<?php

include("connection.php");

$id=$_GET["id"];

mysql_query("DELETE FROM labs WHERE Lab_Key='".$id."'");
mysql_query("DELETE FROM connection_between_students_and_labs WHERE Lab_Key='".$id."'");
mysql_query("DELETE FROM connection_between_professor_and_labs WHERE Lab_Key='".$id."'");

header("Location: index.php");

?>