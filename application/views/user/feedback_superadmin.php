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
                                       
										<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">


										<thead>
											<tr role="row">
											<th class="sorting_asc" role="columnheader" tabindex="0" 
											aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
											aria-label="Rendering engine: activate to sort column descending" 
											style="width: 232px;">User</th>

											<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" 
											rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" 
											style="width: 348px;">Feature</th>

											<th class="sorting" role="columnheader" 
											tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
											aria-label="Platform(s): activate to sort column ascending" 
											style="width: 301px;">Subject</th>
											
											<th class="sorting" role="columnheader" 
											tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
											aria-label="Platform(s): activate to sort column ascending" 
											style="width: 301px;">Text</th>
											 
											<th class="sorting" role="columnheader" 
											tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
											aria-label="Platform(s): activate to sort column ascending" 
											style="width: 301px;">Date Created</th>
											
											<th class="sorting" role="columnheader" 
											tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
											aria-label="Platform(s): activate to sort column ascending" 
											style="width: 301px;">Status</th>
											
											<th class="sorting" role="columnheader" 
											tabindex="0" aria-controls="example1" rowspan="1" colspan="1" 
											aria-label="Engine version: activate to sort column ascending" 
											style="width: 200px;">Action</th>
										</thead>

										<tbody role="alert" aria-live="polite" aria-relevant="all">
										
											<?php foreach($feedback as $f): ?>
                                                <tr>
                                                    <td><?php echo $f->user_id; ?></td>
                                                    <td><?php echo $f->feature_name; ?></td>
                                                    <td><?php echo $f->subject; ?></td>
                                                    <td><?php echo $f->text; ?></td>
                                                    <td><?php echo $f->date_created; ?></td>
                                                    <td><?php echo $f->status; ?></td>
													<td>
                                                        <a id="archieve" href="#"><img src="<?php echo site_url("assets/img/delete.gif"); ?>"></a>
                                                        <a id="edit" href="#"><img src="<?php echo site_url("assets/img/edit.gif"); ?>"></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
										</tbody>
									
									</table><!--<div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example1_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>-->
                                </div><!-- /.box-body -->
                                <!--<div class="box-footer clearfix no-border">
                                    <button class="btn btn-default pull-right " data-toggle="modal" data-target="#department-modal">
                                      <i class="fa fa-sitemap"></i> Add Department
                                    </button>
                                </div> -->
                            </div><!-- /.box -->
                            <!-- End Announcement -->
                        </div>
                    </div>

		</section><!-- /.content -->
	</aside><!-- /.right-side -->
		
</div><!-- ./wrapper -->
