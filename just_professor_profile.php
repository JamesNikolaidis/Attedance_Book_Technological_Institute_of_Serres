<?php

include("connection.php");

$Professor_key=$_GET["professor_id"];



$Professors=mysql_query("SELECT * FROM professors WHERE Professor_key='".$Professor_key."'");

echo"

<html>
<head>
<title>Professor Profile</title>
<link rel='icon' href='teiser.png'>
<link rel='stylesheet' type='text/css' href='style.css'>
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


</head>
<body style='background-color : grey;'>
";
$Professors1=mysql_fetch_array($Professors);
echo"
<div style='background-color : white; width : 600px; height  :100%; margin-left : 30%; padding : 10px;' >
      <div class='professor_information_form'> 
			<h2>Professor Information</h2>	  
	  <form>
	  
			Professor ID : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  id='professor_id_details' class='professors_details_input' value='".$Professors1["Professor_key"]."' disabled> </input><br/><br/>
		    Professor First Name : <input class='professors_details_input' value='".$Professors1["firstname"]."' disabled> </input><br/><br/>
		    Professor Last Name :<input class='professors_details_input' value='".$Professors1["lastname"]."' disabled> </input><br/><br/>
		    Professor Email  :<input id='professor_email_details' class='professors_details_input' value='".$Professors1["mail"]."' disabled> </input><br/><br/>
			</form>
		</div><br/>
	

</div>
</div>
</body>
</html>";

?>
