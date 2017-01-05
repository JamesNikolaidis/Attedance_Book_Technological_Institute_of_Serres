<html>
	<head>
			<title>Insert Lab</title>
			<link rel='icon' href=''>
			<meta charset='utf-8'>
			<link rel='icon' href='teiser.png'>
			<link rel='stylesheet' type='text/css' href='style.css'>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<style>
	
		#name_div,#hour_div,#Teacher_div{
			
			margin-top : 60px;
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
	
	<body style='background-color : grey;'>
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
	
	

	
			<div id='general_div'>
				<form action='insert-submit_labs.php' method='POST' id='insert_lab_form'>
				
				<div id='key_div'>
				<p class ='lab_page'>Lab Key       <input name='lab_key' id='lab_key_input' placeholder='Lab key' type='text'/></p>
				</div>
				<div id='name_div' >
				<p class ='lab_page'>Lab Name      <input name='lab_name' id='lab_name_input' placeholder='lab Name' type='text'/></p>
				</div>
				<div  id='hour_div'>
				<p class ='lab_page' >Lab Hour     <input name='lab_hour' id='lab_hour_input' placeholder='date time hour' type='text'/></p>
				</div>
				<div  id='Teacher_div'>
				<p class ='lab_page'>Τeaching Μanager Id    <input name='teaching_manager' id='teacher_input' placeholder='ex 1' type='text'/></p>
				</div>
				
				<input type='submit' value='Save Lab' id='save_lab_button'/>
	
		</div>
	
	
	
	
	
	</body>





</html>