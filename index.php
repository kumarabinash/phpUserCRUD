<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>ClickFix -- Home</title>
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="dist/css/mystyle.css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body id="home">
	<section class="container">
		<div class="content row">
			<?php include "dist/components/php/header.php"; ?>
			<?php include "dist/components/php/index-jumbotron.php"; ?>
			<section class="main col col-lg-8">
				
				<h2>Main Content </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

			</section>

			<section class="main col col-lg-4">
				<?php include "dist/components/php/sidebar-signin.php"; ?>
				
			</section> 

		</div>
		<?php include "dist/components/php/footer.php"; ?>
	</section>

	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/myscript.js"></script>
</body>
</html>