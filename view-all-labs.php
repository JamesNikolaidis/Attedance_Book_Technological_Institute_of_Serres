<?php

include("connection.php");

$labs=mysql_query("SELECT * FROM labs ");

echo"

<html>
<head>
<title>View-Labs</title>
<meta charset='utf-8' />

</head>
<body>
";

echo"
		<h2>Labs</h2>
		
<table border=1 style='width=500px;border-collapse:collapse;'>
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
			<td><a href='view-specific-lab.php?Lab_key=".$labs1["Lab_key"]."'>Προβολή</a></td>
			<td><a href='delete_lab.php?id=".$labs1["Lab_key"]."'>Διαγραφή</a></td>
			<td><a href='update-submit_lab.php?id=".$labs1["Lab_key"]."'>Τροποποίηση</a></td>
		</tr>";
}
		
echo"</table>
</body>
</html>";

?>
