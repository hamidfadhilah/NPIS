            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Material Receiving Detail
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Rcv</label>
                                                <input type="input" class="form-control border-input" name="no_rcv" placeholder="No Rcv" value="<?php echo $row->no_rcv; ?>" readonly>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Rcv Date</label>
                                                <input type="date" class="form-control border-input" name="rcv_date" value="<?php echo $row->rcv_date; ?>" readonly>
                                            </div>
                                        </div>                         
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PO Number</label>
                                                <input type="text" class="form-control border-input" name="po_number" value="<?php echo $row->po_number; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" class="form-control border-input" name="status" value="<?php echo $row->status; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DO Number</label>
                                                <input type="input" class="form-control border-input" name="do_number" placeholder="DO Number" value="<?php echo $row->do_number; ?>" readonly>
                                            </div>
                                        </div>                             
                                    </div>

                                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Item Detail Code</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">PR Qty</th>
                                            <th style="text-align: center;">Rcv Qty</th>
                                            <th style="text-align: center;">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach($result as $row1){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row1->item_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row1->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row1->pr_qty;?></td>
                                            <td style="text-align: center;"><?php echo $row1->rcv_qty;?></td>
                                            <td style="text-align: center;"><?php echo $row1->status_rcv_item;?></td>

                                            <?php if($row->status == "Complete" || $row1->status_rcv_item == "Complete") {?>
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
                                                        <form action="<?php echo base_url();?>Material_Rcv/updateItem" method="POST">

                                                                    <div class="form-group">
                                                                        <label>No RCV Detail</label>
                                                                        <input type="text" class="form-control border-input" name="no_rcv_detail" value="<?php echo $row1->no_rcv_detail; ?>" readonly>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label>No RCV</label>
                                                                        <input type="text" class="form-control border-input" name="no_rcv" value="<?php echo $row->no_rcv; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Item Detail Name</label>
                                                                        <input class="form-control border-input select2" name="item_detail_name" value="<?php echo $row1->item_detail_name; ?>" readonly>
                                                                    </div>
                                                             
                                                            
                                                                    <div class="form-group">
                                                                        <label>PR Qty</label>
                                                                        <input type="number" class="form-control border-input" name="pr_qty" value="<?php echo $row1->pr_qty; ?>" readonly>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label>RCV Qty</label>
                                                                        <input type="number" class="form-control border-input" max="<?php echo $row1->pr_qty; ?>" min="0" name="rcv_qty" value="<?php echo $row1->rcv_qty; ?>">
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
