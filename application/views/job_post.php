  <div class="formclass">
    <br>
    <h1>Enter Job Details</h1>
    <br><br>

    <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
    ?>

    <?= form_open('pvtrec/addpost'); ?>
    <div class="form-group">
      <label for="tit">Job Title:</label>
      <input type="text" class="form-control" name="title" value="<?= set_value('title');?>" id="tit" placeholder="Job Title ">
      <span class="text-danger"><?= form_error('title');?></span>
    </div>
    <div class="form-group">
      <label for="jloc">Job Location:</label>
      <input type="text" class="form-control" name="location" id="jloc" value="<?= set_value('location');?>" placeholder="Job Location">
      <span class="text-danger"><?= form_error('location');?></span>
    </div>
    <div class="form-group">
      <label for="qreq">Required Qualifications:</label>
      <input type="text" class="form-control" name="qualifications" id="qreq" value="<?= set_value('qualifications');?>" placeholder="Qualifications">
      <span class="text-danger"><?= form_error('qualifications');?></span>
    </div>
    <div class="form-group">
      <label for="rskill">Required Skills:</label>
      <input type="text" class="form-control" name="skills" id="rskill" value="<?= set_value('skills');?>" placeholder="Skills">
      <span class="text-danger"><?= form_error('skills');?></span>
    </div>
    <div class="form-group">
      <label for="expe">Minimum Experience (in yrs):</label>
      <input type="Number" name="experience" class="form-control" id="expe" value="<?= set_value('experience');?>" placeholder="Experience">
      <span class="text-danger"><?= form_error('experience');?></span>
    </div>
    <!-- <div class="form-group">
      <label for="ofadr">Office Address:</label>
      <input type="text" class="form-control" id="ofadr" placeholder="Office Address">
    </div>
    <div class="form-group">
      <label for="cno">Mobile Number:</label>
      <input type="text" class="form-control" id="cno" placeholder="Mobile Number">
    </div> -->
    <div class="checkbox">
      <!-- <label><input type="checkbox"> Remember me</label> -->
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br>
  </form>


</div>