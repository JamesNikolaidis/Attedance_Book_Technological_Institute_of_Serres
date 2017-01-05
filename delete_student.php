<?php

include("connection.php");

$id=$_GET["AEM"];

mysql_query("DELETE FROM students WHERE AEM='".$id."'");

header('Location: administrator_index.php');

?>
