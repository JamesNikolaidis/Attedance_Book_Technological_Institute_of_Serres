<?php

include("connection.php");
$AEM = $_POST['student_aem'];
$firstname=$_POST['student_name'];
$lastname=$_POST['student_lastname'];
$mail = $_POST['student_email'];
$password = $_POST['student_password'];

if($firstname!=NULL && $lastname!=NULL) {
	mysql_query("INSERT INTO students (AEM,password,firstname,lastname,mail) VALUES ('".$AEM."','".$password."','".$firstname."', '".$lastname."','".$mail."')");
	header("Location: administrator_index.php?message=successinsert");
}
else header("Location: administrator_index.php?message=incomplete");

?>