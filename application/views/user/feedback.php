<?php $this->load->view('templates/header'); ?>
<!-- CSS -->
<!-- fullCalendar -->
<link href="<?php echo site_url('assets/css/fullcalendar/fullcalendar.css');?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo site_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
<!-- daterange picker -->
<link href="<?php echo site_url('assets/css/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
<!-- END CSS -->

<!-- SCRIPTS -->
<!-- I did this like this because I wanted to. LOL - ERIC -->
<!-- fullCalendar -->
<script src="<?php echo site_url('assets/js/plugins/fullcalendar/fullcalendar.min.js');?>" type="text/javascript"></script>
<script src="<?php echo site_url('assets/js/plugins/fullcalendar/gcal.js');?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo site_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="<?php echo site_url('assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript'); ?>"></script>
<!-- home page script -->
<script src="<?php echo site_url('assets/js/pages/home.js');?>"></script>
<!-- END SCRIPTS -->

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
							<textarea name="feedback" placeholder="Enter feedback here..." value="" class="form-control" autofocus autocomplete="off" required/></textarea>
							<br>
							<input type="submit" name="submit" value="Submit Feedback" class="btn btn-lg btn-primary btn-block"/>
						</form>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->
        
        <!-- ADD ANNOUNCEMENT MODAL -->
        <div class="modal fade" id="announcement-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-thumb-tack"></i> Add Announcement</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Title:</span>
                                    <input name="announcement_title" type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                      Duration:
                                    </span>
                                    <input type="text" class="form-control pull-right" id="announcement-duration"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <textarea name="announcement_message" id="announcement_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-thumb-tack"></i> Save Announcement</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <!-- VIEW ANNOUNCEMENT MODAL -->
        <div class="modal fade" id="announcement-item-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-thumb-tack"></i> Announcement</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div class="form-group">

                                    <h4>Title</h4>
                                    <i class="duration">07/09/2014 - 07/09/2014</i>
                                    <div class="announcement">Hey Apple!</div>

                            </div>
                        </div>
                        <div class="modal-footer clearfix">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <!-- normal users can't see this -->
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-thumb-tack"></i> Edit Annoucement</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<?php $this->load->view('templates/footer'); ?>