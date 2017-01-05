<?php

include("connection.php");

$id=$_GET["ID"];

mysql_query("DELETE FROM professors WHERE professor_key='".$id."'");

header("Location: view-all-professors.php");

?>