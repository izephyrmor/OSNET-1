<?php $this->load->view('templates/login-header'); ?>
<div class="container">
  <div class="row">
    <?php echo validation_errors(); ?>
	
	<form method="post" accept-charset="utf-8" action="<?php site_url(); ?>/user/login"  class="login-form col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"  id="myform" />
		<input type="text" name="username" palceholder="Username" value="" required/>
		<input type="password" name="password" placeholder="Username" value="" required/>
		<input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
	</form>
	jsfhk
    <?php echo form_open(site_url(), $form_attributes);?>
        <?php echo form_input('username', '', 'class="form-control" placeholder="Username" autofocus'); ?>
        <?php echo form_password('password', '', 'required placeholder="Password" class="form-control"'); ?>
        <?php echo form_submit('submit', 'Login', 'class="btn btn-lg btn-primary btn-block"'); ?>
    <?php echo form_close();?>
  </div>
  <div class="row">
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center copyright">&copy; <?php echo date('Y'); ?> OSnet. All Rights Reserved.</p>
  </div>
</div>
<?php $this->load->view('templates/footer'); ?>