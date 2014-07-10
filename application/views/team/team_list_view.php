<!-- Right side column. Contains the navbar and content of the page -->
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
                        <div class="col-md-3">

                            <table class="table">

                              <thead>
                                <th>
                                  <tr>
                                    <td><b>Team</b></td>
                                  </tr>
                                </th>
                              </thead>
                              
                              <tbody>
                                <?php foreach($team_list as $key): ?>
                                    <tr><td><?php echo $key->team_name; ?></td></tr>
                                <?php endforeach; ?>
                              </tbody>
                              
                            </table>

                        </div><!-- /.col -->

                        <div class="col-md-3">
                          werewklrjwelkl
                        </div>
                    </div><!-- /.row -->  
                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->