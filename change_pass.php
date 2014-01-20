<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>

<?php 
	if(isset($_POST['passchange'])){ //password change requrested
		$newpass= $_POST['userpassword'];
		$newpassre = $_POST['reuserpassword'];

		if($newpass == $newpassre){
			$newhashpass = sha1($newpass);
			$query = "UPDATE tblUsers ";
			$query .= "SET userhashpass='{$newhashpass}' ";
			$query .= "WHERE useremail='{$_SESSION['useremail']}'";

			$result = mysql_query($query, $connection);

			if($result){
				redirect_to("profile.php?id=2&success=1");
			}
		} 
	} else {
		redirect_to("profile.php?id=2&success=0");
	}
?>