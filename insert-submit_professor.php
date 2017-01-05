<?php

include("connection.php");
$Professor_key = $_POST['professor_id'];
$firstname=$_POST['professor_name'];
$lastname=$_POST['professor_lastname'];
$mail = $_POST['professor_email'];
$password = $_POST['professor_password'];

if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("INSERT INTO professors (professor_key,password, firstname,lastname,mail) VALUES ('".$Professor_key."','".$password ."','".$firstname."', '".$lastname."','".$mail."')");
	header("Location: administrator_index.php?message=successinsert");
}
else header("Location: administrator_index.php");

?>