<?php

include("connection.php");
$Labkey = $_GET['lab_id'];
$counter = 0;
echo"

<html>
<head>
<meta charset='utf-8' />
<style>
th , td{
	
	padding :20px;
}


.view_all_student_form_spesific_information_form1{
	margin-left : 15%;
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

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script>
		$(document).ready(function(){
		
		
			
			});
			
			
		

		
		
</script>
</head>
<body>

<h2>Όλοι οι Φοιτητές</h2>
<div class='view_all_student_form_spesific_information_form1'>
<table border=1 style='margin-left :-15px;  border-width :5px; border-collapse:collapse;'>
<tr>
	<th>ΑEM</th>
	<th>Όνομα</th>
	<th>Επώνυμο</th>
	<th>Mail</th>
	<th>Check the Student</th>
	<th colspan=4></th>
	
</tr>";



$students=mysql_query("SELECT * FROM students ");
	
while($students1=mysql_fetch_array($students)) {
	
		echo"<tr>
		<td>".$students1["AEM"]."</td>
		<td>".$students1["firstname"]."</td>
		<td>".$students1["lastname"]."</td>
		<td>".$students1["mail"]."</td>
		<td style='padding :30px;'><input id='insert_student".$counter."' value='".$students1["AEM"]."'type='checkbox' name='check_user_for_insert_to_labs'></td>
		<td><a href='student_profile_view.php?AEM=".$students1["AEM"]."'>View</a></td>
		<td><a href='delete_student.php?id=".$students1["AEM"]."'>Delete</a></td>
		<td><a href='update_student_or_professor_page.php?Key=".$students1["AEM"]."'>Edit</a></td>
	</tr>";
		
	$counter++;

}

echo"</table>
<button id='save_student_to_lab_button'>Save Students To Lab</button>
</div>
<script>

	
			$('#save_student_to_lab_button').click(function(){
				var table = new Array(30);
				var pointer = 0;
				for(var i=0; i!=".$counter."; i++){
					if ($('#insert_student'+i).is(':checked')){
					
						table[pointer]=$('#insert_student'+i).val();
						pointer++;
						
					} 
						
						
						
							
				}
				
				$.get('save_student_to_labs.php',{data1: table , lab_key : ".$Labkey."}, function(data){
								 location.reload();
						});
				
				
			});
			
			

</script>
</body>
</html>";

?>