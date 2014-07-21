  <div id="member-assignment" class="modal-dialog" title="Team Members Assignment">
    <div class="row">

      <div class="col-md-12">
        <select class="form-control">
          <?php foreach($department_list as $department): ?>
            <option><?php echo $department->department_name; ?></option>
          <?php endforeach; ?>
        </select>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
        <input class="form-control" id="" type="text"/>
      </div>

      <div class="col-md-6">
        <input class="form-control" id="" type="text"/>
      </div>

    </div>
  </div>

  <script type="text/javascript">
    //var ajax_target = "<?php echo site_url(). 'index.php/ajax/department_ajax/'; ?>";

    function renderAssignTeamMemberModal() {
      $("#member-assignment").dialog({
        modal:true,
        resizable:false,
        width:450,
        buttons: {
          Save: function() {
            /*
            var department = $("#new-team-department").val();
            var team_leader = $("#new-team-leader").val();
            var team_name = $("#new-team-name").val();

            $.post(ajax_target + "", {department: department, team_leader: team_leader, team_name: team_name}, function(response) {

            }); */
          },
          Cancel: function() {
            $(this).dialog("close");
          }
        }
      });
    }

    function bindButtonEvents() {
      /*
      $(document).on("click", "#assign-member", function() {
        renderAssignTeamMemberModal();
        console.log("assign-member");
      }); */

      $(document).on("click", "#delete", function() {
        console.log("delete");
      });

      $(document).on("click", "#edit", function() {
        console.log("edit");
      });
    }

    $(document).ready(function() {


      bindButtonEvents();

    });
  </script>

  <div id="add-new-department-dialog" class="modal-dialog" title="New Team"> 
    Department
    <select id="new-team-department" class="form-control input-md">
      <?php foreach($department_list as $department): ?>
        <option><?php echo $department->department_name; ?></option>
      <?php endforeach; ?>
    </select><br />

    Team Leader
    <select id="new-team-leader" class="form-control input-md">

    </select><br />

    Team Name
    <input id="new-team-name" class="form-control input-md" type="text"/><br />
  </div>

  <script type="text/javascript">
    $(document).ready(function() {

      var ajax_target = "<?php echo site_url(). 'index.php/ajax/team_ajax/'; ?>";

      function addNewTeam() {
        $("#add-new-department-dialog").dialog({
          modal:true,
          width:300,
          buttons: {
            Add: function() {
              var department = $("#new-team-department").val();
              var team_leader = $("#new-team-leader").val();
              var team_name = $("#new-team-name").val();

              //alert(department + " " + team_leader + " " + team_name);
              
              $.post(ajax_target + "ajaxAddNewTeam", {department: department, team_leader: team_leader, team_name: team_name}, function(response) {
                //alert(response);
              });

              $(this).dialog("close");
            }, 
            Cancel: function() {
              $(this).dialog("close");
            }
          }
        });
      }

      $(document).on("click", "#add-new-team", function() {
        addNewTeam();
      });

      $(document).on("keydown keyup", "#search", function() {
        var search_key = $("#search").val();

        //$.post();
      });

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

                                                <label class="pull-left">
                                                  <button class="btn btn-primary" id="add-new-team">New Team</button>
                                                </label>

                                                <label class="pull-right">
                                                  Search: <input id="search" type="text" aria-controls="example1">
                                                </label>
                                              </div>
                                          </div>
                                      </div>
                                          <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                      
                                  <div class="row-condensed">
                                      <div class="col-md-12">

                                          <table class="table">

                                            <thead>
                                              <th>
                                                <tr>
                                                  <td><b>Team</b></td>
                                                  <td><b>Team Leader</b></td>
                                                  <td><b>Member Count</b></td>
                                                  <td><b>Action</b></td>
                                                </tr>
                                              </th>
                                            </thead>
                                            
                                            <tbody>
                                              <?php foreach($team_list as $key): ?>
                                                  <tr>
                                                    <td><?php echo $key->team_name; ?></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                      <a id="assign-member" href="<?php echo site_url(). 'team/render_edit_team_member?team_id='. $key->team_id; ?>"><img src="<?php echo site_url(). 'assets/img/assignmember.png'; ?>"></a>
                                                      <a id="delete" href="#"><img src="<?php echo site_url(). 'assets/img/delete.gif'; ?>"></a>
                                                      <a id="edit" href="#"><img src="<?php echo site_url(). 'assets/img/edit.gif'; ?>"></a>
                                                    </td>
                                                  </tr>
                                              <?php endforeach; ?>
                                            </tbody>
                                            
                                          </table>

                                      </div><!-- /.col -->
                                  </div><!-- /.row -->  

                                      <!--<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>-->
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



