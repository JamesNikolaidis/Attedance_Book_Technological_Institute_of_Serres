<?php
	error_reporting(0);
	include("connection.php");






echo "


<html>
	<head>
		<title>Tei Serron : Attendance Book</title>
		<link rel='icon' href='Logo_teiser.ico'>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<style>
	
	
	
	
	</style>
	
	<script>
			$(document).ready(function(){
						$('#admin_sign_in').hide();
						$('#professor_sign_in').hide();
						$('#student_sign_in').hide();
						
						
							
							
						";
						
						
						include("connection.php");
						$admin_email=$_POST["admin_email"];
						$admin_pass=$_POST["admin_pass"];
						$professor_id=$_POST["professor_id"];
						$professor_pass=$_POST["professor_pass"];
						$student_aem=$_POST["student_aem"];
						$student_pass=$_POST["student_pass"];

		
					if(isset($_POST['adminlogin']))
						{
						if($admin_email='admin' && $admin_pass=='admin' )
								{
							
						
									 header('Location: administrator_index.php?');

							
								}
						}	
						
						if(isset($_POST['student_login'])){
				
							$key = 3777;
							$students=mysql_query("SELECT * FROM students WHERE AEM ='".$student_aem."'");
							$students1=mysql_fetch_array($students);
						
							if($students1["AEM"]==$student_aem  && $students1["password"]==$student_pass){
									echo "alert(".$students1["AEM"].");";
									header('Location: index_student.php?AEM='.$students1["AEM"].'');
									//$.get('index_student.php',{AEM:".$student_aem."});

							}
							
							
							}
							
							if(isset($_POST['professor_login'])){
								
							$professors=mysql_query("SELECT * FROM professors WHERE Professor_key ='".$professor_id."'");
							$professors1=mysql_fetch_array($professors);
							if($professors1["Professor_key"]==$professor_id  && $professors1["password"]==$professor_pass){
								header('Location: index_professor.php?professor_id='.$professors1["Professor_key"].'');

								

								
								
							}
							
							
							}
							
						echo "	
							
						
						
						
						
						
						$('#administrator_field').click(function(){
						$('#button_choose').hide();
								$('#admin_sign_in').show(1000,function(){
								$('#admin_sign_in').animate({bottom: '-220px'},500);
								
								});
						});
						$('#Professor_field').click(function(){
							
							$('#button_choose').hide();
								$('#professor_sign_in').show(1000,function(){
								$('#professor_sign_in').animate({bottom: '-220px'},500);
								
								});
						
						});
						$('#Student_field').click(function(){
						$('#button_choose').hide();
								$('#student_sign_in').show(1000,function(){
								
								$('#student_sign_in').animate({bottom: '-220px'},500);
								
								});
						});
			
			
						
			
			
			
			
			
			
			
			});
		
	</script>
	
	
	</head>
	<body style = 'background-color : #B0B0B0 ; text-align : center;'>
	
			<div class='div_design' id='admin_sign_in'>
				<form  class='form_design' action='index.php' method='POST'>
							<p>Administrator Information For Sign in</p>
					<p><span>Email:</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' class='input_design' id='admin_email' name='admin_email' placeholder='example@emailprovider.com'/></p><br/>
					<p><span>Password:</span>  <input class='input_design' type='password' id='admin_pass' name='admin_pass'/></p><br/>
					<input type='submit' name='adminlogin' id='admin_pass_check' value='Admin Sign In' class='admin_selected_btn'><br/>
					<br/><br/>
					</form>
			</div>
			
			
			<div class='div_design' id='professor_sign_in'>
				<form  class='form_design' action='index.php' method='POST'>
							<p>Professor Information For Sign in</p>
					<p><span>ID:</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' class='input_design' id='professor_id' name='professor_id' placeholder='example@emailprovider.com'/></p><br/>
					<p><span>Password:</span>  <input class='input_design' type='password' id='professor_pass' name='professor_pass'/></p><br/>
					<input type='submit' name='professor_login' id='professor_pass_check' value='Professor Sign In'class='professor_selected_btn'><br/><br/><br/>
					</form>
			</div>
			
			<div class='div_design' id='student_sign_in'>
				<form  class='form_design' action='index.php' method='POST'>
							<p>Student Information For Sign in</p>
					<p><span>AEM:</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' class='input_design' id='student_aem' name='student_aem' placeholder='example@emailprovider.com'/></p><br/>
					<p><span>Password:</span>  <input class='input_design' type='password' id='student_pass' name='student_pass'/></p><br/>
					<input type='submit' name='student_login' id='student_pass_check' value='Student Sign In' class='student_selected_btn'><br/><br/><br/>
					</form>
			</div>
			
			
			
			
			
			
			
			<div id='button_choose'>
				<img id='teiser_ico' src='teiser.png'/><br/><br/>
			    <img src='admin.png'/><a href='#'><button id='administrator_field'>Administrator Sign In</button><a><br/><br/>
			
			
				<img src='teacher.png'/><a href='#'><button id='Professor_field'>Professor Sign In</button></a><br/><br/>
			
			
				<img src='student.png'/><a href='#'><button id='Student_field' >Student Sign In</button></a>
			
			</div>
	
	
	
	
	
	
	</body>







</html>


";

?>