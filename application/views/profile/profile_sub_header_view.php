<aside class="right-side">                

  <section class="content-header">
      <h1>
        <?php if(isset($title)): ?>
          <?php echo $title; ?>
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
  </section>

  <section class="content">
                    
    <div class="row-condensed">

        <div class="row">
        <div class="col-md-8">
            <!-- TO DO List -->
            <div class="box box-primary">
                <div class="box-header">
                </div><!-- /.box-header -->

                <div class="box-body table-responsive">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        
                    <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                        
                      <div class="row-condensed">
                          <div class="col-md-12">

                              <ul class="nav nav-tabs" role="tablist">
                                  <li class="<?php if(isset($profile_active)) {echo $profile_active;} ?>">
                                    <a href="<?php echo site_url(). 'index.php/profile/render_profile'; ?>">Profile</a></li>
                                  <li class="<?php if(isset($my_account_active)) {echo $my_account_active;} ?>">
                                    <a href="<?php echo site_url(). 'index.php/profile/render_profile_my_account'; ?>">My Account</a></li>
                              </ul>