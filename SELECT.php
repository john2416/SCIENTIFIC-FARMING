<html>
<head>
<title>SELECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="LOGIN1.css">   -!>
</head>
<body>
<div id="body">

<?php

$UID = $_POST['UID'];
$eMID = $_POST['eMID'];

if ( !empty($UID) || !empty($eMID) )
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
	$SELECT1 = "SELECT * FROM FARMER WHERE UID=$UID";
	$SELECT2 = "SELECT * FROM LAND WHERE eUID=$UID";
	$SELECT3 = "SELECT * FROM MACHINERY WHERE eUID=$UID";
	$SELECT4 = "SELECT * FROM WAREHOUSE WHERE eUID=$UID";
	
	
	$RESULT1 = mysqli_query($conn, $SELECT1);
	$RESULT2 = mysqli_query($conn, $SELECT2);
	$RESULT3 = mysqli_query($conn, $SELECT3);
	$RESULT4 = mysqli_query($conn, $SELECT4);
	
	

/* --------------------------PRINTING PART------------------------------------------------- */

	if (mysqli_num_rows($RESULT1) > 0 && mysqli_num_rows($RESULT2) > 0 && mysqli_num_rows($RESULT3) > 0 && mysqli_num_rows($RESULT4) > 0  )

	 {
    		// output data of each row
    		$row1 = mysqli_fetch_assoc($RESULT1);
		$row2 = mysqli_fetch_assoc($RESULT2);
		$row3 = mysqli_fetch_assoc($RESULT3);
		$row4 = mysqli_fetch_assoc($RESULT4);
		
		
		/* --------FARMER TABLE---------- */
		echo "FARMER TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>Fname</th>
		<th>Minit</th>
		<th>Lname</th>
		<th>Age</th>
		<th>UID</th>
		<th>Address</th>
		<th>Cultivation_location</th>
		</tr>";
		echo "<tr>";
		echo "<td>" . $row1['Fname'] . "</td>";
		echo "<td>" . $row1['Minit'] . "</td>";
		echo "<td>" . $row1['Lname'] . "</td>";
		echo "<td>" . $row1['Age'] . "</td>";
		echo "<td>" . $row1['UID'] . "</td>";
		echo "<td>" . $row1['Address'] . "</td>";
		echo "<td>" . $row1['Cultivation_location'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
	
		/*-------------LAND TABLE------ */
		echo "LAND TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>Owner_name</th>
		<th>Area</th>
		<th>Land_location</th>
		<th>Lcondition</th>
		<th>Ownership_type</th>
		<th>PID</th>
		<th>Previous_stats</th>
		<th>eUID</th>
		</tr>";
		echo "<tr>";
		echo "<td>" . $row2['Owner_name'] . "</td>";
		echo "<td>" . $row2['Area'] . "</td>";
		echo "<td>" . $row2['Land_location'] . "</td>";
		echo "<td>" . $row2['Lcondition'] . "</td>";
		echo "<td>" . $row2['Ownership_type'] . "</td>";
		echo "<td>" . $row2['PID'] . "</td>";
		echo "<td>" . $row2['Previous_stats'] . "</td>";
		echo "<td>" . $row2['eUID'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
		
		/*-------------Machinery TABLE------ */
		echo "MACHINERY TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>eUID</th>
		<th>Type</th>
		<th>MID</th>
		<th>Purchase_year</th>
		<th>Warranty</th>
		<th>Insurance</th>
		<th>Status</th>
		</tr>";
		echo "<tr>";
		echo "<td>" . $row3['eUID'] . "</td>";
		echo "<td>" . $row3['Type'] . "</td>";
		echo "<td>" . $row3['MID'] . "</td>";
		echo "<td>" . $row3['Purchase_year'] . "</td>";
		echo "<td>" . $row3['Warranty'] . "</td>";
		echo "<td>" . $row3['Insurance'] . "</td>";
		echo "<td>" . $row3['Status'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";

		/*-------------WAREHOUSE TABLE------ */
		echo "WAREHOUSE TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>eUID</th>
		<th>Dimension</th>
		<th>Location</th>
		<th>Storage_technique</th>
		<th>Ownership</th>
		</tr>";
		echo "<tr>";
		echo "<td>" . $row4['eUID'] . "</td>";
		echo "<td>" . $row4['Dimension'] . "</td>";
		echo "<td>" . $row4['Location'] . "</td>";
		echo "<td>" . $row4['Storage_technique'] . "</td>";
		echo "<td>" . $row4['Ownership'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
		
		/*-------------Maintenance TABLE------ */
		if($eMID != "")
		{
		$SELECT5 = "SELECT * FROM MAINTENANCE WHERE eMID=$eMID";
		$RESULT5 = mysqli_query($conn, $SELECT5);
		$row5 = mysqli_fetch_assoc($RESULT5);
		
		echo "MAINTENANCE TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>F_name</th>
		<th>L_name</th>
		<th>SID</th>
		<th>eMID</th>
		<th>Current_statistics</th>
		<th>Modification</th>
		<th>Feedback</th>
		<th>Investment</th>
		</tr>";
		echo "<tr>";
		echo "<td>" . $row5['F_name'] . "</td>";
		echo "<td>" . $row5['L_name'] . "</td>";
		echo "<td>" . $row5['SID'] . "</td>";
		echo "<td>" . $row5['eMID'] . "</td>";
		echo "<td>" . $row5['Current_statistics'] . "</td>";
		echo "<td>" . $row5['Modification'] . "</td>";
		echo "<td>" . $row5['Feedback'] . "</td>";
		echo "<td>" . $row5['Investment'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>";
		}
		

		
   		 
	
	 }
	 

	else
	 {
	   echo("<script type=\"text/javascript\">
		 window.alert('Entered UID does not match any records!');
		window.location.href='WELCOME.html';
		</script>");
	 }

	$conn->close();
	


	}

}
else
{
echo "All fields are required!!!";
die();
}

?> 

</div>
</body>
</html>
