<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>

<?php 

	$dbemail = $_POST['email'];
	$dbpassword = $_POST['password'];
	$dbhashpass = sha1($dbpassword);

	$query = "SELECT usersname, useremail, usermobile ";
	$query .= "FROM tblUsers WHERE ";
	$query .= "useremail='{$dbemail}' AND userhashpass='{$dbhashpass} ' ";
	$query .= "LIMIT 1" ;

	$result = mysql_query($query, $connection);

	if(mysql_num_rows($result) == 1){
		$found_user = mysql_fetch_array($result);
		$_SESSION['usersname'] = $found_user['useremail'];
		$_SESSION['useremail'] = $found_user['username'];
		$_SESSION['usermobile'] = $found_user['usermobile'];

		echo "Hello {$_SESSION['usersname']} ";
	} else {
		echo "Username password combination incorrect. Please check again.";
	}



?>

<a href="index.html">Go home , you're drunk!</a>
