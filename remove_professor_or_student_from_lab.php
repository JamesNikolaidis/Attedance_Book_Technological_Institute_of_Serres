<?php

include("connection.php");

$Lab_key=$_GET["lab_id"];
$labs=mysql_query("SELECT * FROM labs WHERE Lab_key='".$Lab_key."'");

echo"

<html>
<head>
<meta charset='utf-8' />
	<style>
	
	th , td{
	
	padding :5px;
}


.view_all_professors{
	margin-left : 25%;
	width  :400px;
	padding : 10px;
	border : none ; 
	
	
}

h2{
	text-align  : center;
	font-family : verdana;
	font-style  : italic;
	
	
}
</style>
</head>
<body>
";

echo"
		
	<div class='view_all_professors' >	
	<h2>Remove from labs</h2>
<table border=1 style='margin-left :-15px;  border-width :5px; border-collapse:collapse;'>
<tr>
	<th>Lab_key</th>
	<th>Lesson Name</th>
	<th>Lesson Hour</th>
	<th colspan=3></th>	
</tr>";


while ($labs1=mysql_fetch_array($labs)){
	
	echo"<tr>
			<td>".$labs1["Lab_key"]."</td>
			<td>".$labs1["lesson_name"]."</td>
			<td>".$labs1["lesson_hour"]."</td>
			<td colspan=3></td>
		</tr>";
}
echo"
<tr>
	<th>Professor Key</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Mail</th>
	<th colspan=2></th>	
</tr>";
$Professors=mysql_query("SELECT Professor_key FROM connection_between_professor_and_labs WHERE Lab_key='".$Lab_key."'");
while($fetch=mysql_fetch_array($Professors)){
$Professors1=mysql_query("SELECT * FROM professors WHERE Professor_key='".$fetch["Professor_key"]."'");
while ($Professors2=mysql_fetch_array($Professors1)){

	echo"<tr>
			<td>".$Professors2["Professor_key"]."</td>
			<td>".$Professors2["firstname"]."</td>
			<td>".$Professors2["lastname"]."</td>
			<td>".$Professors2["mail"]."</td>
			<td><a href='view-professor.php?professor_id=".$Professors2["Professor_key"]."'>View</a></td>
			<td><a href='delete_student_or_professor_from_lab.php?professor_id=".$Professors2["Professor_key"]."&lab_id=".$Lab_key."'>Delete</a></td>
		</tr>";
}
}
echo"
<tr>
	<th>AEM</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Mail</th>
	<th colspan=2></th>	
</tr>";
$students=mysql_query("SELECT AEM FROM connection_between_students_and_labs WHERE Lab_key='".$Lab_key."'");
while($fetch1=mysql_fetch_array($students)){
	$students1=mysql_query("SELECT * FROM students WHERE AEM='".$fetch1["AEM"]."'");
while ($students2=mysql_fetch_array($students1)){
	
	echo"<tr>
			<td>".$students2["AEM"]."</td>
			<td>".$students2["firstname"]."</td>
			<td>".$students2["lastname"]."</td>
			<td>".$students2["mail"]."</td>
			<td><a href='view-student.php?AEM=".$students2["AEM"]."'>View</a></td>
			<td><a href='delete_student_or_professor_from_lab.php?AEM=".$students2["AEM"]."&lab_id=".$Lab_key."'>Delete</a></td>
		</tr>";
}
}
echo"
		
</table>
</div>
</body>
</html>";

?>
