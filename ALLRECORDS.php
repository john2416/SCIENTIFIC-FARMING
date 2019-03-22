<html>
<head>
<title>RECORDS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="LOGIN1.css">   -!>
</head>
<body>
<div id="body">

<?php

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
	$SELECT1 = "SELECT * FROM FARMER";
	$SELECT2 = "SELECT * FROM WAREHOUSE";
	$SELECT3 = "SELECT * FROM MACHINERY";
	$SELECT4 = "SELECT * FROM LAND";
	$SELECT5 = "SELECT * FROM MAINTENANCE";

	$RESULT1 = mysqli_query($conn, $SELECT1);
	$RESULT2 = mysqli_query($conn, $SELECT2);
	$RESULT3 = mysqli_query($conn, $SELECT3);
	$RESULT4 = mysqli_query($conn, $SELECT4);
	$RESULT5 = mysqli_query($conn, $SELECT5);

	if (mysqli_num_rows($RESULT1) > 0  )

	{
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

		while($row1 = mysqli_fetch_array($RESULT1))
		{
		echo "<tr>";
		echo "<td>" . $row1['Fname'] . "</td>";
		echo "<td>" . $row1['Minit'] . "</td>";
		echo "<td>" . $row1['Lname'] . "</td>";
		echo "<td>" . $row1['Age'] . "</td>";
		echo "<td>" . $row1['UID'] . "</td>";
		echo "<td>" . $row1['Address'] . "</td>";
		echo "<td>" . $row1['Cultivation_location'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "<br><br>";

	    /* --------WAREHOUSE TABLE---------- */
		
		echo "WAREHOUSE TABLE <br>";
		echo "<table border='1'>
		<tr>
		<th>eUID</th>
		<th>Dimension</th>
		<th>Location</th>
		<th>Storage_technique</th>
		<th>Ownership</th>
		</tr>";

		while($row2 = mysqli_fetch_array($RESULT2))
		{
		echo "<tr>";
		echo "<td>" . $row2['eUID'] . "</td>";
		echo "<td>" . $row2['Dimension'] . "</td>";
		echo "<td>" . $row2['Location'] . "</td>";
		echo "<td>" . $row2['Storage_technique'] . "</td>";
		echo "<td>" . $row2['Ownership'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "<br><br>";

		 /* --------MACHINERY TABLE---------- */
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

		while($row3 = mysqli_fetch_array($RESULT3))
		{
		echo "<tr>";
		echo "<td>" . $row3['eUID'] . "</td>";
		echo "<td>" . $row3['Type'] . "</td>";
		echo "<td>" . $row3['MID'] . "</td>";
		echo "<td>" . $row3['Purchase_year'] . "</td>";
		echo "<td>" . $row3['Warranty'] . "</td>";
		echo "<td>" . $row3['Insurance'] . "</td>";
		echo "<td>" . $row3['Status'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "<br><br>";

		 /* --------LAND TABLE---------- */
		
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

		while($row4 = mysqli_fetch_array($RESULT4))
		{
		echo "<tr>";
		echo "<td>" . $row4['Owner_name'] . "</td>";
		echo "<td>" . $row4['Area'] . "</td>";
		echo "<td>" . $row4['Land_location'] . "</td>";
		echo "<td>" . $row4['Lcondition'] . "</td>";
		echo "<td>" . $row4['Ownership_type'] . "</td>";
		echo "<td>" . $row4['PID'] . "</td>";
		echo "<td>" . $row4['Previous_stats'] . "</td>";
		echo "<td>" . $row4['eUID'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "<br><br>";

		/* --------MAINTENANCE TABLE---------- */
		
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

		while($row5 = mysqli_fetch_array($RESULT5))
		{
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
		}
		echo "</table>";
		echo "<br><br>";




	}










	}








$conn->close();

?> 

</div>
</body>
</html>
