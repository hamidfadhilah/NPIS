            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Work Order Request
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Work_Order_Request/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>WO Priority</label>
                                                <select class="form-control border-input select2" name="wo_priority" required>
                                                    <option value="Normal">Regular</option>
                                                    <option value="Urgent">Urgent</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Date</label>
                                                <input type="date" class="form-control border-input" name="wo_date" value="<?php echo date("Y-m-d") ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <input type="text" class="form-control border-input" name="req_name" value="<?php echo $this->session->userdata('name'); ?>" readonly >
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>WO Trade</label>
                                                <select class="form-control border-input select2" name="wo_trade" required>
                                                    <option value="Instrument">Instrument</option>
                                                    <option value="HVAC">HVAC</option>
                                                    <option value="Civil">Civil</option>
                                                    <option value="EHS">EHS</option>
                                                    <option value="Calibrasi">Calibrasi</option>
                                                    <option value="Electrical">Electrical</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Req Dept</label>
                                                <input type="text" class="form-control border-input" name="req_dept" value="<?php echo $this->session->userdata('dept'); ?>" readonly >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>WO Type</label>
                                                <select class="form-control border-input select2" name="wo_type" required>
                                                    <option value="Calibration">Calibration</option>
                                                    <option value="Instalation">Instalation</option>
                                                    <option value="Corrective">Corrective</option>
                                                    <option value="Demand for Goods">Demand for Goods</option>
                                                    <option value="Breakdown">Breakdown</option>
                                                    <option value="Commisioning">Commisioning</option>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Status</label>
                                                <select class="form-control border-input select2" name="wo_status" disabled>
                                                    <option value="Prepare" selected>Prepare</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Machine Name</label>
                                                <input type="text" class="form-control border-input" name="machine_name" placeholder="Machine Name" required >
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>WO Description</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Description" name="wo_desc"></textarea>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Couse Description</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Couse Description" name="couse_desc"></textarea>
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
