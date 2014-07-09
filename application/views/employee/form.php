<?php $this->load->view('templates/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('assets/img/face.png')?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Eric</p>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url(); ?>">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Profile</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My Profile</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>View Payslip</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Employees</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Employee List</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Add Employee</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Edit Employee</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span>Payslip</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Print Payslip</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Edit Payroll</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-plane"></i>
                                <span>Leave</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Apply Leave</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Leave Statistics</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Leave List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gavel"></i>
                                <span>Infractions</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Add Infraction</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Infractions List</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Employee Profile
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-users"></i> Employee Profile</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    
                    <!-- My profile info -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                   <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs" role="tablist">
                                      <li class="active">
                                        <a href="#personal_info" data-toggle="tab">PERSONAL INFO</a>
                                      </li>
                                      <li>
                                        <a href="#work_info" data-toggle="tab">WORK INFO</a>
                                      </li>
                                    </ul>
                                    <div class="tab-content">
                                      <div class="tab-pane fade in active" id="personal_info">
                                        <div class="row">
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Last Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>First Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Middle Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Suffix</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="text" class="lastname form-control" placeholder="Last Name" name="lastname" data-toggle="tooltip" data-original-title="Last Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="firstname form-control" placeholder="First Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="middlename form-control" placeholder="Middle Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="suffix form-control" placeholder="Suffix"/>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-9">
                                                <label>Address</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Zip Code</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-9">
                                                <textarea class="address col-md-9 form-control" row="3" placeholder="Address"></textarea>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class=" zipcode col-md-3 form-control" placeholder="Zip Code"/>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Birth Date</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Gender</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Marital Status</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Tax Code</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="date" class="birthdate form-control" name="birthdate" />
                                              </div>
                                              <div class="col-md-3">
                                                <select type="text" class="gender form-control">
                                                  <option value="male">Male</option>
                                                  <option value="female">Female</option>
                                                </select>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="maritalstatus form-control" placeholder="Marital Status" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="taxcode form-control" placeholder="Tax Code"/>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>SSS</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>PHIC</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>TIN</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>HDMF</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="text" class="sss form-control" placeholder="SSS" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="phic form-control" placeholder="PHIC" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="tin form-control" placeholder="TIN" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="hdmf form-control" placeholder="HDMF"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr />
                                          </div>
                                          <div class="col-md-12">
                                            <h3>Spouse</h3>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Last Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>First Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Middle Name</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Suffix</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="text" class="spouselastname form-control" placeholder="Last Name" name="lastname" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="spousefirstname form-control" placeholder="First Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="spousemiddlename form-control" placeholder="Middle Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="spousesuffix form-control" placeholder="Suffix"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr />
                                          </div>
                                          <div class="col-md-12">
                                            <h3>Dependents</h3>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="text" class="lastname form-control" placeholder="Last Name" name="lastname" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="firstname form-control" placeholder="First Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="middlename form-control" placeholder="Middle Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="suffix form-control" placeholder="Suffix"/>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="lastname form-control" placeholder="Last Name" name="lastname" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="firstname form-control" placeholder="First Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="middlename form-control" placeholder="Middle Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="suffix form-control" placeholder="Suffix"/>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="lastname form-control" placeholder="Last Name" name="lastname" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="firstname form-control" placeholder="First Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="middlename form-control" placeholder="Middle Name" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="suffix form-control" placeholder="Suffix"/>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                      <div class="tab-pane fade" id="work_info">
                                        <div class="row">
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-9">
                                                <label>Previous Employer</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Date Ended</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-9">
                                                <textarea class="previousemployer col-md-9 form-control" row="3" placeholder="Previous Employer"></textarea>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="date" class="previousemployerdateended col-md-3 form-control" placeholder="Date Ended"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <label>Previous Employer Address</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <textarea class="previousemployeraddress col-md-12 form-control" row="3" placeholder="Previous Employer Address"></textarea>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <hr />
                                          </div>
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Employee #</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Date Started</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Employment Type</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Contract Period</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="text" class="employeenumber form-control" placeholder="Employee #" name="Employee #" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="date" class="datestarted form-control" placeholder="Date Started" />
                                              </div>
                                              <div class="col-md-3">
                                                <select type="text" class="spousemiddlename form-control" placeholder="Employment Type" >
                                                  <option value="0">Not Assigned</option>
                                                  <option value="1">Trainee</option>
                                                  <option value="2">Probationary</option>
                                                  <option value="3">Independent Contractor</option>
                                                  <option value="4">Regular</option>
                                                </select>
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="contractperiod form-control" placeholder="Contract Period"/>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Email</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Facebook URL</label>
                                              </div>
                                              <div class="col-md-6"></div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="email" class="email form-control" placeholder="Email" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="facebookurl form-control" placeholder="Facebook URL" />
                                              </div>
                                              <div class="col-md-6"></div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Branch/Site</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Department</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Immediate Supervisor</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Position</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="email" class="branch form-control" placeholder="Branch/Site" />
                                              </div>
                                              <div class="col-md-3">
                                                <select type="text" class="department form-control" >
                                                  <option value="2">Web Development</option>
                                                </select>
                                              </div>
                                               <div class="col-md-3">
                                                <input type="email" class="immediatesupervisor form-control" placeholder="Immediate Supervisor" />
                                              </div>
                                               <div class="col-md-3">
                                                <input type="text" class="position form-control" placeholder="Position" />
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Salary Type</label>
                                              </div>
                                              <div class="col-md-3">
                                                <label>Payreg Names</label>
                                              </div>
                                              <div class="col-md-6">
                                                <label>Bank Account #</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <input type="email" class="salarytype form-control" placeholder="Salary Type" />
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" class="payregnames form-control" placeholder="Payreg Names" />
                                              </div>
                                               <div class="col-md-6">
                                                <input type="text" class="bankaccount form-control" placeholder="Bank Account #" />
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <label>Status</label>
                                              </div>
                                              <div class="col-md-9"></div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 form-group">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <select class="status form-control" placeholder="Status" >
                                                  <option value="1">Active</option>
                                                  <option value="2">Resigned</option>
                                                </select>
                                              </div>
                                              <div class="col-md-9"></div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix no-border"></div>
                            </div><!-- /.box -->

                        </div>

                    </div><!-- /.row -->  
                    <!-- My profile info -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->
        <!-- SCRIPTS -->
        <!-- I did this like this because I wanted to. LOL - ERIC -->
        <!-- END SCRIPTS -->
<?php $this->load->view('templates/footer'); ?>