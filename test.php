<html>
<head>
<title>php</title>
<body>

<?php


/* ------------------PERSONAL DETAILS-------------- */

$Fname = $_POST['Fname'];
$Minit = $_POST['Minit'];
$Lname = $_POST['Lname'];
$Age = $_POST['Age'];
$Address = $_POST['Address'];
$Cultivation_location = $_POST['Cultivation_location'];


/* ------------------WAREHOUSE-------------- */

$Dimension = $_POST['Dimension'];
$Location = $_POST['Location'];
$Storage_technique = $_POST['Storage_technique'];
$Ownership = $_POST['Ownership'];

/* ------------------MACHINES-------------- */

$Type =  $_POST['Type1'] . "," . $_POST['Type2'] . "," . $_POST['Type3'] ;
$MID =  $_POST['MID1'] . "," . $_POST['MID2'] . "," . $_POST['MID3'] ;
$Purchase_year = $_POST['year1'] . "," . $_POST['year2'] . "," . $_POST['year3'] ;
$Warranty = $_POST['warranty1'] . "," . $_POST['warranty2'] . "," . $_POST['warranty3'] ;
$Insurance = $_POST['Insurance'];
$Status =  $_POST['Status1'] . "," . $_POST['Status2'] . "," . $_POST['Status3'] ;


/* ------------------LAND-------------- */

$Owner_name = $_POST['Owner_name'];
$PID = $_POST['PID'];
$Area = $_POST['Area'];
$Land_location = $_POST['Land_location'];
$Lcondition =$_POST['Condition1'] . "," .  $_POST['Condition2'];
$Ownership_type = $_POST['Ownership_type'];
$Previous_stats = $_POST['prev_stats1'] . "," . $_POST['prev_stats2'];


/* ------------------SECURITY-------------- */

$UID = $_POST['UID'];
#$register1pwd = $_POST['register1pwd'];
#$register1pwd-repeat = $_POST['register1pwd-repeat']; */

/* ------------------------------------QUERY PART------------------------------------------------------------------------------------------ */

if (!empty($Fname) || !empty($Minit) || !empty($Age) || !empty($Address) || !empty($Cultivation_location) || !empty($Dimension) || !empty($Location) || !empty($Storage_technique) || !empty($Ownership) || !empty($Type) || !empty($MID) || !empty($year) || !empty($warranty) || !empty($Insurance) || !empty($Status) || !empty($Owner_name) || !empty($PID) || !empty($Area) || !empty($Land_location) || !empty($Ownership_type) || !empty($Previous_stats) || !empty($Condition) )
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

 	
	 $INSERT1 = "INSERT INTO FARMER(Fname,Minit,Lname,Age,UID,Address,Cultivation_location) 
   	 VALUES('$Fname','$Minit','$Lname','$Age','$UID','$Address','$Cultivation_location' ) ";
				          
	 $INSERT2 = "INSERT INTO WAREHOUSE(eUID,Dimension,Location,Storage_technique,Ownership) 
	 VALUES('$UID','$Dimension','$Location','$Storage_technique','$Ownership')";

	 $INSERT3 = "INSERT INTO MACHINERY(eUID,Type,MID,Purchase_year,Warranty,Insurance,Status) 
   	 VALUES('$UID','$Type','$MID','$Purchase_year','$Warranty','$Insurance','$Status' ) ";
	
	$INSERT4 = " INSERT INTO LAND(Owner_name,Area,Land_location,Lcondition,Ownership_type,PID,Previous_stats,eUID)
	VALUES('$Owner_name','$Area','$Land_location','$Lcondition','$Ownership_type','$PID','$Previous_stats','$UID')"; 

 	
	mysqli_query($conn,$INSERT1);
	mysqli_query($conn,$INSERT2);
	mysqli_query($conn,$INSERT3);
	if(!mysqli_query($conn,$INSERT4))
	{
  	echo("Error description: " . mysqli_error($conn));
  	}

	echo("<script type=\"text/javascript\">
		 window.alert('New record has been added successfully');
		window.location.href='REGISTER.html';
		</script>");
	
	$conn->close();

	}

}
else
{
echo("<script type=\"text/javascript\">
		 window.alert('All fields are required!');
		window.location.href='REGISTER.html';
		</script>");
die();
}

?> 
</body>
</html>
