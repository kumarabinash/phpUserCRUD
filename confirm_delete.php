<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>

<?php
	
	if(isset($_POST['deleteaccount'])){ //confirmation for deletion
		$dbpassword = $_POST['userpassword'];
		$dbhashpass = sha1($dbpassword);

		$useremail = $_SESSION['useremail'];

		$query = "DELETE FROM tblUsers WHERE ";
		$query .= "useremail='{$useremail}' AND userhashpass='{$dbhashpass}' ";

		$result = mysql_query($query, $connection);

		if(mysql_affected_rows() == 1){
			// 2. Unset all the session variables
			$_SESSION = array();
			
			// 3. Destroy the session cookie
			if(isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time()-42000, '/');
			}
			
			// 4. Destroy the session
			session_destroy();
			
			redirect_to("index.php?logout=1");
		} else {
			redirect_to("profile.php?id=3&delete=fail");
		}
	}

?>