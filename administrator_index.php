<?php 
echo "

<html>
	<head>
	<title>Administrator First Page</title>
	<link rel='icon' href='teiser.png'>
	<meta charset='utf-8'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
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
				
					$('#delete_student_div').mouseleave(function(){
						$('#delete_student_div').hide();
						
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
			
			
					$('#delete_professor_div').mouseleave(function(){
						 $('#delete_professor_div').hide();
						
						});
						
						
							$('#view_all_professor_div').mouseover(function(){
						 $('#delete_professor_div').show();
						
						});
						
						
						
						
						
					
					$('#insert_la').mouseover(function(){
						$('#delete_lab_div').show();
						$('#delete_lab_div1').show();
						$('#delete_professor_div').hide();
						$('#delete_student_div').hide();
							$('#view_student_div').hide();
							$('#view_all_professor_div').hide();
						
							});
			
			
					
						$('#delete_lab_div1').mouseover(function()
						{
							$('#delete_lab_div').show(); 

							});
							
							
							$('#delete_lab_div1').mouseleave(function()
							{
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
	<body >
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
	<a href='find_professors.php'><button   class='delete_professor_button'>Delete Professor</button></a>
	</div>
	 <div id='view_all_professor_div'>
	<a href='view-all-professors.php'><button   class='delete_professor_button'>View All Professor</button></a>
	</div>
	
	
	
	
	<div id='administrator_welcome_message'>
	
			<h2>Welcome to Tei Serron Attendance Book web application</h2>
			
			<p>In our site you can you many things like :</p>
			<ol>
			<li>Add new Student , Clicking the Insert Student Button on menu</li>
			<li>Add new Professor , Clicking the Insert Professor Button on menu</li>
			<li>Add new Lab , Clicking the Insert Lab Button on menu</li>
			<li>View all available Students on database and delete him right away (View all Student on menu) or  you can find a student with his AEM and delete him(Delete Student on Menu)</li>
			<li>View all available Professor on database and delete him right away (View all Professor on menu) or  you can find a professor with his AEM and delete him(Delete Professor on Menu)</li>
			<li>You can insert student to labs clicking 'Insert Student to Labs' on the menu . There you will give the Lab's ID from the lab that you want to insert student and click to the students you want and save</li>
			<li>Delete the professor that Teach a lab or delete the cut by absences students from the labs to see the fullness of this specific lab</li>
			<li>Delete Lab</li>
			<li>Log from the system with Log Out button on the menu</li>
			</ol>
	</div>
	</body>
	




</html>



";
?>