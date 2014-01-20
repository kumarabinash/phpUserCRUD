<?php require_once "dist/components/php/session.php"; ?>
<?php require_once "dist/components/php/functions.php"; ?>


<h3 class="text-center">Reset Password</h3>
<?php 
	if(isset($_GET['success'])){
		if($_GET['success'] == 1){
			?>
			<span class="text-success">Successfully changed your password.</span>
			<?php
		} elseif ($_GET['success'] == 0){
			?>
			<span class="text-danger">Both the passwords entered doesn't match.</span>
			<?php
		}
	}

?>
<br>

<form class="col-lg-8 form-horizontal" role="form" action="change_pass.php" method="post" style="padding:5px;">

	<div class="form-group">
		<label for="usermobile" class="col-sm-4 control-label">Password</label>
		<div class="col-sm-8">
			<input type="password" class="form-control" id="userPassword" name="userpassword" maxlength=20 placeholder="password"></input>
		</div>
	</div>

	<div class="form-group">
		<label for="usermobile" class="col-sm-4 control-label">Re-enter Password</label>
		<div class="col-sm-8">
			<input type="password" class="form-control" id="userPassword" name="reuserpassword" maxlength=20 placeholder="password"></input>
		</div>
	</div>
	
	<div class="form-group">
		<div class="row col-sm-offset-2">
		    </br>
		    <button class="btn btn-success col-sm-offset-1 col-sm-8" id="submitbutton" type="submit" name="passchange" value="passchange">Change Password</button>
		</div>   
	</div>

</form>

<script type="text/javascript">
	$(function(){
		//Highlights active nav-menu
		$("#subsecurity a:contains('Security')").parent().addClass('active');
	});
</script>