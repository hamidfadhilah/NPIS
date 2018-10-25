            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Item Detail
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Item_Detail/tambah/"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Item Detail</button></a></p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Item Detail Code</th>
                                            <th style="text-align: center;">Item Code</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->item_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row->status;?></td>

                                            <td style="text-align: center;"><a href="<?php echo base_url()?>Item_Detail/edit/<?php echo $row->item_detail_code;?>"><button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Item_Detail/delete/<?php echo $row->item_detail_code;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
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
    