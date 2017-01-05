<?php

include("connection.php");

echo"

<html>
<head>
<title>View All Professors</title>
<meta charset='utf-8' />
<link rel='icon' href='teiser.png'>
			<link rel='stylesheet' type='text/css' href='style.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<style>
	
	th , td{
	
	padding :20px;
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
p{
	font-family : verdana;
	font-style  : italic;
	
	
}
	
	</style>
	<script>
		$(document).ready(function(){
			
			
		$('#delete_professor_div').hide();
			$('#view_all_professor_div').hide();
			$('#delete_student_div').hide();
			$('#delete_lab_div').hide();
			$('#delete_lab_div1').hide();
			$('#view_student_div').hide();
			
			
		
			
			
				$('#insert_stu').mouseover(function(){
						$('#delete_student_div').show();
						$('#delete_professor_div').hide();
						$('#delete_lab_div').hide();
						$('#delete_lab_div1').hide();
						$('#view_student_div').show();
						$('#view_all_professor_div').hide();
				});
				
				
				
					$('#view_student_div').mouseleave(function(){
						$('#delete_student_div').hide();
						$('#view_student_div').hide();
						
						});
					
					$('#view_student_div').mouseover(function(){
						$('#delete_student_div').show();
						
						});
					
					$('#insert_pr').mouseover(function(){
						$('#delete_professor_div').show();
						$('#delete_lab_div').hide();
						$('#delete_student_div').hide();
						$('#delete_lab_div1').hide();
						$('#view_student_div').hide();
						$('#view_all_professor_div').show();
							});
			
			
					
						
						
							$('#view_all_professor_div').mouseleave(function(){
						 $('#delete_professor_div').hide();
						 $('#view_all_professor_div').hide();
						
						});
						
						
						
						
						
					
					$('#insert_la').mouseover(function(){
						$('#delete_lab_div').show();
						$('#delete_lab_div1').show();
						$('#delete_professor_div').hide();
						$('#delete_student_div').hide();
							$('#view_student_div').hide();
							$('#view_all_professor_div').hide();
						
							});
			
			
					$('#delete_lab_div1').mouseleave(function(){
						$('#delete_lab_div').hide(); 
						$('#delete_lab_div1').hide();
						});
					
					
					
						$('#insert_student_to_lab').mouseover(function(){
						$('#delete_professor_div').hide();
						$('#delete_lab_div').hide();
						$('#delete_student_div').hide();
						$('#delete_lab_div1').hide();
							$('#view_student_div').hide();
							});
					
					
					
					
					
					
					
					
			
		});
	
	</script>
</head>
<body>
<div id='dist_menu'>
		<a href='administrator_index.php'><button class='Dist_menu_buttons' id='first_page'>First Page</button></a><a href='insert_student_page.php'><button  id='insert_stu' class='Dist_menu_buttons'>Insert Student</button></a><a href='insert_professor_page.php'><button  id='insert_pr'  class='Dist_menu_buttons'>Insert Professor</button></a><a href='insert_lab_page.php'><button  id='insert_la' class='Dist_menu_buttons'>Insert Lab</button></a>
		<a href='insert_student_to_labs.php'><button  id='insert_student_to_lab' class='Dist_menu_buttons'>Insert Students To Lab</button></a>
		<a href='index.php'>
		<button  id='insert_pr'  class='Dist_menu_buttons'>Log Out</button></a>
			
		
		</div>
	
	<div id='delete_lab_div'>
	<a href='find_labs.php'><button   class='delete_professor_button'>Delete Lab</button></a>
	</div>
	<div id='delete_lab_div1'>
	<a href='remove_professor_or_student_from_lab_page.php'><button   class='delete_professor_button'>Remove Professor or Student From Lab</button></a>
	</div>
	
	
	
	<div id='delete_student_div'>
	<a href='find_students.php'><button   class='delete_professor_button'>Delete Student</button></a>
	</div>
	<div id='view_student_div'>
	<a href='view-all-students.php'><button   class='delete_professor_button'>View all Students</button></a>
	</div>
	
	<div id='delete_professor_div'>
	<a href='find_labs.php'><button   class='delete_professor_button'>Delete Professor</button></a>
	</div>
	<div id='view_all_professor_div'>
	<a href='view-all-professors.php'><button   class='delete_professor_button'>View All Professor</button></a>
	</div>
	
	<h2>Όλοι οι Καθηγητές</h2>
	 <div class='view_all_professors'>


<table border=1 style='margin-left :-15px;  border-width :5px; border-collapse:collapse;'>
<tr>
	<th>ID</th>
	<th>Όνομα</th>
	<th>Επώνυμο</th>
	<th>Mail</th>
	<th colspan=3></th>
</tr>";

$professors=mysql_query("SELECT * FROM professors");

while($professors1=mysql_fetch_array($professors)) {
	echo"<tr>
		<td>".$professors1["Professor_key"]."</td>
		<td>".$professors1["firstname"]."</td>
		<td>".$professors1["lastname"]."</td>
		<td>".$professors1["mail"]."</td>
		<td><a href='just_professor_profile.php?professor_id=".$professors1["Professor_key"]."'>View</a></td>
		<td><a href='delete_professor.php?ID=".$professors1["Professor_key"]."'>Delete</a></td>
		<td><a href='update_student_or_professor_page.php?Key=".$professors1["Professor_key"]."'>Edit</a></td>
	</tr>";
}
echo"</table>
</div>
</body>
</html>";

?>
