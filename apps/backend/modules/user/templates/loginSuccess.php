<?php use_helper('Validation') ?>
<?php  echo form_tag('@login') ?>

<section class="login">
  <div class="login-inner">
    <div class="email-login">
      <legend>管理者ログイン</legend>
      <div class="row">
        <div class="form-group">
          <?php echo form_error('name') ?>
          <?php echo input_tag('name', '', 'class="form-control bordered-input" placeholder="Name"') ?>
        </div>
        <div class="form-group">
          <?php echo form_error('password') ?>
          <?php echo input_password_tag('password', '', 'class="form-control bordered-input" placeholder="Password"') ?>
        </div>
        <div class="pull-right">
          <?php echo submit_tag('ログイン', 'class="btn"') ?>
        </div>
      </div>
    </div>
  </div>
</section>
</form>