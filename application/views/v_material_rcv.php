            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Material Receiving
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Material_Rcv/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Material RCV</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No RCV</th>
                                            <th style="text-align: center;">PO Number</th>
                                            <th style="text-align: center;">DO Number</th>
                                            <th style="text-align: center;">RCV Date</th>
                                            <th style="text-align: center;">Status</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_rcv;?></td>
                                            <td style="text-align: center;"><?php echo $row->po_number;?></td>
                                            <td style="text-align: center;"><?php echo $row->do_number;?></td>
                                            <td style="text-align: center;"><?php echo $row->rcv_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->status;?></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Rcv/detail/<?php echo $row->no_rcv;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>

                                            <?php if($row->status == "Complete") {?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Rcv/edit/<?php echo $row->no_rcv;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Material_Rcv/delete/<?php echo $row->no_rcv;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
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
    