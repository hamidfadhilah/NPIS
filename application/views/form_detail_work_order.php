		<div class="row">
                <div class="col-md-12">
                    <div class="panel with-nav-tabs panel-default">
						<div class="panel-heading">
						    <h5>&nbsp;Work Order Detail</h5>
						    <ul class="nav nav-tabs">
						         <li class="active"><a href="#tab1default" data-toggle="tab">Work Order - Used Part</a></li>
						         <li><a href="#tab2default" data-toggle="tab">Work Order - Assigned Employee</a></li>
						         <li><a href="#tab3default" data-toggle="tab">Work Order - Used Equipment</a></li>
						    </ul>
						</div>
                        <?php $no_wo = $row->no_wo;
                            $wo_status = $row->wo_status;
                        ?>
						<div class="panel-body">
						    <div class="tab-content">
						    <!-- Used Part -->
							    <div class="tab-pane fade in active" id="tab1default">
							    	<div class="panel">    
                                    <!-- Trigger the modal with a button -->
                                    <?php if($wo_status == "Complete" || $wo_status == "Prepare") {?>
                                    <button type="button" class="btn btn-primary btn-sm" disabled><i class="fa fa-plus"></i>Item</button>
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
                                            <form action="<?php echo base_url();?>Work_Order/addItem" method="POST">

                                                        <div class="form-group">
                                                            <label>No WO</label>
                                                            <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $row->no_wo; ?>" readonly>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Item Detail Name</label>
                                                            <select class="selectpicker" data-live-search="true" name="item_detail_name" required>
                                                            <option value=""></option>
                                                            <?php
                                                            $bool ="false";
                                                            foreach($item_name as $row){
                                                                foreach($usedPart as $row1){
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
                                                            <input type="number" class="form-control border-input" min="0" name="part_qty" required>
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
	                                            <th style="text-align: center;">No Part</th>
	                                            <th style="text-align: center;">Item Detail Name</th>
	                                            <th style="text-align: center;">Qty</th>
	                                            <th></th>
	                                            <th></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <?php 
                                            $i = 0;
                                            foreach($usedPart as $row){?>
	                                        <tr>
	                                            <td style="text-align: center;"><?php echo $row->no_part;?></td>
	                                            <td style="text-align: center;"><?php echo $row->item_detail_name;?></td>
	                                            <td style="text-align: center;"><?php echo $row->part_qty;?></td>

	                                            <?php if($wo_status == "Complete" ) {?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
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
                                                        <form action="<?php echo base_url();?>Work_Order/updateItem" method="POST">

                                                                    <div class="form-group">
                                                                        <label>No Part</label>
                                                                        <input type="text" class="form-control border-input" name="no_part" value="<?php echo $row->no_part; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>No WO</label>
                                                                        <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $no_wo; ?>" readonly>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label>Item Detail Name</label>
                                                                        <input type="text" class="form-control border-input" name="item_detail_name" value="<?php echo $row->item_detail_name; ?>" readonly>
                                                                    </div>  
                                                            
                                                                    <div class="form-group">
                                                                        <label>Qty</label>
                                                                        <input type="number" class="form-control border-input" min="0" name="part_qtyEdit" value="<?php echo $row->part_qty; ?>" required>
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
                                                <script>
                                                $(document).ready(function(){
                                                    $("<?php echo "#myBtn".$i ?>").click(function(){
                                                        $("<?php echo "#myModal".$i ?>").modal({backdrop: false});
                                                    });
                                                });
                                                </script>
	                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Work_Order/deleteDetail/<?php echo $no_wo;?>/<?php echo $row->no_part;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                                <?php } ?>
	                                        </tr>  
	                                        <?php $i++; } ?>
	                                    </tbody>
	                                </table>
	                            </div>
							    </div>
							    <!-- Assigned Employee -->
						        <div class="tab-pane fade" id="tab2default">
						        	<div class="panel">    
                                    <!-- Trigger the modal with a button -->
                                    <?php if($wo_status == "Complete" || $wo_status == "Prepare") {?>
                                    <button type="button" class="btn btn-primary btn-sm" disabled><i class="fa fa-plus"></i>Employee</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-primary btn-sm" id="myBtnEmployee"><i class="fa fa-plus"></i>Employee</button>
                                    <?php } ?>
                                    </div>
                                    <!-- Modal -->
                                    <div id="myModalEmployee" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-sm">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">x</button>
                                                <h4 class="modal-title">Add Employee</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url();?>Work_Order/addEmployee" method="POST">

                                                        <div class="form-group">
                                                            <label>No WO</label>
                                                            <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $no_wo; ?>" readonly>
                                                        </div>
                                                
                                                        <div class="form-group">
                                                            <label>Employee Name</label>
                                                            <input type="text" class="form-control border-input" name="employee_name" required>
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
                                    <script>
                                    $(document).ready(function(){
                                        $("#myBtnEmployee").click(function(){
                                            $("#myModalEmployee").modal({backdrop: false});
                                        });
                                    });
                                    </script>
                        
	                            <div class="table-responsive">
	                                <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
	                                    <thead>
	                                        <tr>
	                                            <th style="text-align: center;">Employee Code</th>
	                                            <th style="text-align: center;">Employee Name</th>
	                                            <th></th>
	                                            <th></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach($employee as $row){?>
	                                        <tr>
	                                            <td style="text-align: center;"><?php echo $row->employee_code;?></td>
	                                            <td style="text-align: center;"><?php echo $row->employee_name;?></td>

	                                            <?php if($wo_status == "Complete" ) {?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                                <?php } else { ?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" id="<?php echo "myBtn".$i ?>" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                    <!-- Modal -->
                                                    <div id="<?php echo "myModal".$i ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-sm">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                    
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                            <h4 class="modal-title">Edit Employee</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="<?php echo base_url();?>Work_Order/updateEmployee" method="POST">

                                                                    <div class="form-group">
                                                                        <label>Employee Code</label>
                                                                        <input type="text" class="form-control border-input" name="employee_code" value="<?php echo $row->employee_code; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>No WO</label>
                                                                        <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $no_wo; ?>" readonly>
                                                                    </div>
                                                            
                                                                    <div class="form-group">
                                                                        <label>Employee Name</label>
                                                                        <input type="text" class="form-control border-input" name="employee_name" value="<?php echo $row->employee_name; ?>" required>
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
                                                <script>
                                                $(document).ready(function(){
                                                    $("<?php echo "#myBtn".$i ?>").click(function(){
                                                        $("<?php echo "#myModal".$i ?>").modal({backdrop: false});
                                                    });
                                                });
                                                </script>
	                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Work_Order/deleteEmployee/<?php echo $row->no_wo;?>/<?php echo $row->employee_code;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
                                                <?php } ?>
	                                        </tr>  
	                                        <?php $i++; } ?>
	                                    </tbody>
	                                </table>
	                            </div>
						        </div>
						        <!-- Used Equipment -->
						    	<div class="tab-pane fade" id="tab3default">
						    		<div class="panel">    
                                    <!-- Trigger the modal with a button -->
                                    <?php if($wo_status == "Complete" || $wo_status == "Prepare" ) {?>
                                    <button type="button" class="btn btn-primary btn-sm" disabled><i class="fa fa-plus"></i>Equipment</button>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-primary btn-sm" id="myBtnequipment"><i class="fa fa-plus"></i>Equipment</button>
                                    <?php } ?>
                                    </div>
                                    <!-- Modal -->
                                    <div id="myModalequipment" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-sm">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">x</button>
                                                <h4 class="modal-title">Add Equipment</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url();?>Work_Order/addEquipment" method="POST">

                                                        <div class="form-group">
                                                            <label>No WO</label>
                                                            <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $no_wo; ?>" readonly>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Item Detail Name</label>
                                                            <select class="selectpicker" data-live-search="true" name="item_detail_name" required>
                                                            <option value=""></option>
                                                            <?php
                                                            $bool ="false";
                                                            foreach($item_name as $row){
                                                                foreach($equipment as $row1){
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
                                                            <label>Equipment Qty</label>
                                                            <input type="number" class="form-control border-input" min="0" name="equipment_qty" required>
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
                                    <script>
                                    $(document).ready(function(){
                                        $("#myBtnequipment").click(function(){
                                            $("#myModalequipment").modal({backdrop: false});
                                        });
                                    });
                                    </script>
                        
	                            <div class="table-responsive">
	                                <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
	                                    <thead>
	                                        <tr>
	                                            <th style="text-align: center;">Equipment Code</th>
	                                            <th style="text-align: center;">Item Detail Name</th>
	                                            <th style="text-align: center;">Qty</th>
	                                            <th></th>
	                                            <th></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach($equipment as $row){?>
	                                        <tr>
	                                            <td style="text-align: center;"><?php echo $row->equipment_code;?></td>
	                                            <td style="text-align: center;"><?php echo $row->item_detail_name;?></td>
	                                            <td style="text-align: center;"><?php echo $row->equipment_qty;?></td>

	                                            <?php if($wo_status == "Complete" ) {?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" disabled ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                <td style="text-align: center;"><button class="btn btn-danger btn-sm" disabled ><i class="fa fa-trash"></i>Delete</button></a></td>
                                                <?php } else { ?>
                                                <td style="text-align: center;"><button class="btn btn-warning btn-sm" id="<?php echo "myBtn".$i ?>" ><i class="fa fa-edit"></i>Edit</button></a></td>
                                                    <!-- Modal -->
                                                    <div id="<?php echo "myModal".$i ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog modal-sm">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                    
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                            <h4 class="modal-title">Edit Equipment</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="<?php echo base_url();?>Work_Order/updateEquipment" method="POST">

                                                                    <div class="form-group">
                                                                        <label>Equipment Code</label>
                                                                        <input type="text" class="form-control border-input" name="equipment_code" value="<?php echo $row->equipment_code; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>No WO</label>
                                                                        <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $no_wo; ?>" readonly>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Item Detail Name</label>
                                                                        <input type="text" class="form-control border-input" name="item_detail_name" value="<?php echo $row->item_detail_name; ?>" readonly>
                                                                    </div> 
                                                            
                                                                    <div class="form-group">
                                                                        <label>Equipment Qty</label>
                                                                        <input type="number" class="form-control border-input" min="0" name="equipment_qty" value="<?php echo $row->equipment_qty; ?>"required>
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
                                                <script>
                                                $(document).ready(function(){
                                                    $("<?php echo "#myBtn".$i ?>").click(function(){
                                                        $("<?php echo "#myModal".$i ?>").modal({backdrop: false});
                                                    });
                                                });
                                                </script>
	                                            <td style="text-align: center;"><a class="delete_item" href="<?php echo base_url()?>Work_Order/deleteEquipment/<?php echo $row->no_wo;?>/<?php echo $row->equipment_code;?>"><button class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i>Delete</button></a></td>
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
		</div>


						