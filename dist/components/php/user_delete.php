<h3>Do you really want to delete your account?</h3>



<?php 
	if(isset($_GET['delete'])){
		if($_GET['delete'] == 1 || $_GET['delete'] == 'fail'){
			?>

			<form class="col-lg-8 form-horizontal" role="form" action="confirm_delete.php" method="post" style="padding:5px;">
			<?php
			if($_GET['delete'] == 'fail'){
				echo "<span class=\"text-danger\">Wrong Password!!</span>";
			}
			?>
				<div class="form-group">
					<label for="password" class="col-sm-4 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="userPassword" name="userpassword" maxlength=20 placeholder="Password"></input>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row col-sm-offset-2">
					    </br>
					    <button class="btn btn-danger col-sm-offset-1 col-sm-8" id="submitbutton" type="submit" name="deleteaccount" value="delete">Confirm Delete</button>
					</div>   
				</div>

			</form>


			<?php
		}
	} else {
		?>
		<a href="profile.php" class="btn btn-success">No</a>
		<a href="profile.php?id=3&delete=1" class="btn btn-danger">Yes</a>
		<?php
	}
?>

<script type="text/javascript">
	$(function(){
		//Highlights active nav-menu
		$("#subdelete a:contains('Delete')").parent().addClass('active');
	});
</script>