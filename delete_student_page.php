<?php

include("connection.php");

$AEM=$_GET["AEM"];
$students=mysql_query("SELECT * FROM students WHERE AEM='".$AEM."'");
$labs=mysql_query("SELECT * FROM labs ");



echo"

<html>
<head>
<title>Delete Student</title>
<meta charset='utf-8' />
<link rel='stylesheet' type='text/css' href='style.css'>
<link rel='icon' href='teiser.png'>
<title>View-Professor</title>
<meta charset='utf-8' />
<script>
		$(document).ready(function(){
			
			$('#delete_stu').click(function(){	
				$.get('delete_student.php?AEM=".$AEM."',function(){
					location.reload();
				});
					
					
						
						});
			
			
		});
</script>
</head>
<body style='background-color : grey;'>";

$students1=mysql_fetch_array($students);
echo"

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
						<button style='margin-left : 250px;' id='delete_stu'>Delete Student</button>

</div>
</div>


";

echo"
		

</body>
</html>";

?>
