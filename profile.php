<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>


<!DOCTYPE html>
<html>
<head>
	<title>MySite -- Contact Us</title>
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="dist/css/mystyle.css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body id="profile">
	<section class="container">
		<div class="content row">
			<?php include "dist/components/php/header.php"; ?>
			<section class="main col col-lg-3 well" style="height:550px;">
				<img src="https://graph.facebook.com/<?php echo $_SESSION['userfb']; ?>/picture?width=150&height=150" class="img-rounded">
				<h3><?php echo $_SESSION['usersname']; ?></h3>
				<hr/>
				<ul class="well nav nav-pills nav-stacked">
				  <li id="subprofile"><a href="profile.php?id=1">Profile</a></li>
				  <li id="subsecurity"><a href="profile.php?id=2">Security</a></li>
				  <li id="subdelete"><a href="profile.php?id=3">Delete Account</a></li>
				</ul>


			</section>
			<section class="main col col-lg-8 well" style="height:550px;">
				<?php
					if(isset($_GET['id'])){
						switch ($_GET['id']) {
							case 1:
								include "dist/components/php/user_profile.php";
								break;
							
							case 2:
								include "dist/components/php/user_password.php";
								break;

							case 3:
								include "dist/components/php/user_delete.php";
								break;
							default:
								include "dist/components/php/user_profile.php";
								break;
						}
					} else {
						include "dist/components/php/user_profile.php";
					}
				?>
			</section>
		</div>
		<?php include "dist/components/php/footer.php"; ?>
	</section>

	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/myscript"></script>
	<script type="text/javascript">

</body>
</html>