
	<div class="container">
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#cdzone">Candidate Zone</a></li>
		  <li><a data-toggle="tab" href="#rczone">Recruiter Zone</a></li>
		</ul>

		<div class="tab-content">
		  <div id="cdzone" class="tab-pane fade in active">
		    <div class="container">
		    	<h1>Candidate Login</h1>
		    	<br><br>

		    	<div class="formclass">
		    		<form  action="/action_page.php">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd" placeholder="Password">
					  </div>
					  <div class="checkbox">
					    <!-- <label><input type="checkbox"> Remember me</label> -->
					  </div>
					  <button type="submit" class="btn btn-default">Login</button>
					  <br><br>
					</form>

					<a href="<?= base_url(),'register/candidate' ?>">Register Now</a>
		    	</div>

		    </div>
		  </div>
		  <div id="rczone" class="tab-pane fade">
		    <div class="container">
		    	<h1>Recruiter Login</h1>

		    	<br><br>
		    	<div class="formclass">
		    		<form  action="/action_page.php">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="pwd" placeholder="Password">
					  </div>
					  <div class="checkbox">
					    <!-- <label><input type="checkbox"> Remember me</label> -->
					  </div>
					  <button type="submit" class="btn btn-default">Login</button>
					  <br><br>
					</form>

					<a href="<?= base_url().'register/recruiter' ?>">Register Now</a>
		    	</div>
		    	

		    </div>
		  </div>
		  
	</div>

