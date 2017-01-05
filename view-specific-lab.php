<?php

include("connection.php");

$Lab_key=$_GET["lab_id"];
$labs=mysql_query("SELECT * FROM labs WHERE Lab_key ='".$Lab_key."'");
$FindProfessorfromLabs = mysql_query("SELECT Professor_key FROM connection_between_professor_and_labs WHERE Lab_key='".$Lab_key."'");
$findProfessor2 = mysql_fetch_array($FindProfessorfromLabs);
$findProfessor = mysql_query("SELECT * FROM professors WHERE Professor_key='".$findProfessor2["Professor_key"]."'");

echo"

<html>
<head>
<title>View Specific Lab</title>
<meta charset='utf-8' />

</head>
<body>
";
$labs1=mysql_fetch_array($labs);
echo"
		<h2 style='text-decoration : underline;' >Lab  Details</h2>	
		<h3>Lab Key : ".$labs1["Lab_key"]."</h2>
		<h3>Lab's Lesson Name : ".$labs1["lesson_name"]."</h3>
		<h3>Lab's Lesson Hour : ".$labs1["lesson_hour"]."</h3>
		
		<br/>
		<br/>";
$findProfessor1 = mysql_fetch_array($findProfessor);
echo"	
<h2 style='text-decoration : underline;'>Teaching Professor Details</h2>	
<p>Professor ID : ".$findProfessor1["Professor_key"]."</p>		
<p>Professor First Name : ".$findProfessor1["firstname"]."</p>
<p>Professor Last Name : ".$findProfessor1["lastname"]."</p>
<p>Professor Email : ".$findProfessor1["mail"]."</p><br/><br/>
<h2 style='text-decoration : underline;' >Lab's Students Details</h2>	
<table border=1 style='width=500px;border-collapse:collapse;'>

<tr>
	
	<th>ΑEM</th>
	<th>Όνομα</th>
	<th>Επώνυμο</th>
	<th>Mail</th>
	
</tr>";

$findStudentWithThatLAb = mysql_query("SELECT AEM FROM  connection_between_students_and_labs WHERE Lab_key='".$Lab_key."'");
while ($test=mysql_fetch_array($findStudentWithThatLAb)){
	$findStudents= mysql_query("SELECT * FROM students WHERE AEM='".$test["AEM"]."'");
		
		while($new_test = mysql_fetch_array($findStudents) ){
	
	echo"<tr>
			";
			echo"
			<td style='padding:30px;'>".$new_test["AEM"]."</td>
			";
			echo"
			
			<td>".$new_test["firstname"]."</td>
			<td>".$new_test["lastname"]."</td>
			<td>".$new_test["mail"]."</td>
			</tr>";
			}
}
		
echo"</table>



</body>
</html>";

?>
