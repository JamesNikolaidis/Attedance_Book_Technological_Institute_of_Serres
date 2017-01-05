<?php

error_reporting(0);
$Student1=$_GET["AEM"];


echo "

<html>
<head>
<title>Student Home Page</title>
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
<meta charset='utf-8' />
</head>
<body>
<div id='dist_menu'>
		<a href='index_student.php'>
		<button class='Dist_menu_buttons' id='first_page'>First Page</button></a>
		<a href='view-student.php?AEM=".$Student1."'>
		<button  id='insert_stu' class='Dist_menu_buttons'>View Labs</button></a>
		<a href='student_profile_view.php?AEM=".$Student1."'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Profile</button></a>
		<a href='index.php'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Log Out</button></a>
</div>
<div id='professor_id_div'>
		<h1 style='margin-left : 40%; margin-top:100px;'> Welcome Student</h1><br/><br/>
		<p style='margin-left : 20%;font-family:verdana;font-size:15px; '>Welcome to our Institute site. Enjoy your navigation to your profile , using the menu on top of the page<br/>If you have any 
		question please send us an email.</p>
		

</div>


</body>
</html>
";
?>