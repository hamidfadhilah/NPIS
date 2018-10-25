            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Purchasing Requsition Detail
                        </div>

                        <div class="panel-body">
                            <div class="content">                                  
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Number</label>
                                                <input type="text" class="form-control border-input" name="pr_number" value="<?php echo $row->pr_number; ?>" readonly>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PR Date</label>
                                                <input type="date" class="form-control border-input" name="pr_date" value="<?php echo $row->pr_date; ?>" readonly>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Status</label>
                                                <select class="form-control border-input select2" name="app_status" readonly disabled>
                                                    <option value="Prepare" <?php if ($row->app_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="Complete" <?php if ($row->app_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Status</label>
                                                <select class="form-control border-input select2" name="ack_status" readonly disabled>
                                                    <option value="Prepare" <?php if ($row->ack_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="Complete" <?php if ($row->ack_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Status</label>
                                                <select class="form-control border-input select2" name="pr_status" readonly disabled>
                                                    <option value="Prepare" <?php if ($row->pr_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="Complete" <?php if ($row->pr_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Name</label>
                                                <select class="form-control border-input select2" name="app_name" readonly disabled>
                                                    <option value="Mawar" <?php if ($row->app_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                    <option value="Adi Sofian" <?php if ($row->app_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Name</label>
                                                <select class="form-control border-input select2" name="ack_name" readonly disabled>
                                                    <option value="Mawar" <?php if ($row->ack_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                    <option value="Adi Sofian" <?php if ($row->ack_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <select class="form-control border-input select2" name="req_name" readonly disabled>
                                                    <option value="Mawar" <?php if ($row->req_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                    <option value="Adi Sofian" <?php if ($row->req_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                </select>
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
                                                <label>Approval Date</label>
                                                <input type="date" class="form-control border-input" name="app_date" value="<?php echo $row->app_date; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Date</label>
                                                <input type="date" class="form-control border-input" name="ack_date" value="<?php echo $row->ack_date; ?>" readonly>
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Priority</label>
                                                <select class="form-control border-input select2" name="pr_priority" readonly disabled>
                                                    <option value="Normal" <?php if ($row->pr_priority=='Normal'){echo 'selected';}?>>Normal</option>
                                                    <option value="Urgent" <?php if ($row->pr_priority=='Urgent'){echo 'selected';}?>>Urgent</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>PO Number</label>
                                                <?php 
                                                $po = substr($row->po_number, 0, 3);
                                                if ($po == "pr-") { ?>
                                                    <input type="text" class="form-control border-input" name="po_number" readonly>
                                                <?php } else { ?>
                                                <input type="text" class="form-control border-input" name="po_number" value="<?php echo $row->po_number; ?>" readonly>
                                                <?php } ?>
                                            </div>
                                        </div>                                          
                                    </div>

                                    <?php $status = $row->pr_status; ?>
                                    <div class="panel">    
                                    <!-- Trigger the modal with a button -->
                                    <?php if ($row->pr_status == "Complete") { ?>
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
                                            <form action="<?php echo base_url();?>PR_Opex/addItem" method="POST">

                                                        <div class="form-group">
                                                            <label>PR Number</label>
                                                            <input type="text" class="form-control border-input" name="pr_num" value="<?php echo $row->pr_number; ?>" readonly>
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
                                                            <input type="number" class="form-control border-input" name="qty">
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
                                            <th style="text-align: center;">PR Detail Code</th>
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
                                        foreach($result as $row){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $row->pr_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_detail_code;?></td>
                                            <td style="text-align: center;"><?php echo $row->item_detail_name;?></td>
                                            <td style="text-align: center;"><?php echo $row->qty;?></td>

                                            <?php if ($status == "Complete") { ?>
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
                                                        <form action="<?php echo base_url();?>PR_Opex/updateItem" method="POST">

                                                                    <div class="form-group">
                                                                        <label>PR Detail Code</label>
                                                                        <input type="text" class="form-control border-input" name="pr_detail_codeEdit" value="<?php echo $row->pr_detail_code; ?>" readonly>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label>PR Number</label>
                                                                        <input type="text" class="form-control border-input" name="pr_numEdit" value="<?php echo $row->pr_number; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Item Detail Name</label>
                                                                        <input type="text" class="form-control border-input" name="item_detail_nameEdit" value="<?php echo $row->item_detail_name; ?>" readonly>
                                                                    </div>  
                                                            
                                                                    <div class="form-group">
                                                                        <label>Qty</label>
                                                                        <input type="number" class="form-control border-input" name="qtyEdit" value="<?php echo $row->qty; ?>">
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

                                                <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>PR_Opex/deleteDetail/<?php echo $row->pr_number;?>/<?php echo $row->pr_detail_code;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
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
