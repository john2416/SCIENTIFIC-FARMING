<html>
<head>
<title>SELECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="LOGIN1.css">   -!>
</head>
<body>
<div id="body">

<?php

$eUID = $_POST['UID'];


if ( !empty($eUID)  )
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
	$SELECT1 = "SELECT * FROM FARMER WHERE UID=$eUID";
	$RSLT1 = mysqli_query($conn, $SELECT1);

	if (mysqli_num_rows($RSLT1) == 0  )
	{
	    echo "Entered UID does not match any records!";
	    echo file_get_contents("WELCOME.html");
	}
	 

	else
	 {
	        
		$DELETE1= "DELETE  FROM `WAREHOUSE` WHERE `eUID`=$eUID" ;
		$DELETE2= "DELETE  FROM `LAND` WHERE `eUID`=$eUID" ;
		$DELETE3= "DELETE  FROM `MACHINERY` WHERE `eUID`=$eUID" ;
		$DELETE4= "DELETE  FROM `FARMER` WHERE `UID`=$eUID" ;

		
		$RESULT1 = mysqli_query($conn, $DELETE1);
		$RESULT2 = mysqli_query($conn, $DELETE2);
		$RESULT3 = mysqli_query($conn, $DELETE3);
		$RESULT4 = mysqli_query($conn, $DELETE4);

		echo("<script type=\"text/javascript\">
		 window.alert('Record has been successfully removed');
		window.location.href='WELCOME.html';
		</script>");

	 }

	$conn->close();
	}
	


	

}
else
{
echo("<script type=\"text/javascript\">
		 window.alert('Enter UID!!!');
		window.location.href='WELCOME.html';
		</script>");
die();
}

?> 

</div>
</body>
</html>
