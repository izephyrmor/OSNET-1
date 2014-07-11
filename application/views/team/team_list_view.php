    <div id="add-new-department-dialog" class="ui-dialog" title="New Team"> 
        Department
        <select class="form-control input-md">

        </select><br />

        Team Leader
        <select class="form-control input-md">

        </select><br />

        Team Name
        <input class="form-control input-md" type="text"/><br />
    </div>

    <script type="text/javascript">
      $(document).ready(function() {

        function addNewTeam() {
          $("#add-new-department-dialog").dialog({
            modal:true,
            width:300,
            buttons: {
              Add: function() {
                alert("!");
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

        <button class="btn btn-primary" id="add-new-team">New Team</button>
          
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
                              <a href="#"><img src="<?php echo site_url(). 'assets/img/assignmember.png'; ?>"></a>
                              <a href="#"><img src="<?php echo site_url(). 'assets/img/delete.gif'; ?>"></a>
                              <a href="#"><img src="<?php echo site_url(). 'assets/img/edit.gif'; ?>"></a>
                            </td>
                          </tr>
                      <?php endforeach; ?>
                    </tbody>
                    
                  </table>

              </div><!-- /.col -->
          </div><!-- /.row -->  
          

          </div></div></div></div>

      </section><!-- /.content -->
    </aside><!-- /.right-side -->
    
</div><!-- ./wrapper -->



