<?php

include("connection.php");

$ID=$_GET["professor_id"];
$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$ID."'");
$labs=mysql_query("SELECT * FROM labs ");



echo"

<html>
<head>
<title>View-Student</title>
<meta charset='utf-8' />
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
<style>
.professors_details_input{

	
}
.professors_details_input:disabled {
    background: white;
	text-align : center;
	border:none;

	margin-left : 100px;
	border-bottom-length : 4px;
	border-bottom-color  : red;
	border-bottom-style : solid;

}

#professor_email_details, #professor_id_details{
	margin-left :132px;
}

.professor_information_form{
	
	margin-left : 15%;
	border-style : solid;
	border-width  : 4px;
	width  :400px;
	padding : 15px;
	border-radius : 5px;
	
	
	
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
			
			$('#delete_prof').click(function(){
						
				$.get('delete_professor.php?ID=".$ID."',function(){
					location.reload();
				});
					
					
						
						});
			
			
		});
</script>
</head>
<body style='background-color : grey;'>";

$professors=mysql_fetch_array($Professors);
echo"

<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
<div class='professor_information_form'> 
			<h2>Professor Information</h2>	  
	  <form>
	  
			Professor ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  id='professor_id_details' class='professors_details_input' value='".$professors["Professor_key"]."' disabled> </input><br/><br/>
		    Professor First Name : <input class='professors_details_input' value='".$professors["firstname"]."' disabled> </input><br/><br/>
		    Professor Last Name :<input class='professors_details_input' value='".$professors["lastname"]."' disabled> </input><br/><br/>
		    Professor Email  :<input id='professor_email_details' class='professors_details_input' value='".$professors["mail"]."' disabled> </input><br/><br/>
			
			</form>
		</div><br/>
		<button style='margin-left : 250px;' id='delete_prof'>Delete Professor</button>

</div>
</div>


";

echo"
		

</body>
</html>";

?>