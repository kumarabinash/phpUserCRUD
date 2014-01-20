<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>

<?php 
	if(isset($_POST['profilechange'])){ //profile update requrested
		$usersname = $_POST['usersname'];
		$useremail = $_POST['useremail'];
		$usermobile = $_POST['usermobile'];
		$userfb = $_POST['userfb'];

		$query = "UPDATE tblUsers ";
		$query .= "SET usersname='{$usersname}', ";
		$query .= "useremail='{$useremail}', ";
		$query .= "usermobile='{$usermobile}', ";
		$query .= "userfb='{$userfb}' ";

		$query .= "WHERE useremail='{$_SESSION['useremail']}'";

		$userid = $_SESSION['userid'];

		$result = mysql_query($query, $connection);

		if($result){
			$session_query = "SELECT usersname, useremail, usermobile, userfb ";
			$session_query .= "FROM tblUsers where id='{$userid}'";
			$session_result = mysql_query($session_query, $connection);

			if($session_result){
				$session_array = mysql_fetch_array($session_result);
				$_SESSION['usersname'] = $session_array['usersname'];
				$_SESSION['useremail'] = $session_array['useremail'];
				$_SESSION['usermobile'] = $session_array['usermobile'];
				$_SESSION['userfb'] = $session_array['userfb'];

				redirect_to("profile.php?success=1");
			}
		} else {
			echo mysql_error();
		}
	}
?>