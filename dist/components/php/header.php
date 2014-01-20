<div class="content row">
	<div class="col-lg-12">
		<header class="clearfix">
			<!--<section class="branding">
				<a href="index.php"></a></section>-->

			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">

					<div class="branding">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsedcontent">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
						<a class="navbar-brand" href="index.php">Click<span class="glyphicon glyphicon-hand-up">Fix</a><!--CHANGE LINK -->
					</div>

					<div class="collapse navbar-collapse" id="collapsedcontent">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li><!--CHANGE LINK -->
							<li><a href="order.php">New Order</a></li><!--Change LINK -->
							<li><a href="about.php">About</a></li><!--CHANGE LINK -->
							<li><a href="contact.php">Contact Us</a></li><!--CHANGE LINK -->
						</ul><!--nav (left)-->

						<?php //PHP code goes here
							if(logged_in()){
								include "dist/components/php/nav-user.php";
							} else {
								include "dist/components/php/nav-guest.php";
							}
						?>
					</div>

				</div><!--Container-->

			</div><!--Navbar-->

		</header><!--Clearfix (header) -->
	</div><!--Coloumn (lg-12)-->
</div><!--Content row-->
<!--CHANGE LINK -->
