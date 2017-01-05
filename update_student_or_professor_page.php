<?php

include("connection.php");

$KeyInput=$_GET["Key"];

$students=mysql_query("SELECT * FROM students WHERE AEM='".$KeyInput."'");
$professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$KeyInput."'");





echo"

<html>
<head>
<title>Edit Student Or Professor Profile</title>
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
<meta charset='utf-8' />
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

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
<script>
		$(document).ready(function(){
			
				$('#update').click(function(){
					
				
					$.post('update_student.php', { id : $('#id_details').val() , firstname : $('#name_details').val() , lastname : $('#last_details').val() , mail : $('#email_details').val()  });
								
							});
  
			$('#update_for_professors').click(function(){
							
				
					$.post('update_professor.php', { id : $('#id_details_prof').val() , firstname : $('#name_details_prof').val() , lastname : $('#last_details_prof').val() , mail : $('#email_details_prof').val()  });
								
							});
							
		});

</script>
</head>
<body style='background-color : grey;'>";
$students1=mysql_fetch_array($students);
if($students1!=null){

echo"

<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
<div class='professor_information_form'> 
			<h2>Student Information</h2>	  
	  <form>
	  
			Student ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  id='id_details' disabled class='professors_details_input' value='".$students1["AEM"]."' > </input><br/><br/>
		    Student First Name : <input id='name_details' class='professors_details_input' value='".$students1["firstname"]."' > </input><br/><br/>
		    Student Last Name :<input  id='last_details' class='professors_details_input' value='".$students1["lastname"]."' > </input><br/><br/>
		    Student Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<input  id='email_details' id='professor_email_details' class='professors_details_input' value='".$students1["mail"]."' > </input><br/><br/>
			</form>
		</div><br/>
				<button  style='margin-left : 250px;' id='update'>Update</button>
			
</div>
</div>


";

}else{
	$professors1=mysql_fetch_array($professors);
	echo"

<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
<div class='professor_information_form'> 
			<h2>Professor Information</h2>	  
	  <form>
	  
			Professor ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  id='id_details_prof' class='professors_details_input' value='".$professors1["Professor_key"]."' disabled> </input><br/><br/>
		    Professor First Name : <input   style=' margin-left : 65px; ' id='name_details_prof'   class='professors_details_input' value='".$professors1["firstname"]."' > </input><br/><br/>
		    Professor Last Name :<input   style=' margin-left : 68px; '  id='last_details_prof' class='professors_details_input' value='".$professors1["lastname"]."' > </input><br/><br/>
		    Professor Email  :<input  id='email_details_prof' id='professor_email_details' class='professors_details_input' value='".$professors1["mail"]."' > </input><br/><br/>
			</form>
		</div><br/>
	<button  style='margin-left : 250px;' id='update_for_professors'>Update</button>

</div>
</div>


";
	
	
}
echo"
</body>
</html>";


?>
