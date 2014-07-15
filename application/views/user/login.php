<?php $this->load->view('templates/login-header'); ?>
<div class="container">
  <div class="row">
    <?php echo validation_errors(); ?>
  
	<form method="post" accept-charset="utf-8" action="<?php echo site_url(); ?>home/login_validation"  class="login-form col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" />
		<h1></h1>
		
		<!-- Branch: MONIQUE-user_login_07/10/2014 -->
		
		<?php if(isset($login_error_message)): ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php  echo $login_error_message; ?>
			</div>
		<?php endif; ?>
		
		<input type="text" name="username" placeholder="Username" value="" class="form-control" placeholder="Username" autofocus autocomplete="off" required/>
		<input type="password" name="password" placeholder="Password" value="" placeholder="Password" class="form-control" required/>
		<input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block"/>
	</form>
	
  </div>
  <div class="row">
    <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center copyright">&copy; <?php echo date('Y'); ?> OS Net. All Rights Reserved.</p>
  </div>
</div>
<?php $this->load->view('templates/footer'); ?>