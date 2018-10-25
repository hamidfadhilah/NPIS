            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Material Issuance
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Material_Issuance/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Material Issuance</button></a></p>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No Issuance</th>
                                            <th style="text-align: center;">NO MR</th>
                                            <th style="text-align: center;">Issuance Date</th>
                                            <th style="text-align: center;">Issuance Status</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_issuance;?></td>
                                            <td style="text-align: center;"><?php echo $row->no_mr;?></td>
                                            <td style="text-align: center;"><?php echo $row->issuance_date;?></td>
                                            <td style="text-align: center;"><?php echo $row->issuance_status;?></td>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Issuance/detail/<?php echo $row->no_issuance;?>"><button class="btn btn-info btn-sm" ><i class="fa fa-list"></i>Detail</button></a></td>
                                            <?php if($row->issuance_status == "Complete") {?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else { ?>
                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Material_Issuance/edit/<?php echo $row->no_issuance;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Material_Issuance/delete/<?php echo $row->no_issuance;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
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
    