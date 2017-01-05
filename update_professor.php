<?php

include("connection.php");

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$mail =$_POST["mail"];
$Professor_key=$_POST["id"];

if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("UPDATE professors SET firstname='".$firstname."', lastname='".$lastname."', mail='".$mail."' WHERE Professor_key='".$Professor_key."'");
	header("Location: index.php?message=successupdate");
}
else header("Location: index.php?message=incomplete");

?>