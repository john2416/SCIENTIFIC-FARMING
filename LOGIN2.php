<html>
<head>
<title>LOGIN</title>
<body>

<?php

$login2pwd = $_POST['login2pwd'];
$SID = $_POST['SID'];
$realSID="1234554321";
$realpassword="8904487519";



/* -----------------------------------VERIFY----------------- */

if ( !empty($login2pwd) || !empty($SID)  )

{

	
	if ($SID == $realSID && $login2pwd == $realpassword)
	{
	echo file_get_contents("WELCOME2.html");
	}

	else
	{
	echo "Invalid UID or Password!";
	echo file_get_contents("LOGIN2.html");
	}

}
else
{
echo "All fields are required!!!";
die();
}

?> 

</body>
</html>



