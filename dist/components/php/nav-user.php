<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="profile.php" style="padding:0;">
			<img src="https://graph.facebook.com/<?php echo $_SESSION['userfb']; ?>/picture?small" class="img-circle">
		</a>
	<li><a href="profile.php"><?php echo $_SESSION['usersname']; ?></a></li>

	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-cog"></span> <b class="caret"></b> </a>
		<ul class="dropdown-menu" style="border:1px solid #888; background-color:#bdc3c7; color:#bdc3c7;">
          <li><a href="#">My Orders</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Acount Settings</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
	</li>
</ul><!--Nav (right) without logged in -->