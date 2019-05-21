  <div class="formclass">
    <br>
    <h1>Candidate Registration</h1>
    <br><br>
    <form  action="/action_page.php">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Confirm Password">
    </div>
    <div class="form-group">
      <label for="cpname">Contact Person Name:</label>
      <input type="text" class="form-control" id="cpname" placeholder="Contact Person Name">
    </div>
    <div class="form-group">
      <label for="cno">Mobile Number:</label>
      <input type="text" class="form-control" id="cno" placeholder="Mobile Number">
    </div>
    <div class="form-group">
      <label for="hed">Highest Education:</label>
      <input type="text" class="form-control" id="hed" placeholder="Highest Education">
    </div>
    <div class="checkbox">
      <!-- <label><input type="checkbox"> Remember me</label> -->
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br>
  </form>

  <a href="<?= base_url() ; ?>">Already Registered !</a>
</div>