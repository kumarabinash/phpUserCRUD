<h3>Update your profile.</h3>
<form class="col-lg-8 form-horizontal" role="form" action="change_profile.php" method="post" style="padding:5px;">
		

	<div class="form-group">
		<label for="usersname" class="col-sm-4 control-label">Name</label>
		<div class="col-sm-8">
			<input type="text" id="usersName" name="usersname" class="form-control" value="<?php echo htmlentities($_SESSION['usersname'], ENT_QUOTES, 'utf-8'); ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="useremail" class="col-sm-4 control-label">Email</label>
		<div class="col-sm-8">
			<input type="email" class="form-control" id="userEmail" name="useremail" value="<?php echo htmlentities($_SESSION['useremail'], ENT_QUOTES, 'utf-8'); ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="usermobile" class="col-sm-4 control-label">Mobile Number</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="userMobile" name="usermobile" maxlength=10 value="<?php echo htmlentities($_SESSION['usermobile'], ENT_QUOTES, 'utf-8'); ?>"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="userfb" class="col-sm-4 control-label">Facebook profile</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="userfb" maxlength=30 value="<?php if(isset($_SESSION['userfb'])){echo htmlentities($_SESSION['userfb'], ENT_QUOTES, 'utf-8');} ?>" placeholder="Facebook Userid"></input>
		</div>
	</div>
	
	<div class="form-group">
		<div class="row col-sm-offset-2">
		    <br>
		    </br>
		    <button class="btn btn-success col-sm-offset-1 col-sm-8" id="submitbutton" type="submit" name="profilechange" value="save">Save</button>
		</div>   
	</div>

</form>

<script type="text/javascript">
	$(function(){
		//Highlights active nav-menu
		$("#subprofile a:contains('Profile')").parent().addClass('active');
	});
</script>