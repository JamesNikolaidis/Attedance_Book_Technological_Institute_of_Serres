<?php

include("connection.php");

$lab_key=$_POST["lab_key"];
$aem=$_POST["aem"];
$apousies =$_POST['apousies'];

if($lab_key!=NULL && $aem!=NULL && $apousies!=NULL) {
	mysql_query("UPDATE connection_between_students_and_labs SET Lab_key='".$lab_key."', AEM='".$aem."', absence='".$apousies."' WHERE Lab_key='".$Lab_key."' and AEM = '".$aem."'");
	header("Location: view-all-students.php");
}
else header("Location: view-all-students.php");

?>