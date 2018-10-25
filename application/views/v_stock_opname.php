            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Stock
                        </div>

                        <div class="panel-body">
                        <p align="left"><a href="<?php echo base_url()?>Stock_Opname/print/"><button class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print Stock</button></a></p>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No Stock</th>
                                            <th style="text-align: center;">Item Code</th>
                                            <th style="text-align: center;">Item Detail Code</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">Qty</th>
                                            <th style="text-align: center;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->no_stock;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row->qty;?></td>
                                            <?php 
                                                if ($row->status_item == "Normal") {?>
                                                    <td style="text-align: center;"><label class="label label-success" ><?php echo $row->status_item;?></label></a></td>
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
    