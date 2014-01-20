
<h2 class="text-center">Signin or <a href="signup.php">Signup</a></h2>
<form role="form" action="login.php" method="post" class="sidebar-login-form">

	<div class="form-group">
		<div class="col-sm-4 sidebar-login-label">
			<label for="useremail" class="col-sm-4 control-label">Email</label>
		</div>
		<div class="col-sm-8">
			<input type="email" id="useremail" name="useremail" class="form-control col-sm-7" placeholder="yourname@email.com"></input>
		</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-4 sidebar-login-label">
			<label for="userpassword" class="col-sm-4 control-label">Password</label>
		</div>
		<div class="col-sm-8">
			<input type="password" id="userpassword" name="userpassword" class="form-control col-sm-7" placeholder="Password"></input>
		</div>
	</div>

	<br>
	<br>

	<div class="form-group">
		<div class="row col-sm-offset-2">
			<button class="btn btn-warning col-sm-offset-1 col-sm-8" type="submit">Login</button>
		</div>
	</div>
	
</form>