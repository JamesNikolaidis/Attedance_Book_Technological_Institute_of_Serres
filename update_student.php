<?php

include("connection.php");

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$mail =$_POST["mail"];
$AEM=$_POST["id"];

if($firstname!=NULL && $lastname!=NULL && $mail!=NULL) {
	mysql_query("UPDATE students SET firstname='".$firstname."', lastname='".$lastname."' , mail='".$mail."' WHERE AEM='".$AEM."'");
	Header("Location: view-all-students.php");
}
else { Header("Location: administrator_index.php?message=incomplete"); }

?>
