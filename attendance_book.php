<?php
include("connection.php");

$Professor_key=$_GET["professor_id"];

echo"

<html>
	<head>
		<title>Attendance Book</title>
		<meta charset='utf-8' />
		<link rel='icon' href='teiser.png'>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		
	</head>

	<body>
	
	<div id='dist_menu'>
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
<div>
<p>Choose your Lab.</p>
<select name='select_lab1' id='select_lab'>";
$counter = 0;
$professor_labs=mysql_query("SELECT Lab_key FROM connection_between_professor_and_labs WHERE Professor_key='".$Professor_key."'");

while($professor_labs_row=mysql_fetch_array($professor_labs)){
	$findLabdata = mysql_query("SELECT * from labs WHERE Lab_key='".$professor_labs_row["Lab_key"]."'");
	while($findLabdata_row=mysql_fetch_array($findLabdata) ){
	echo"
	 <option id='Lab_ID".$counter."' value='".$findLabdata_row["Lab_key"]."'>".$findLabdata_row["lesson_name"]."</option>";
	
	echo"
	 $('<script> $('#Lab_ID".$counter."').click(function()
	 {
		
	 $('#div1').load('view_all_student_for_specific_lab.php?lab_id=".$findLabdata_row["Lab_key"]."&key=".$Professor_key."');
	 
	 });</script>').appendTo(document.body);";
	
        	$counter++;
	}
	
	}	
		echo"	
			</select> 
		</div>
		<div id='div1'>
			
		</div>
		
	</body>
</html>
";
?>