            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Purchasing Requsition
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>PR_Opex/tambah/" ><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Purchasing Requsition</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">PR Number</th>
                                            <th style="text-align: center;">PR Date</th>
                                            <th style="text-align: center;">PR Status</th>
                                            <th style="text-align: center;">PR Priority</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->pr_number;?></td>
                                            <td style="text-align: center;"><?php echo $row->pr_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->pr_status;?></td>
                                            <td style="text-align: center;"><?php echo $row->pr_priority;?></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>PR_Opex/detail/<?php echo $row->pr_number;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <?php if ($row->pr_status == "Complete") { ?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <td style="text-align: center;"><button class="btn btn-danger btn-sm " disabled><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>PR_Opex/edit/<?php echo $row->pr_number;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>PR_Opex/delete/<?php echo $row->pr_number;?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>PR_Opex/print/<?php echo $row->pr_number;?>"><button class="btn btn-success btn-sm " ><i class="fa fa-print"></i>Print</button></a></td>
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

    