<style type="text/css">
  input, textarea {
    margin-bottom:20px;
  }

  h4 {
    margin-bottom:3px;
  }
</style>

<script type="text/javascript">
  $(document).ready(function() {

    function initiateDatePickers() {
      $(".datepick").each(function() {
        $(this).datepicker();
      });
    }

    initiateDatePickers();

  });
</script>

<aside class="right-side">                
        <!-- Content Header (Page header) -->
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

        <!-- Main content -->
        <section class="content">
            
            <div class="row-condensed">
                <div class="col-md-12">

                  <div class="row">
                <div class="col-md-12">
                    <!-- TO DO List -->
                    <div class="box box-primary">
                        <div class="box-header">
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">                                      
                                    <div class="col-xs-12">
                                        <div class="dataTables_filter" id="example1_filter">
                                    <label>
                                    </label>

                                    <label class="pull-right">
                                      
                                    </label>

                                    <!--<div class="row">
                                      <div class="col-md-12"><h3>Personal Info</h3></div>
                                    </div> -->

                                    <div class="row">
                                      <div class="col-md-12">
                                        <button class="btn btn-danger">Update Profile</button>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <?php $profile = $employee_profile[0]; ?>

                                      <div class="col-md-3"><h4><span class="label label-primary">Last Name</span></h4><input value="<?php echo $profile->last_name; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">First Name</span></h4><input value="<?php echo $profile->first_name; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Middle Name</span></h4><input value="<?php echo $profile->middle_name ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Suffix</span></h4><input value="<?php echo $profile->suffix; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-9"><h4><span class="label label-primary">Registered Address</span></h4><textarea class="form-control" autocomplete="off" style="resize:none;"><?php echo $profile->registered_address; ?></textarea></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Zip Code</span></h4><input value="<?php echo $profile->zip_code; ?>" type="text" id="" class="form-control" autocomplate="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Birth Date</span></h4><input value="<?php echo $profile->birth_date; ?>" type="text" id="" class="form-control datepick" autocomplete="off" placeholder="00/00/0000" /></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Gender</span></h4>
                                        <select class="form-control">
                                          <option <?php echo ($profile->gender == "Male") ? "selected" : ""; ?> >Male</option>
                                          <option <?php echo ($profile->gender == "Female") ? "selected" : ""; ?> >Female</option></select>
                                      </div>

                                      <div class="col-md-3"><h4><span class="label label-primary">Marital Status</span></h4>
                                        <select class="form-control" style="width:120px;">
                                          <option <?php echo ($profile->marital_status == "Single") ? "selected" : ""; ?> >Single</option>
                                          <option <?php echo ($profile->marital_status == "Married") ? "selected" : ""; ?> >Married</option>
                                        </select>
                                      </div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Tax Code</span></h4><input value="<?php echo $profile->tax_code; ?>" type="text" id="" class="form-control" autocomplete="off" /></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">SSS</span></h4><input value="<?php echo $profile->sss; ?>" type="text" id="" class="form-control" autocomplete="off" /></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">PHIC</span></h4><input value="<?php echo $profile->phic; ?>" type="text" id="" class="form-control" autocomplete="off" /></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">TIN</span></h4><input value="<?php echo $profile->tin; ?>" type="text" id="" class="form-control" autocomplete="off" /></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">HDMF</span></h4><input value="<?php echo $profile->hdmf; ?>" type="text" id="" class="form-control" autocomplete="off" /></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12"><h3>Spouse</h3></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Last Name</span></h4><input value="<?php echo $profile->spouse_last_name; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">First Name</span></h4><input value="<?php echo $profile->spouse_first_name; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Middle Name</span></h4><input value="<?php echo $profile->spouse_middle_name; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Suffix</span></h4><input value="<?php echo $profile->spouse_suffix; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12"><h3>Work Info</h3></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-9"><h4><span class="label label-primary">Previous Employer</span></h4><input value="<?php echo $profile->previous_employer; ?>" type="text" id="" class="form-control" autocomplete="off"/></div>  
                                      <div class="col-md-3"><h4><span class="label label-primary">Date Ended</span></h4><input value="<?php echo $profile->date_ended; ?>" type="text" id="" class="form-control datepick" autocomplete="off" placeholder="00/00/0000"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12"><h4><span class="label label-primary">Address</span></h4><textarea class="form-control" autocomplete="off" style="resize:none;"><?php echo $profile->address; ?></textarea></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Employment Number</span></h4><input value="<?php echo $profile->employment_number; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Date Started</span></h4><input value="<?php echo $profile->date_started; ?>" class="form-control datepick" id="" autocomplete="off"/></div>  
                                      <div class="col-md-3"><h4><span class="label label-primary">Employment Type</span></h4>
                                        <select class="form-control" value="<?php echo $profile->employment_type; ?>">
                                          <option <?php echo ($profile->employment_type == "Not Set") ? "selected" : ""; ?> >Not Set</option>
                                          <option <?php echo ($profile->employment_type == "Trainee") ? "selected" : ""; ?> >Trainee</option>
                                          <option <?php echo ($profile->employment_type == "Probationary") ? "selected" : ""; ?> >Probationary</option>
                                          <option <?php echo ($profile->employment_type == "Independent Contractor") ? "selected" : ""; ?> >Independent Contractor</option>
                                          <option <?php echo ($profile->employment_type == "Regular") ? "selected" : ""; ?> >Regular</option>
                                          <option <?php echo ($profile->employment_type == "Not Assigned") ? "selected" : ""; ?> >Not Assigned</option>
                                        </select>
                                      </div>

                                      <div class="col-md-3"><h4><span class="label label-primary">Contract Period</span></h4><input value="<?php echo $profile->contract_period; ?>" class="form-control" id="" autocomplete="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Email</span></h4><input value="<?php echo $profile->email; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Facebook URL</span></h4><input value="<?php echo $profile->facebook_url; ?>" class="form-control" id="" autocomplete="off"/></div>  
                                      <div class="col-md-3"><h4><span class="label label-primary">Branch / Site</span></h4><input value="<?php echo $profile->branch_site; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Department</span></h4>
                                        <select class="form-control">
                                          <?php foreach($department_list as $department): ?>
                                            <option <?php echo ($profile->department == $department->department_name) ? "selected" : ""; ?> ><?php echo $department->department_name; ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Immediate Superior</span></h4><input value="<?php echo $profile->immediate_superior; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Position</span></h4><input value="<?php echo $profile->position; ?>" class="form-control" id="" autocomplete="off"/></div>  
                                      <div class="col-md-3"><h4><span class="label label-primary">Salary Type</span></h4><input value="<?php echo $profile->salary_type; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Payreg Names</span></h4><input value="<?php echo $profile->payreg_names; ?>" class="form-control" id="" autocomplete="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-3"><h4><span class="label label-primary">Bank Account #</span></h4><input value="<?php echo $profile->bank_account_number; ?>" class="form-control" id="" autocomplete="off"/></div>
                                      <div class="col-md-3"><h4><span class="label label-primary">Status</span></h4>
                                        <select class="form-control">
                                          <option <?php echo ($profile->status == "Active") ? "selected" : ""; ?> >Active</option>
                                          <option <?php echo ($profile->status == "Resigned") ? "selected" : ""; ?> >Resigned</option>
                                        </select>
                                      </div>  
                                      <div class="col-md-6"><h4><span class="label label-primary">Change Password</span></h4><input value="<?php echo $profile->password; ?>" class="form-control" id="" autocomplete="off"/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                        <button class="btn btn-danger">Update Profile</button>
                                      </div>
                                    </div>

                                    <?php
                                      
                                      /*
                                      echo "<pre>";
                                      print_r($employee_profile);
                                      echo "</pre>"; */
                                    ?>
                                    <!--<button id="add-new-dept">Add New Department</button>-->

                                        </div>
                                    </div>
                                </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <!-- End Announcement -->
                </div>
            </div><!-- /.row -->  

                </div><!-- /.col -->
            </div><!-- /.row -->  
            

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
    
</div><!-- ./wrapper -->