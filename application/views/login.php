
	

		    <div class="container">
		    	

		      	<div class="formclass">
		      	<h1><?= $heading ?> Login</h1>
		    	<br><br>
		     <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-danger">
                        '.$this->session->flashdata	("message").'
                    </div>
                    ';
                }
    		?>
		    		<?= form_open($path); ?>
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>" id="email" placeholder="Email">
					    <span class="text-danger"><?= form_error('email'); ?></span>
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" name="password" id="pwd" value="<?= set_value('password'); ?>" placeholder="Password">
					    <span class="text-danger"><?= form_error('password'); ?></span>
					  </div>
					  <div class="checkbox">
					    <!-- <label><input type="checkbox"> Remember me</label> -->
					  </div>
					  <button type="submit" class="btn btn-default">Login</button>
					  <br><br>
					</form>

					<a href="<?= base_url().$register_path; ?>">Register Now</a>
		    	</div>

		    </div>
		  </div>
		 
		  
	

