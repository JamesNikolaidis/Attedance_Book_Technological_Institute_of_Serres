<?php

include("connection.php");

$AEM=$_GET["AEM"];
$students=mysql_query("SELECT * FROM students WHERE AEM='".$AEM."'");
$labs=mysql_query("SELECT * FROM labs ");



echo"

<html>
<head>
<title>Student Profile</title>
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
<meta charset='utf-8' />

<html>
<head>
<title>View-Professor</title>
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
<body style='background-color : grey;'>";

$students1=mysql_fetch_array($students);
echo"
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
<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
<div class='professor_information_form'> 
			<h2>Student Information</h2>	  
	  <form>
	  
			Student ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  id='professor_id_details' class='professors_details_input' value='".$students1["AEM"]."' disabled> </input><br/><br/>
		    Student First Name : <input class='professors_details_input' value='".$students1["firstname"]."' disabled> </input><br/><br/>
		    Student Last Name :<input class='professors_details_input' value='".$students1["lastname"]."' disabled> </input><br/><br/>
		    Student Email  :<input id='professor_email_details' class='professors_details_input' value='".$students1["mail"]."' disabled> </input><br/><br/>
			</form>
		</div><br/>
	

</div>
</div>


";

echo"
		<h2>Students</h2>
		<h3>".$students1["AEM"]."</h3>
		<h3>".$students1["firstname"]."</h3>
		<h3>".$students1["lastname"]."</h3>
		<h3>".$students1["mail"]."</h3>

</body>
</html>";

?>
