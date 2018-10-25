            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Work Order Request
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Work_Order_Request/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add WOR</button></a></p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No WO</th>
                                            <th style="text-align: center;">WO Date</th>
                                            <th style="text-align: center;">WO Trade</th>
                                            <th style="text-align: center;">WO Type</th>
                                            <th style="text-align: center;">WO Status</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_wo;?></td>
                                            <td style="text-align: center;"><?php echo $row->wo_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->wo_trade;?></td>
                                            <td style="text-align: center;"><?php echo $row->wo_type;?></td>
                                            <td style="text-align: center;"><?php echo $row->wo_status;?></td>

                                            <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order_Request/edit/<?php echo $row->no_wo;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Work_Order_Request/delete/<?php echo $row->no_wo;?>"><button class="btn btn-danger btn-sm "><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed") { ?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm " disabled><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                             <td style="text-align: center;"><a href="<?php echo base_url()?>Work_Order_Request/print/<?php echo $row->no_wo;?>"><button class="btn btn-success btn-sm "><i class="fa fa-print"></i>Print</button></a></td>
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
    