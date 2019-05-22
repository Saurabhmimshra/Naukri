  <div class="formclass">
    <br>
    <h1>Employer Registration</h1>
    <br><br>
    
     <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").' You can login <a href="'. base_url().'recruiter' .'">here</a>.
                    </div>
                    ';
                }
    ?>

    <?= form_open('recruiter/create_recruiter'); ?>

    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>" placeholder="Email">
      <span class="text-danger"><?= form_error('email'); ?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
      <span class="text-danger"><?= form_error('password'); ?></span>    
    </div>
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" name="cpassword" class="form-control" id="cpwd" placeholder="Confirm Password">
      <span class="text-danger"><?= form_error('cpassword'); ?></span>    
    </div>
    <div class="form-group">
      <label for="cname">Company Name:</label>
      <input type="text" name="company_name" class="form-control" id="cname" value="<?= set_value('company_name'); ?>" placeholder="Company Name">
      <span class="text-danger"><?= form_error('company_name'); ?></span>
    </div>
    <div class="form-group">
      <label for="cpname">Contact Person Name:</label>
      <input type="text" name="name" class="form-control" id="cpname" value="<?= set_value('name'); ?>" placeholder="Contact Person Name">
      <span class="text-danger"><?= form_error('name'); ?></span>
    </div>
    <div class="form-group">
      <label for="des">Designation:</label>
      <input type="text" name="designation" class="form-control" id="des" value="<?= set_value('designation'); ?>" placeholder="Designation">
      <span class="text-danger"><?= form_error('designation'); ?></span>
    </div>
    <div class="form-group">
      <label for="ofadr">Office Address:</label>
      <input type="text" name="address" class="form-control" id="ofadr" value="<?= set_value('address'); ?>" placeholder="Office Address">
      <span class="text-danger"><?= form_error('address'); ?></span>
    </div>
    <div class="form-group">
      <label for="cno">Mobile Number:</label>
      <input type="text" name="mobile" class="form-control" id="cno" value="<?= set_value('mobile'); ?>" placeholder="Mobile Number">
      <span class="text-danger"><?= form_error('mobile'); ?></span>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <br><br>
  </form>

  <a href="<?= base_url().'recruiter' ; ?>">Already Registered !</a>
</div>