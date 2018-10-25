            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Work Order
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Work_Order/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>No WO</label><br>
                                                <select class="selectpicker" data-live-search="true" name="no_wo" onchange="" required>
                                                    <option value=""></option>
                                                <?php
                                                            foreach($result as $row){
                                                                if ($row->wo_status == "Prepare" ){?>
                                                                    <option value="<?php echo $row->no_wo;?>"><?php echo $row->no_wo;?></option>                                                                 
                                                <?php }} ?> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>WO Priority</label>
                                                <input type="text" class="form-control border-input" name="wo_priority" placeholder="Priority" readonly>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Date</label>
                                                <input type="date" class="form-control border-input" name="wo_date" readonly>
                                            </div>
                                        </div>     
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Req Dept</label>
                                                <input type="text" class="form-control border-input" name="req_dept" placeholder="Department" readonly >
                                            </div>
                                        </div>          
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <input type="text" class="form-control border-input" name="req_name" placeholder="Request Name" readonly >
                                            </div>
                                        </div>                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>WO Trade</label>
                                                <input type="text" class="form-control border-input" name="wo_trade" placeholder="Trade Name" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Manager in Charge</label>
                                                <input type="text" class="form-control border-input" name="wo_manager" value="Syachrul Hendra Prayitno" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Received by</label>
                                                <input type="text" class="form-control border-input" name="wo_rcv" value="<?php echo $this->session->userdata('name'); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>WO Type</label>
                                                <input type="text" class="form-control border-input" name="wo_type" placeholder="Type Name" readonly>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Status</label>
                                                <input type="text" class="form-control border-input" name="wo_status" placeholder="WO Status" readonly>
                                            </div>
                                        </div>     
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Received Date</label>
                                                <input type="date" class="form-control border-input" name="rcv_date" value="<?php echo date("Y-m-d") ?>" readonly>
                                            </div>
                                        </div>                     
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Machine Name</label>
                                                <input type="text" class="form-control border-input" name="machine_name" placeholder="Machine Name" readonly >
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Finish Date</label>
                                                <input type="date" class="form-control border-input" name="finish_date" min="<?php echo date("Y-m-d") ?>" readonly>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" class="form-control border-input" name="start_date" min="<?php echo date("Y-m-d") ?>" readonly>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>WO Description</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Description" name="wo_desc" disabled></textarea>
                                            </div>
                                        </div>                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Couse Description</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Couse Description" name="couse_desc" disabled></textarea>
                                            </div>
                                        </div>                            
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Action</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Action" name="action"></textarea>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Prevention</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Prevention" name="prevention"></textarea>
                                            </div>
                                        </div>                                    
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
