<?php

include("connection.php");

error_reporting(0);

$professor_key=$_GET["professor_id"];
$AEM=$_GET["AEM"];
$lab_id=$_GET["lab_id"];

if($AEM == NULL)
{
	mysql_query("DELETE FROM connection_between_professor_and_labs WHERE professor_key='".$professor_key."' AND Lab_key='".$lab_id."'");
}else{
	mysql_query("DELETE FROM connection_between_students_and_labs WHERE AEM='".$AEM."' AND Lab_key='".$lab_id."'");
}
header("Location: index_professor.php?professor_id=$professor_key");

?>
