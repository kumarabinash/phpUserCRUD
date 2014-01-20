<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>

	<?php 

		$dbname = $_POST['usersname'];
		$dbemail = $_POST['useremail'];
		$dbmobile = $_POST['usermobile'];
		$dbpassword = $_POST['userpassword'];
		$dbhashpass = sha1($dbpassword);

		$prequery = "SELECT useremail FROM tblUsers ";
		$prequery .="WHERE useremail='{$dbemail}'";

		$preresult = mysql_query($prequery, $connection);

		if(mysql_num_rows($preresult) == 1){ 
			$_SESSION['useremail'] = $dbemail;
			redirect_to("signup.php?e=1");

		} else {

			$query = "INSERT INTO tblUsers (usersname, useremail, usermobile, userhashpass) 
			VALUES ('{$dbname}', '{$dbemail}', {$dbmobile}, '{$dbhashpass}')";

			$result = mysql_query($query, $connection);

			if($result) {
				$fb = "SELECT id, userfb FROM tblUsers WHERE useremail='{$dbemail}'";
				$picresult = mysql_query($fb, $connection);
				$result2 = mysql_fetch_array($picresult);
				if($picresult){
					$_SESSION['userfb'] = $result2['userfb'];
					$_SESSION['userid'] = $result2['id'];
				} else {
					$_SESSION['userfb'] = 'bhabani.biswal.79';
				}
				$_POST = array();
				$_SESSION['useremail'] = $dbemail;
				$_SESSION['usersname'] = $dbname;
				$_SESSION['usermobile'] = $dbmobile;
				
				redirect_to("index.php");
			} else {
				$message = mysql_error();
				echo $message;
			}
		}

		
	?>
