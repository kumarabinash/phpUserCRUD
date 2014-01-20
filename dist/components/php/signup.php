<?php require_once "dist/components/php/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
</head>
<body>

	<?php 

		$dbname = $_POST['usersname'];
		$dbemail = $_POST['useremail'];
		$dbmobile = $_POST['usermobile'];
		$dbpassword = $_POST['userpassword'];
		$dbhashpass = sha1($dbpassword);

		$query = "INSERT INTO tblUsers (usersname, useremail, usermobile, userhashpass) 
		VALUES ('{$dbname}', '{$dbemail}', '{$dbmobile}', '{$dbhashpass}')";

		$result = mysql_query($query, $connection);

		if($result) {
			$message = "User created successfully.";
			$message .= "<br/>" .mysql_error();
			echo $message;
		} else {
			$message = mysql_error();
			echo $message;
		}

	?>
	<a href="index.php">Go Hom Dino, You're drunk!</a>


</body>
</html>