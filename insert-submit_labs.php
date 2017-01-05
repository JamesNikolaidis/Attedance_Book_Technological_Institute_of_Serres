<?php

include("connection.php");
$Lab_Key = $_POST['lab_key'];
$lesson_name=$_POST['lab_name'];
$lesson_hour=$_POST['lab_hour'];
$Teacher_Manager = $_POST['teaching_manager'];

if($lesson_name!=NULL && $lesson_hour!=NULL) {
	mysql_query("INSERT INTO labs (Lab_key,lesson_name,lesson_hour) VALUES ('".$Lab_Key."','".$lesson_name."', '".$lesson_hour."')");
	mysql_query("INSERT INTO connection_between_professor_and_labs  (Professor_key, Lab_key) VALUES ('".$Teacher_Manager."','".$Lab_Key."')  ");
	header("Location: administrator_index.php?message=successinsert");
}
else header("Location: administrator_index.php?message=incomplete");

?>