            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Detail Material Issuance
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Issuance</label>
                                                <input type="text" class="form-control border-input" name="no_issuance" value="<?php echo $row->no_issuance; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No MR</label>
                                                <input type="text" class="form-control border-input" name="no_mr" value="<?php echo $row->no_mr; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Adm</label>
                                                <input type="text" class="form-control border-input" name="wh_adm" value="<?php echo $row->wh_adm; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Issuance Date</label>
                                                <input type="date" class="form-control border-input" name="issuance_date" value="<?php echo $row->issuance_date; ?>" readonly>
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Spv</label>
                                                <input type="text" class="form-control border-input" name="wh_spv" value="<?php echo $row->wh_spv; ?>" readonly>
                                            </div>
                                        </div>                           
                                    </div>

                                    <div class="row">
                                     <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Issuance Status</label>
                                                <input type="text" class="form-control border-input" name="issuance_status" value="<?php echo $row->issuance_status; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No Issuance Detail</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">Req Qty</th>
                                            <th style="text-align: center;">Issuance Qty</th>
                                            <th style="text-align: center;">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach($result as $row1){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row1->no_issuance_detail;?></td>
                                            <td style="text-align: center;"><?php echo $row1->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row1->request_qty;?></td>
                                            <td style="text-align: center;"><?php echo $row1->issuance_qty;?></td>
                                            <td style="text-align: center;"><?php echo $row1->status_issuance_item;?></td>

                                            <?php if($row->issuance_status == "Complete" || $row1->status_issuance_item == "Complete") {?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <?php } else { ?>
                                            <td style="text-align: center;"><button class="btn btn-warning btn-sm" id="<?php echo "myBtn".$i ?>" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <!-- Modal -->
                                                <div id="<?php echo "myModal".$i ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog modal-sm">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                    
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                            <h4 class="modal-title">Edit Item</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="<?php echo base_url();?>Material_Issuance/updateItem" method="POST">

                                                                    <div class="form-group">
                                                                        <label>No Issuance Detail</label>
                                                                        <input type="text" class="form-control border-input" name="no_issuance_detail" value="<?php echo $row1->no_issuance_detail; ?>" readonly>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label>No issuance</label>
                                                                        <input type="text" class="form-control border-input" name="no_issuance" value="<?php echo $row->no_issuance; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Item Detail Name</label>
                                                                        <input class="form-control border-input select2" name="item_detail_name" value="<?php echo $row1->item_detail_name; ?>" readonly>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label>Request Qty</label>
                                                                        <input type="number" class="form-control border-input" name="request_qty" value="<?php echo $row1->request_qty; ?>" readonly>
                                                                    </div>
                                                            
                                                                    <div class="form-group">
                                                                        <label>Qty</label>
                                                                        <input type="number" class="form-control border-input" max="<?php echo $row1->request_qty; ?>" min="0" name="issuance_qty" value="<?php echo $row1->issuance_qty; ?>">
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-info">Save</button>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        </form>
                                                        </div>
                                                    </div>

                                                    </div>
                                                </div>
                                                </div>
                                                <script>
                                                $(document).ready(function(){
                                                    $("<?php echo "#myBtn".$i ?>").click(function(){
                                                        $("<?php echo "#myModal".$i ?>").modal({backdrop: false});
                                                    });
                                                });
                                                </script>
                                                <?php $i++; } ?>
                                        </tr>  
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
