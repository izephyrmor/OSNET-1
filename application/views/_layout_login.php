<?php $this->load->view('templates/login-header'); ?>
  <div class="container">
    <div class="row">
      <?php $this->load->view($subview); ?>
    </div>
    <div class="row">
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center copyright">&copy; <?php echo date('Y'); ?> OSnet. All Rights Reserved.</p>
    </div>
  </div>

<?php $this->load->view('templates/footer'); ?>