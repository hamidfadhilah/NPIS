            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Material Request
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Material_Request/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Material Request</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No MR</th>
                                            <th style="text-align: center;">Req Name</th>
                                            <th style="text-align: center;">Req Dept</th>
                                            <th style="text-align: center;">Req Date</th>
                                            <th style="text-align: center;">Status MR</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_mr;?></td>
                                            <td style="text-align: center;"><?php echo $row->req_name;?></td>
                                            <td style="text-align: center;"><?php echo $row->req_dept;?></td>
                                            <td style="text-align: center;"><?php echo $row->req_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->mr_status;?></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Request/detail/<?php echo $row->no_mr;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <?php if($row->mr_status == "Complete") {?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else if($row->mr_status == "Approval") { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Request/edit/<?php echo $row->no_mr;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Request/edit/<?php echo $row->no_mr;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Material_Request/delete/<?php echo $row->no_mr;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Request/print/<?php echo $row->no_mr;?>"><button class="btn btn-success btn-sm " ><i class="fa fa-print"></i>Print</button></a></td>
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
    