<html>
<head>
<title>php2</title>
<body>

<?php


$F_name = $_POST['F_name'];
$L_name = $_POST['L_name'];
$SID = $_POST['SID'];
$eMID = $_POST['eMID'];
$Current_statistics=$_POST['Current_statistics'];
$Modification=$_POST['Modification'];
$Feedback=$_POST['Feedback'];
$Investment=$_POST['Investment'];


/* --------------------------------------------------QUERY----------------------------- */

if ( !empty($F_name) && !empty($L_name) && !empty($SID) && !empty($eMID) && !empty($Current_statistics) && !empty($Modification) && !empty($Feedback)  )

{

	
	$servername = "localhost";
	$username = "root";
	$dbname ="sugan_SF";

	// Create connection
	$conn = new mysqli($servername, $username,"",$dbname);

	// Check connection
	if ($conn->connect_error)
	{
   	 die("Connection failed:  " . $conn->connect_error);
	}

	else
	{

	if ($Investment != 0)
	{
	$INSERT = "INSERT INTO MAINTENANCE(F_name,L_name,SID,eMID,Current_statistics,Modification,Feedback,Investment) 
   	 VALUES('$F_name','$L_name','$SID','$eMID','$Current_statistics','$Modification','$Feedback','$Investment' ) ";
	}
	
	else
	{
	$INSERT = "INSERT INTO MAINTENANCE(F_name,L_name,SID,eMID,Current_statistics,Modification,Feedback) 
   	 VALUES('$F_name','$L_name','$SID','$eMID','$Current_statistics','$Modification','$Feedback' ) ";
	}
	
	if(!mysqli_query($conn,$INSERT))
	{
  	echo("Error description: " . mysqli_error($conn));
  	}
	
	echo("<script type=\"text/javascript\">
		 window.alert('Feedback has been sent successfully');
		window.location.href='SCIENTIST.html';
		</script>");

	$conn->close();
	
	}

}
else
{
echo("<script type=\"text/javascript\">
		 window.alert('All fields are required!');
		window.location.href='SCIENTIST.html';
		</script>");
die();
}

?> 

</body>
</html>











