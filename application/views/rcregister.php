  <div class="formclass">
    <br>
    <h1>Employer Registration</h1>
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
      <label for="cname">Company Name:</label>
      <input type="text" class="form-control" id="cname" placeholder="Company Name">
    </div>
    <div class="form-group">
      <label for="cpname">Contact Person Name:</label>
      <input type="text" class="form-control" id="cpname" placeholder="Contact Person Name">
    </div>
    <div class="form-group">
      <label for="des">Designation:</label>
      <input type="text" class="form-control" id="des" placeholder="Designation">
    </div>
    <div class="form-group">
      <label for="ofadr">Office Address:</label>
      <input type="text" class="form-control" id="ofadr" placeholder="Office Address">
    </div>
    <div class="form-group">
      <label for="cno">Mobile Number:</label>
      <input type="text" class="form-control" id="cno" placeholder="Mobile Number">
    </div>
    <div class="checkbox">
      <!-- <label><input type="checkbox"> Remember me</label> -->
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br>
  </form>

  <a href="<?= base_url() ; ?>">Already Registered !</a>
</div>