<?php require_once "dist/components/php/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>ClickFix -- Fix</title>
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="dist/css/mystyle.css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body id="page-fix">
	<div class="bluebar"></div>
	<section class="container">
		<div class="content row">
			<?php include "dist/components/php/header.php"; ?>
			<section class="main col col-lg-8 col-lg-offset-1">
				<h2>Please fill in your details. </h2>
				<?php include "dist/components/php/main-form-require.php"; ?>
			</section> <!-- Main Content -->

			<?php 



			?>

			<section class="main col col-lg-3">
				<h2>Side bar</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</section> <!--Sidebar -->

		</div>
		</br>
		</br>
		<?php include "dist/components/php/footer.php"; ?>
	</section>

	<script type="text/javascript" src="dist/js/bootsrap.js"></script>
	<script type="text/javascript" src="dist/js/myscript"></script>
</body>
</html>