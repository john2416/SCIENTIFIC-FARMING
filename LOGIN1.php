<html>
<head>
<title>LOGIN</title>
<body>

<?php

$login1pwd = $_POST['login1pwd'];
$UID = $_POST['UID'];
$realUID="1234554321";
$realpassword="8904487519";



/* -----------------------------------VERIFY----------------- */

if ( !empty($login1pwd) && !empty($UID)  )

{

	
	if ($UID == $realUID && $login1pwd == $realpassword)
	{
	echo file_get_contents("WELCOME.html");
	}

	else
	{
	echo "Invalid UID or Password!";
	echo file_get_contents("LOGIN1.html");
	}

}
else
{
echo "Enter UID and password!!!";
echo file_get_contents("LOGIN1.html");
die();
}

?> 

</body>
</html>



