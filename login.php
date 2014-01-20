<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>

<?php 

	$dbemail = $_POST['useremail'];
	$dbpassword = $_POST['userpassword'];
	$dbhashpass = sha1($dbpassword);

	$query = "SELECT id, usersname, useremail, usermobile, userfb ";
	$query .= "FROM tblUsers WHERE ";
	$query .= "useremail='{$dbemail}' AND userhashpass='{$dbhashpass} ' ";
	$query .= "LIMIT 1" ;

	$result = mysql_query($query, $connection);

	if(mysql_num_rows($result) == 1){
		$found_user = mysql_fetch_array($result);
		$_SESSION['userid'] = $found_user ['id'];
		$_SESSION['usersname'] = $found_user['usersname'];
		$_SESSION['useremail'] = $found_user['useremail'];
		$_SESSION['usermobile'] = $found_user['usermobile'];
		$_SESSION['userfb'] = $found_user['userfb'];

		redirect_to("index.php");
	} else {
		redirect_to("signin.php?attempt=1");
	}

?>
