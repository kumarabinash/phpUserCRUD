<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>
<form class="col-lg-8 form-horizontal" role="form" action="register_user.php" method="post" style="padding:5px;">
	<?php 
		if(isset($_GET['e'])){ 
			if($_GET['e']==1){ //BUG, IF USER DIRECTLY GOES TO THE WEBSITE, $_SESSION['usermail'] is not set
			//IT shows error 
			?> 
			<label style="color:#e74c3c;" class="control-label text-center">
				<?php echo "User with ".$_SESSION['useremail']." is already registered."; ?>
				<br/>
				<a href="resetpass.php">Forgot Password.</a>
			</label>
			<?php $_SESSION = array(); ?>
			<?php
		}
	}
	?>
		

	<div class="form-group">
		<label for="usersname" class="col-sm-4 control-label">Name</label>
		<div class="col-sm-8">
			<input type="text" id="usersName" name="usersname" class="form-control" placeholder="E.g John Doe"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="useremail" class="col-sm-4 control-label">Email</label>
		<div class="col-sm-8">
			<input type="email" class="form-control" id="userEmail" name="useremail" placeholder="E.g john.doe@example.com"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="usermobile" class="col-sm-4 control-label">Mobile Number</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="userMobile" name="usermobile" maxlength=10 placeholder="E.g 8886444410"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="usermobile" class="col-sm-4 control-label">Password</label>
		<div class="col-sm-8">
			<input type="password" class="form-control" id="userPassword" name="userpassword" maxlength=20 placeholder="password"></input>
		</div>
	</div>
	
	<div class="form-group">
		<div class="row col-sm-offset-2">
			<div class="checkbox col-sm-offset-1 col-sm-10">
		        <label>
		          <input type="checkbox" name="tandc" id="tandc"> I Agree to the <a href="tandc.php">Terms and Conditions</a>.
		        </label>
		    </div>
		    <br>
		    </br>
		    <button class="btn btn-success col-sm-offset-1 col-sm-8" disabled="disabled" id="submitbutton" type="submit" name="submit" value="register">Submit</button>
		</div>   
	</div>

</form>