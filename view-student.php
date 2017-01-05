<?php

include("connection.php");

$AEM=$_GET["AEM"];
$students=mysql_query("SELECT * FROM students WHERE AEM='".$AEM."'");
$labs=mysql_query("SELECT * FROM labs ");



echo"

<html>
<head>
<title>Student's Labs</title>
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
<meta charset='utf-8' />
<style>

h2{
	text-align  : center;
	font-family : verdana;
	font-style  : italic;
	
	
}
p{
	font-family : verdana;
	font-style  : italic;
	
	
}




</style>
</head>
<body style='background-color : grey;'>
<div id='dist_menu'>
		<a href='index_student.php?AEM=".$AEM."'>
		<button class='Dist_menu_buttons' id='first_page'>First Page</button></a>
		<a href='view-student.php?AEM=".$AEM."'>
		<button  id='insert_stu' class='Dist_menu_buttons'>View Labs</button></a>
		<a href='student_profile_view.php?AEM=".$AEM."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Profile</button></a>
		<a href='index.php'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Log Out</button></a>
</div>
";
echo"
		
<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 20px;' >
		<div class='professor_information_form1'>	
	<h2>Your  Labs</h2>
<table border=1 style='margin-left :55px;  border-width :5px; border-collapse:collapse;'>
<tr>
	
	<th style='padding : 20px;'>Lesson</th>
	<th style='padding : 20px;' >Absences</th>
	
</tr>";

$studentLabsCount=mysql_query("SELECT Lab_key FROM connection_between_students_and_labs WHERE AEM='".$AEM."'");
while ($test=mysql_fetch_array($studentLabsCount)){
	
	echo"<tr>
			";
			$lesson_name=mysql_query("SELECT lesson_name FROM labs WHERE Lab_key='".$test["Lab_key"]."'");
			$lesson_name_row=mysql_fetch_array($lesson_name);
			echo"
			<td style='padding:30px;'>".$lesson_name_row["lesson_name"]."</td>
			";
			$test3=mysql_query("SELECT absence FROM connection_between_students_and_labs WHERE AEM='".$AEM."' AND Lab_key='".$test["Lab_key"]."'");
			$labs1=mysql_fetch_array($test3);
			
			echo"
			
			<td style='padding : 20px;'>".$labs1["absence"]."</td>
			</tr>";
}
		
echo"</table>
</div>
</div>
</body>
</html>";

?>
