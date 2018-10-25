            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User Control
                        </div>

                        <div class="panel-body">
                        <p align="left"><!-- <a href="<?php echo base_url()?>user/tambah/"> --><button class="btn btn-primary btn-sm" disabled><i class="fa fa-plus"></i>Add User</button></a></p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Username</th>
                                            <th style="text-align: center;">Password</th>
                                            <th style="text-align: center;">Level</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){
                                            if ($row->level != "admin") { ?>
                                        <tr>
                                            <td  style="text-align: center;"><?php echo $row->user_id;?></td>
                                            <td  style="text-align: center;"><?php echo $row->username;?></td>
                                            <td  style="text-align: center;"><?php echo $row->password;?></td>
                                            <td  style="text-align: center;"><?php echo $row->level;?></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>user/edit/<?php echo $row->user_id;?>"><button class="btn btn-warning" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><!-- <a class="delete_item" href="<?php echo base_url()?>user/delete/<?php echo $row->user_id;?>"> --><button class="btn btn-danger btn-sm " disabled><i class="fa fa-trash"></i>Hapus</button></a></td>
                                        </tr>  
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    