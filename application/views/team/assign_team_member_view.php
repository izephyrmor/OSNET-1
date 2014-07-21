<style type="text/css">
  #team-members {
    margin-top:3px;
    width:518px;
    height:318px;
    font-size:15px;
  }

  input, textarea {
    margin-bottom:20px;
  }

  h4 {
    margin-bottom:3px;
  }

  button {
    margin-top:5px;
  }
</style>

<aside class="right-side">                
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              <?php if(isset($title)): ?>
                <?php echo $title; ?>
              <?php endif; ?>
            </h1>
            <!--<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            </ol> -->
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

                                    <?php $team = $team[0]; ?>

                                    <div class="row">
                                      <div class="col-md-4"><h4><span class="label label-primary">Team Name</span></h4><input class="form-control" id="" value="<?php echo $team->team_name; ?>" disabled/></div>
                                      <div class="col-md-4"><h4><span class="label label-primary">Department</span></h4><input class="form-control" id="" value="" disabled/></div>
                                      <div class="col-md-4"><h4><span class="label label-primary">Team Leader</span></h4><input class="form-control" id="" value="" disabled/></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12"><h4><span class="label label-primary">Team Members</span></h4>
                                        <select size="5" class="form-control" id="team-members" >
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                          <option>test</option>
                                        </select>
                                      </div>   
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6"><button class="btn btn-primary">Edit</button></div>
                                    </div>

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