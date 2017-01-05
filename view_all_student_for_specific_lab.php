<?php

include("connection.php");
$Labkey = $_GET['lab_id'];
$professor_key = $_GET['key'];
$counter = 0;
echo"

<html>
<head>
<title>View All Students</title>
<link rel='icon' href='teiser.png'>
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

#save_absence_button{
	margin-left : 100%;
	border-style : solid;
	border-radius : 4px;
	padding : 20px;
	width  : 200px;
	margin-top : 10%;
	background  : transparent;
	
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
	<th>Absences</th>
	<th>Check to Insert Absence</th>
	<th colspan=3></th>
</tr>";



$findStudentByLabId = mysql_query("SELECT AEM FROM connection_between_students_and_labs WHERE Lab_key='".$Labkey."'");


while($findStudentByLabId1=mysql_fetch_array($findStudentByLabId)){
	$findabsence = mysql_query("SELECT absence FROM connection_between_students_and_labs WHERE AEM='".$findStudentByLabId1["AEM"]."' AND Lab_key='".$Labkey."'");
	$findabsence_row = mysql_fetch_array($findabsence);
$students=mysql_query("SELECT * FROM students WHERE AEM='".$findStudentByLabId1["AEM"]."'");
	
while($students1=mysql_fetch_array($students)) {
	if($findabsence_row["absence"]==3){
	echo"<tr style='background-color :rgb(223, 0, 0);'>
		<td >".$students1["AEM"]."</td>
		<td >".$students1["firstname"]."</td>
		<td >".$students1["lastname"]."</td>
		<td >".$students1["mail"]."</td>
		<td >".$findabsence_row["absence"]."</td>
		<td style='padding :30px;'><input id='insert_student".$counter."' value='".$students1["AEM"]."'type='checkbox' name='check_user_for_insert_to_labs' disabled></td>
		<td><a href='just_student_profile.php?AEM=".$students1["AEM"]."'>View</a></td>
		<td><a href='delete_student_or_professor_from_lab_for_teacher.php?AEM=".$students1["AEM"]."&lab_id=".$Labkey." &professor_id=".$professor_key."'>Delete</a></td>
		<td><a href='update-submit_student.php?id=".$students1["AEM"]."'>Edit</a></td>
	</tr>";
	}else{
		echo"<tr>
		<td>".$students1["AEM"]."</td>
		<td>".$students1["firstname"]."</td>
		<td>".$students1["lastname"]."</td>
		<td>".$students1["mail"]."</td>
		<td>".$findabsence_row["absence"]."</td>
		<td style='padding :30px;'><input id='insert_student".$counter."' value='".$students1["AEM"]."'type='checkbox' name='check_user_for_insert_to_labs'></td>
		<td><a href='just_student_profile.php?AEM=".$students1["AEM"]."'>View</a></td>
		<td><a href='delete_student_or_professor_from_lab_for_teacher.php?AEM=".$students1["AEM"]."&lab_id=".$Labkey."&professor_id=".$professor_key."'>Delete</a></td>
		<td><a href='update_student_or_professor_page.php?Key=".$students1["AEM"]."'>Edit</a></td>
	</tr>";
		
	}
	$counter++;

}
}
echo"</table>
<button id='save_absence_button'>Save Attendance Book</button>
</div>
<script>

	
			$('#save_absence_button').click(function(){
				var table = new Array(30);
				var pointer = 0;
				for(var i=0; i!=".$counter."; i++){
					if ($('#insert_student'+i).is(':checked')){
					
						table[pointer]=$('#insert_student'+i).val();
						pointer++;
						
					} 
						
						
						
							
				}
				
				$.get('abcence_book.php',{data1: table , lab_key : ".$Labkey."}, function(data){
					
					  location.reload();
					  
						});
				
				
			});
			
			

</script>
</body>
</html>";

?>