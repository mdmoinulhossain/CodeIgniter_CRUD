<?php $this->load->view('loader/header'); ?>
<div class="container">
    <h3>Update User</h3>
    <hr>
  <form class="row g-3" method="post" name="CreateUser" action="<?php echo base_url("User/edit/").$user['user_id']; ?>">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">First name</label>
      <input type="text" class="form-control is-invalid" id="validationServer01" value="<?php echo set_value('fname', $user['Firstname']); ?>" name="fname">
      <div class="invalid-feedback">
        <?php echo form_error('fname'); ?>
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">Last name</label>
      <input type="text" class="form-control is-invalid" id="validationServer02" value="<?php echo set_value('lname', $user['Lastname']); ?>" name="lname">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
      <?php echo form_error('lname'); ?>
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServerUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend3">@</span>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" value="<?php echo set_value('email', $user['email']); ?>" name="email">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        <?php echo form_error('email'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" value="<?php echo set_value('city', $user['city']); ?>" name="city">
      <div id="validationServer03Feedback" class="invalid-feedback">
      <?php echo form_error('city'); ?>
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationServer05" class="form-label">Zip code</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" value="<?php echo set_value('zip', $user['zip']); ?>" name="zip">
      <div id="validationServer05Feedback" class="invalid-feedback">
      <?php echo form_error('zip'); ?>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Update</button>
      <a href="<?php echo base_url('/') ?>" class="btn btn-dark">Cancel</a>
    </div>
  </form>
</div>
<br>
<?php $this->load->view('loader/footer'); ?>