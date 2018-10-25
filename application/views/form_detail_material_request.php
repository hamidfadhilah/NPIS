            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Material Request Detail
                        </div>

                        <div class="panel-body">
                            <div class="content">                                  
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No MR</label>
                                                <input type="text" class="form-control border-input" name="no_mr" value="<?php echo $row->no_mr; ?>" readonly>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <input type="text" class="form-control border-input" name="req_name" placeholder="request name" value="<?php echo $row->req_name; ?>" readonly>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Dept</label>
                                                <input type="text" class="form-control border-input" name="req_dept" value="<?php echo $row->req_dept; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-2">
                                            <div class="form-group">
                                                <label>Status MR</label>
                                                <input type="text" class="form-control border-input" name="mr_status" value="<?php echo $row->mr_status; ?>" readonly>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Date</label>
                                                <input type="date" class="form-control border-input" name="req_date" value="<?php echo $row->req_date; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-5">
                                            <div class="form-group">
                                                <label>Remark</label>
                                                <textarea class="form-control border-input" rows="3" placeholder="Remark" name="remark" readonly><?php echo $row->remark; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $status = $row->mr_status; ?>
                                    <div class="panel">    
                                    <!-- Trigger the modal with a button -->
                                    <?php if ($row->mr_status == "Complete" || $row->mr_status == "Approval") { ?>
                                        <button type="button" class="btn btn-primary btn-sm" id="myBtn" disabled><i class="fa fa-plus"></i>Item</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-primary btn-sm" id="myBtn"><i class="fa fa-plus"></i>Item</button>
                                    <?php } ?>
                                    </div>
                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-sm">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">x</button>
                                                <h4 class="modal-title">Add Item</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url();?>Material_Request/addItem" method="POST">

                                                        <div class="form-group">
                                                            <label>No MR</label>
                                                            <input type="text" class="form-control border-input" name="no_mr" value="<?php echo $row->no_mr; ?>" readonly>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Item Detail Name</label>
                                                            <select class="selectpicker" data-live-search="true" name="item_detail_name" required>
                                                            <option value=""></option>
                                                            <?php
                                                            $bool ="false";
                                                            foreach($item_name as $row){
                                                                foreach($result as $row1){
                                                                    if ($row->item_detail_code == $row1->item_detail_code) {
                                                                        $bool = "true";
                                                                        break;           
                                                                    } else 
                                                                        $bool = "false";
                                                                }
                                                                if ($row->item_detail_name != "" & $bool == "false"){?>
                                                                    <option value="<?php echo $row->item_detail_name;?>"><?php echo $row->item_detail_name;?></option>                                                                 
                                                            <?php }} ?>
                                                            </select>
                                                        </div>  
                                                
                                                        <div class="form-group">
                                                            <label>Qty</label>
                                                            <input type="number" class="form-control border-input" name="qty" required>
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
                                        $("#myBtn").click(function(){
                                            $("#myModal").modal({backdrop: false});
                                        });
                                    });
                                    </script>
                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No MR Detail</th>
                                            <th style="text-align: center;">Item Detail Code</th>
                                            <th style="text-align: center;">Item Detail Name</th>
                                            <th style="text-align: center;">Qty</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 0;
                                        foreach($result as $row1){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row1->no_mr_detail;?></td>
                                            <td style="text-align: center;"><?php echo $row1->item_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row1->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row1->qty;?></td>


                                            <?php if ($status == "Complete" || $status == "Approval") { ?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <td style="text-align: center;"><button class="btn btn-danger btn-sm " disabled><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } else { ?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" id="<?php echo "myBtn".$i ?>" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                            <!-- Modal -->
                                            <div id="<?php echo "myModal".$i ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog modal-sm">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">x</button>
                                                        <h4 class="modal-title">Add Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form action="<?php echo base_url();?>Material_Request/updateItem" method="POST">

                                                                <div class="form-group">
                                                                    <label>No MR Detail</label>
                                                                    <input type="text" class="form-control border-input" name="no_mr_detailEdit" value="<?php echo $row1->no_mr_detail; ?>" readonly>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>No MR</label>
                                                                    <input type="text" class="form-control border-input" name="no_mrEdit" value="<?php echo $row1->no_mr; ?>" readonly>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>Item Detail Name</label>
                                                                    <input type="text" class="form-control border-input" name="item_detail_nameEdit" value="<?php echo $row1->item_detail_name; ?>" readonly>
                                                                </div>
                                                        
                                                                <div class="form-group">
                                                                    <label>Qty</label>
                                                                    <input type="number" class="form-control border-input" name="qtyEdit" value="<?php echo $row1->qty; ?>" required>
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

                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Material_Request/deleteDetail/<?php echo $row1->no_mr;?>/<?php echo $row1->no_mr_detail;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                            <?php } ?>
                                        </tr>  
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
