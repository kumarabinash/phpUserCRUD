<ul class="nav navbar-nav navbar-right">
	<li><a href="signup.php">Signup</a></li>

	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Login</span> <b class="caret"></b> </a>
		<div class="dropdown-menu" style="padding:25px; padding-top:0; width:250px; border:1px solid #888; background-color:#222; color:#ccc;">
			<div class="dropdown-caret right">
				<span class="caret-outer"></span>
				<span class="caret-inner"></span>
			</div>
			<h4 class="text-center"><u>Login</u></h4>
			<form role="form" method="post" action="login.php" class="form-horizontal">
					<label for="useremail">
						<span>Email</span>
						<input type="email" id="useremail" name="useremail" class="form-control" placeholder="yourname@email.com"></input>
					</label>

					<br/><br/>

					<label for="userpassword">
						<span>Password</span>
						<input type="password" id="userpassword" name="userpassword" class="form-control" placeholder="password"></input>
					</label>

					<br/><hr/>

					<div class="text-center">
						<button class="btn btn-info" type="submit">Login</button>
					</div>
					
			</form>
		</div>
	</li>

</ul><!--Nav (right) without logged in -->