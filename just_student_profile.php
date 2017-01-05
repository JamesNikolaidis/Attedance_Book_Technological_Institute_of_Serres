<?php

include("connection.php");

$AEM=$_GET["AEM"];
$students=mysql_query("SELECT * FROM students WHERE AEM='".$AEM."'");
$labs=mysql_query("SELECT * FROM labs ");



echo"

<html>
<head>
<title>Student Profile</title>
<meta charset='utf-8' />

<html>
<head>
<title>View-Professor</title>
<meta charset='utf-8' />
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

<style>
	
	#dist_menu{
		margin-left: -10px;
		margin-top : -10px;
		width : 101.2%;
		background-color : black;
		
		
	}
	.Dist_menu_buttons{
		
		border : 2px solid rgb(0,0,0);
		border-radius : 4px;
		width  :200px;
		text-align  :center;
		padding : 10px;
		background: transparent;
		color : orange;
	
		
	}
	
	#first_page{
		
		font-size :20px;
		margin-left : 2px;
		
	}
	
	#insert_stu, #insert_pr , #insert_la{
		
		font-size :20px;
		margin-left : 10px;
		
	}
	
	button:hover{font-family:impact;
	background-color : white;
	
	}
	
	</style>

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
	

</div>
</div>


";

echo"
		

</body>
</html>";

?>