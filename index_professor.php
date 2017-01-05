<?php 
error_reporting(0);
$Professor_key1=$_GET["professor_id"];


echo"
<html>
<head>
<title>Professor Home Page</title>
<link rel='icon' href='teiser.png'>
<meta charset='utf-8' />
<link rel='stylesheet' type='text/css' href='style.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<style>
	

	
	</style>
	
	
</head>



<body>
<div id='dist_menu'>
<a href='index_professor.php'?>
		<button class='Dist_menu_buttons' id='first_page'>First Page</button></a>
		<a href='view-professor-labs.php?professor_id=".$Professor_key1."'>
		<button  id='insert_stu' class='Dist_menu_buttons'>View Labs</button></a>
		<a href='professor_profile_view.php?professor_id=".$Professor_key1."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Profile</button></a>
		<a href='attendance_book.php?professor_id=".$Professor_key1."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Αttendance Book</button></a>
		<a href='index.php'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Log Out</button></a>
		
		
		
		
		
</div>

<div id='professor_id_div'>
		<h1 style='margin-left : 40%; margin-top:100px;'> Welcome Professor</h1><br/><br/>
		<p style='margin-left : 20%;font-family:verdana;font-size:15px; '>Welcome to our Institute site. Enjoy your navigation to your profile , using the menu on top of the page<br/>If you have any 
		question please send us an email.</p>
		

</div>



</body>
</html>
";
?>