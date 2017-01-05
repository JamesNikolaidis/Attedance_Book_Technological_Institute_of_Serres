<?php

include("connection.php");

$Professor_key=$_GET["professor_id"];
//$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$Professor_key."'");
$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$Professor_key."'");
$professor_labs=mysql_query("SELECT Lab_key FROM connection_between_professor_and_labs WHERE Professor_key='".$Professor_key."'");

echo"

<html>
<head>
<title>View-Professor</title>
<meta charset='utf-8' />

</head>
<body>
";
$Professors1=mysql_fetch_array($Professors);
echo"
<h2>Professors</h2>
        
		<h3>".$Professors1["Professor_key"]."</h3>
		<h3>".$Professors1["firstname"]."</h3>
		<h3>".$Professors1["lastname"]."</h3>
		<h3>".$Professors1["mail"]."</h3>
		
<table border=1 style='width=500px;border-collapse:collapse;'>
<tr>
	
	<th>Lesson</th>
	<th>Hour</th>
	<th>View</th>
	
</tr>";

while ($test=mysql_fetch_array($professor_labs)){
	
	$professor_lessons=mysql_query("SELECT * FROM labs WHERE Lab_key='".$test["Lab_key"]."'");
	
	while($test1=mysql_fetch_array($professor_lessons)){

	    echo"<tr>
				<td style='padding:30px;'>".$test1["lesson_name"]."</td>
				<td>".$test1["lesson_hour"]."</td>
				<td><a href='view-specific-lab.php?lab_id=".$test1["Lab_key"]."'>View</a></td>
			</tr>";
		}
}

echo"</table>
</body>
</html>";

?>
