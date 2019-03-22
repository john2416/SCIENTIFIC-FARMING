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


if ( !empty($SID)  )
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
	$SELECT1 = "SELECT * FROM MAINTENANCE WHERE SID=$SID";
	$RSLT1 = mysqli_query($conn, $SELECT1);

	if (mysqli_num_rows($RSLT1) == 0  )
	{
	    echo("<script type=\"text/javascript\">
		 window.alert('SID does not match any records!!!');
		window.location.href='WELCOME2.html';
		</script>");
	}
	 

	else
	 {
	        
		$DELETE= "DELETE  FROM `MAINTENANCE` WHERE `SID`=$SID" ;
		$RESULT = mysqli_query($conn, $DELETE);
		
		
		echo("<script type=\"text/javascript\">
		 window.alert('Record has been successfully removed');
		window.location.href='WELCOME2.html';
		</script>");
		
		/*echo file_get_contents("WELCOME2.html");*/

	 }

	$conn->close();
	}
	


	

}
else
{
echo("<script type=\"text/javascript\">
		 window.alert('Enter SID!!');
		window.location.href='WELCOME2.html';
		</script>");
die();
}

?> 

</div>
</body>
</html>
