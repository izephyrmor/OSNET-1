<div class="wrapper row-offcanvas row-offcanvas-left">
	   
	<aside class="right-side">                
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			   Feedback
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			
			<div class="col-md-4">
				<form method="post" accept-charset="utf-8" action="<?php echo site_url(); ?>home/create_feedback"  class="login-form col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" />
					<h4 style="text-align:left"> Subject </h4>
					<input type="text" name="subject" placeholder="Subject" value="" class="form-control" placeholder="Username" autofocus autocomplete="off" required/>
					<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>"/>
					<br>
					<h4 style="text-align:left"> Select Feature </h4>
					<select name="feature" class="col-lg-12">
						<?php foreach($features as $feature): ?>
							<?php foreach($feature as $f): ?>
								<?php echo "<option>".$f."</option>"; ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</select>
					<br>
					<br>
					<h4 style="text-align:left"> Feedback </h4>
					<textarea name="text" placeholder="Enter feedback here..." value="" class="form-control" autofocus autocomplete="off" required/></textarea>
					<br>
					<input type="submit" name="submit" value="Submit Feedback" class="btn btn-lg btn-primary btn-block"/>
				</form>
			</div>

		</section><!-- /.content -->
	</aside><!-- /.right-side -->
		
</div><!-- ./wrapper -->
