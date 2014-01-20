<form class="col-lg-8 form-horizontal" role="form">

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
		<label for="userCity" class="col-sm-4 control-label">City</label>
		<div class="col-sm-8">
			<select class="form-control" name="city">
				<option>Bhubaneswar</option>
				<option>Cuttack</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="userLocality" class="col-sm-4 control-label">Locality</label>
		<div class="col-sm-8">
			<select class="form-control" name="local">
				<option>Sailashreevihar</option>
				<option>Niladrivihar</option>
				<option>Jayadev Vihar</option>
				<option>Acharya Vihar</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="useraddress" class="col-sm-4 control-label">Detailed Address</label>
		<div class="col-sm-8">
			<textarea class="form-control" rows="2" id="userAddress" name="useraddress" placeholder="E.g FR-48/6, Phase-2"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="userpin" class="col-sm-4 control-label">PIN Code</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="userPIN" name="userpin" maxlength=6 placeholder="E.g 844001"></input>
		</div>
	</div>
	<div class="form-group">
		<div class="row col-sm-offset-2">
			<div class="checkbox col-sm-offset-1 col-sm-10">
		        <label>
		          <input type="checkbox"> I Agree to the Terms and Conditions.
		        </label>
		    </div>
		    <br>
		    </br>
		    <button class="btn btn-success col-sm-offset-1 col-sm-8" type="submit">Submit</button>
		</div>   
	</div>

</form>