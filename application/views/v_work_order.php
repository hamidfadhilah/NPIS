            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Work Order
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Work_Order/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Work Order</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No WO</th>
                                            <th style="text-align: center;">No WOR</th>
                                            <th style="text-align: center;">Start Date</th>
                                            <th style="text-align: center;">Finish Date</th>
                                            <th style="text-align: center;">WO Status</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_wo;?></td>
                                            <td style="text-align: center;"><?php echo $row->no_wor;?></td>
                                            <td style="text-align: center;"><?php echo $row->start_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->finish_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->wo_status;?></td>
                                            <?php if($row->wo_status == "Prepare" ) {?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/detail/<?php echo $row->no_wo;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/edit/<?php echo $row->no_wo;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Work_Order/delete/<?php echo $row->no_wo;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else if($row->wo_status == "On Work" ) {?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/detail/<?php echo $row->no_wo;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/edit/<?php echo $row->no_wo;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm " disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else if($row->wo_status == "Complete" ) {?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/detail/<?php echo $row->no_wo;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm " disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order/print/<?php echo $row->no_wo;?>"><button class="btn btn-success btn-sm " ><i class="fa fa-print"></i>Print</button></a></td>
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
    