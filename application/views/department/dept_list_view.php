<!-- Right side column. Contains the navbar and content of the page -->

            <div id="add-new-department-dialog" class="modal-dialog" title="New Department"> 
                <input class="form-control input-md" id="new-dept-input" type="text" placeholder="Create Department"/><br />
            </div>

            <script type="text/javascript">
                var ajax = "<?php echo site_url(). 'index.php/ajax/department_ajax/'; ?>";

                $(document).ready(function() {

                    function addNewDepartment() {
                        
                        $("#add-new-department-dialog").dialog({
                            modal:true,
                            width:300,
                            buttons: {
                                Add: function() {
                                    var new_dept = $("#new-dept-input").val();

                                    if (new_dept.length >= 10) {
                                      $.post(ajax + "addDepartment", {new_dept: new_dept}, function(response){
                                        location.reload();
                                      });
                                    }

                                    $(this).dialog("close");
                                },
                                Cancel: function() {
                                    $(this).dialog("close");
                                }
                            }
                        });

                    }

                    $(document).on("click", "#add-new-dept", function() {
                        addNewDepartment();
                    });

                    $(document).on("click", "#edit", function() {
                        alert("edit");
                    });

                    $(document).on("click", "#archieve", function() {
                        alert("archieve");
                    });

                    $(document).on("keydown keyup", "#search", function() {
                        var search_key = $("#search").val();

                        $.post(ajax + "search_department", {key: search_key}, function(response) {
                            $("tbody").html("");
                            $("tbody").append(response);
                        });
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
                                            <label>
                                                <button class="btn btn-primary" id="add-new-dept" data-toggle="modal" data-target="#department-modal">
                                                  <i class="fa fa-sitemap"></i> Add Department
                                                </button>
                                            </label>

                                            <label class="pull-right">Search:  <input id="search" type="text" aria-controls="example1"></label>
                                            <!--<button id="add-new-dept">Add New Department</button>-->

                                                </div>
                                            </div>
                                        </div>
                                            <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                                        
 
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" role="columnheader" tabindex="0" 
                                                aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                                                aria-label="Rendering engine: activate to sort column descending" 
                                                style="width: 232px;">Department</th>
                                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" 
                                                rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" 
                                                style="width: 348px;">Manager</th><th class="sorting" role="columnheader" 
                                                tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                                                aria-label="Platform(s): activate to sort column ascending" 
                                                style="width: 301px;">Employee</th><th class="sorting" role="columnheader" 
                                                tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
                                                aria-label="Engine version: activate to sort column ascending" 
                                                style="width: 200px;">Action</th><!--<th class="sorting" 
                                                role="columnheader" tabindex="0" aria-controls="example1" 
                                                rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" 
                                                style="width: 141px;">CSS grade</th></tr>-->
                                        </thead>
                                        
                                        <!--<tfoot>
                                            <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                        </tfoot> -->
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                            <?php foreach($department_list as $value): ?>
                                                <tr>
                                                    <td><?php echo $value->department_name; ?></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>
                                                        <a id="archieve" href="#"><img src="<?php echo site_url("assets/img/delete.gif"); ?>"></a>
                                                        <a id="edit" href="#"><img src="<?php echo site_url("assets/img/edit.gif"); ?>"></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody></table><!--<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>-->
                                </div><!-- /.box-body -->
                                <!--<div class="box-footer clearfix no-border">
                                    <button class="btn btn-default pull-right " data-toggle="modal" data-target="#department-modal">
                                      <i class="fa fa-sitemap"></i> Add Department
                                    </button>
                                </div> -->
                            </div><!-- /.box -->
                            <!-- End Announcement -->
                        </div>
                    </div><!-- /.row -->  

                        </div><!-- /.col -->
                    </div><!-- /.row -->  
                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->