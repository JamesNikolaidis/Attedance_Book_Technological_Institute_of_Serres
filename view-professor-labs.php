<?php

include("connection.php");

$Professor_key=$_GET["professor_id"];


//$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$Professor_key."'");
$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$Professor_key."'");
$professor_labs=mysql_query("SELECT Lab_key FROM connection_between_professor_and_labs WHERE Professor_key='".$Professor_key."'");

echo"

<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
<link rel='icon' href='teiser.png'>
<title>View-Professor</title>
<meta charset='utf-8' />
<style>


h2{
	text-align  : center;
	font-family : verdana;
	font-style  : italic;
	
	
}



</style>
</head>
<body style='background-color : grey;'>
";
$Professors1=mysql_fetch_array($Professors);
echo"<div id='dist_menu'>
		<a href='index_professor.php?professor_id=".$Professor_key."'>
		<button class='Dist_menu_buttons' id='first_page'>First Page</button></a>
		<a href='view-professor-labs.php?professor_id=".$Professor_key."'>
		<button  id='insert_stu' class='Dist_menu_buttons'>View Labs</button></a>
		<a href='professor_profile_view.php?professor_id=".$Professor_key."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Profile</button></a>
		<a href='attendance_book.php?professor_id=".$Professor_key."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Αttendance Book</button></a>
		<a href='index.php'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Log Out</button></a>
</div>
<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
    
	
<div class='professor_information_form1'>	
	<h2>Professor Labs</h2>
<table border=1 style='margin-left :-15px;  border-width :5px; border-collapse:collapse;'>
<tr>
	
	<th style='padding:30px;'>Lesson</th>
	<th style='padding:30px;'>Hour</th>
	<th style='padding:30px;' >Προβολή</th>
	
</tr>";

while ($test=mysql_fetch_array($professor_labs)){
	
	$professor_lessons=mysql_query("SELECT * FROM labs WHERE Lab_key='".$test["Lab_key"]."'");
	
	while($test1=mysql_fetch_array($professor_lessons)){

	    echo"<tr >
				<td style='padding:40px;height  :35px;'>".$test1["lesson_name"]."</td>
				<td style='padding:40px;height  :35px; '>".$test1["lesson_hour"]."</td>
				<td style='padding:40px;height  :35px; '><a href='view-specific-lab.php?lab_id=".$test1["Lab_key"]."'>Προβολή</a></td>
			</tr>";
		}
}

echo"</table>
</div>
</div>
</body>
</html>";

?>
