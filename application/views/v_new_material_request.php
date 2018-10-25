            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             New Material Request
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>New_Material_Request/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>New Material Request</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No New MR</th>
                                            <th style="text-align: center;">Item Name</th>
                                            <th style="text-align: center;">Req Date</th>
                                            <th style="text-align: center;">Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_new_mr;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_name;?></td>
                                            <td style="text-align: center;"><?php echo $row->req_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->new_mr_status;?></td>
                                            <?php if($row->new_mr_status == "Rejected" || $row->new_mr_status == "Approved") {?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td
                                            <?php } else { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>New_Material_Request/edit/<?php echo $row->no_new_mr;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>New_Material_Request/delete/<?php echo $row->no_new_mr;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                        </tr>  
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    