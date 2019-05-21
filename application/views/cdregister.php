  <div class="formclass">
    <br>
    <h1>Candidate Registration</h1>
    <br><br>


    <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").' You can login <a href="'. base_url() .'">here</a>.
                    </div>
                    ';
                }
    ?>

    <?= form_open('register/create_candidate'); ?>
    
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email')?>" placeholder="Email">
      <span class="text-danger"><?= form_error('email'); ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
      <span class="text-danger"><?= form_error('password'); ?></span>
    </div>
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" name="cpassword" id="cpwd" placeholder="Confirm Password">
      <span class="text-danger"><?= form_error('cpassword'); ?></span>
    </div>
    <div class="form-group">
      <label for="cpname">Contact Person Name:</label>
      <input type="text" class="form-control" name="name" id="cpname" value="<?= set_value('name')?>" placeholder="Contact Person Name">  
      <span class="text-danger"><?= form_error('name'); ?></span>
    </div>
    <div class="form-group">
      <label for="cno">Mobile Number:</label>
      <input type="text" class="form-control" name="mobile" id="cno" value="<?= set_value('mobile')?>" placeholder="Mobile Number">
      <span class="text-danger"><?= form_error('mobile'); ?></span>
    </div>
    <div class="form-group">
      <label for="hed">Highest Education:</label>
      <input type="text" class="form-control" id="hed" name="education" value="<?= set_value('education')?>" placeholder="Highest Education">
      <span class="text-danger"><?= form_error('education'); ?></span>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <br><br>
  </form>

  <a href="<?= base_url() ; ?>">Already Registered !</a>
</div>