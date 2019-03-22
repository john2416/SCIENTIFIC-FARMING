<html>
<head>
<title>SELECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="LOGIN1.css">   -!>
</head>
<body>
<div id="body">

<?php

$SID = $_POST['SID'];


if ( !empty($SID) )
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
	$SELECT = "SELECT * FROM MAINTENANCE WHERE SID=$SID";
	$RESULT = mysqli_query($conn, $SELECT);
	
	

/* --------------------------PRINTING PART------------------------------------------------- */

	if (mysqli_num_rows($RESULT) > 0 )

	 {
    		// output data of each row
    		$row = mysqli_fetch_assoc($RESULT);
		
		
		/*-------------Maintenance TABLE------ */
		echo "<br><br>";
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
		echo "<td>" . $row['F_name'] . "</td>";
		echo "<td>" . $row['L_name'] . "</td>";
		echo "<td>" . $row['SID'] . "</td>";
		echo "<td>" . $row['eMID'] . "</td>";
		echo "<td>" . $row['Current_statistics'] . "</td>";
		echo "<td>" . $row['Modification'] . "</td>";
		echo "<td>" . $row['Feedback'] . "</td>";
		echo "<td>" . $row['Investment'] . "</td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><br>"; 
	
	 }
	 

	else
	 {
	    echo("<script type=\"text/javascript\">
		 window.alert('Entered SID does not match any records!');
		window.location.href='WELCOME2.html';
		</script>");
	 }

	$conn->close();
	


	}

}
else
{
echo("<script type=\"text/javascript\">
     window.alert('Enter SID!');
     window.location.href='WELCOME2.html';
     </script>");
die();
}

?> 

</div>
</body>
</html>
