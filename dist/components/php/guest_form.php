<form class="col-lg-8 form-horizontal" role="form" action="signup.php" method="post">

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
				<option>Acharya Vihar</option>
				<option>Ag Colony</option>
				<option>Arugul</option>
				<option>Balianta</option>
				<option>Baragarh</option>
				<option>Baramunda</option>
				<option>Bhoi Nagar</option>
				<option>Bhouma Nagar</option>
				<option>Bjb Nagar</option>
				<option>Bomikhal</option>
				<option>Budheswari Colony</option>
				<option>Chandrasekharpur</option>
				<option>Cifa</option>
				<option>Cuttack Road</option>
				<option>Damana</option>
				<option>Delta Colony</option>
				<option>Delta Square</option>
				<option>Dumuduma</option>
				<option>Forest Park</option>
				<option>Gajpati Nagar</option>
				<option>Ganesh Nagar</option>
				<option>Ganga Nagar</option>
				<option>Gautam Nagar</option>
				<option>Ghatikia</option>
				<option>Gopabandhu Nagar</option>
				<option>Industrial Area</option>
				<option>Jagamara</option>
				<option>Jagmohan Nagar</option>
				<option>Jatni Road</option>
				<option>Jaydev Vihar</option>
				<option>Jharpada</option>
				<option>Kalinga</option>
				<option>Kalinga Nagar</option>
				<option>Kapileshwar Prasad</option>
				<option>Khandagiri</option>
				<option>Kharavela Nagar</option>
				<option>Khurda</option>
				<option>Lakshmi Sagar</option>
				<option>Lewis Road</option>
				<option>Madhusudan Nagar</option>
				<option>Mahatab Road</option>
				<option>Mancheswar</option>
				<option>Nayapalli</option>
				<option>Palasuni</option>
				<option>Patia</option>
				<option>Patrapada</option>
				<option>Pokhariput</option>
				<option>Raghunathpur</option>
				<option>Rasulgarh</option>
				<option>Sahid Nagar</option>
				<option>Sailashree Vihar</option>
				<option>Samadhi</option>
				<option>Samantarapur</option>
				<option>Sastri Nagar</option>
				<option>Satya Nagar</option>
				<option>Shree Ram Nagar</option>
				<option>Sum Hospital</option>
				<option>Sundarpada</option>
				<option>Surya Nagar</option>
				<option>Tamando</option>
				<option>Tankapani Road</option>
				<option>Unit 9</option>
				<option>Vani Vihar</option>
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
		          <input type="checkbox" name="tandc" id="tandc"> I Agree to the <a href="tandc.php">Terms and Conditions</a>.
		        </label>
		    </div>
		    <br>
		    </br>
		    <button class="btn btn-success col-sm-offset-1 col-sm-8" disabled="disabled" id="submitbutton" type="submit" name="submit" value="register">Submit</button>
		</div>   
	</div>

</form>