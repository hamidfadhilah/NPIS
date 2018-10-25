            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Work Order Request
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Work_Order_Request/update" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>No WO</label>
                                                <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $row->no_wo; ?>" readonly>
                                            </div>
                                        </div>                                 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>WO Priority</label>
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <select class="form-control border-input select2" name="wo_priority" required>
                                                    <option value="reguler" <?php if ($row->wo_priority=='reguler'){echo 'selected';}?>>reguler</option>
                                                    <option value="Urgent" <?php if ($row->wo_priority=='Urgent'){echo 'selected';}?>>Urgent</option>
                                                </select>
                                                <?php } else if ($row->wo_status == "Delivered") { ?>
                                                <select class="form-control border-input select2" name="wo_priority" required>
                                                    <option value="reguler" <?php if ($row->wo_priority=='reguler'){echo 'selected';}else{echo 'disabled';}?>>reguler</option>
                                                    <option value="Urgent" <?php if ($row->wo_priority=='Urgent'){echo 'selected';}else{echo 'disabled';}?>>Urgent</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Date</label>
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <input type="date" class="form-control border-input" name="wo_date" value="<?php echo date("Y-m-d") ?>" readonly>
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <input type="date" class="form-control border-input" name="wo_date" min="<?php echo $row->wo_date; ?>" value="<?php echo $row->wo_date; ?>" required readonly>
                                                <?php } ?>
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
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <select class="form-control border-input select2" name="wo_trade" required>
                                                    <option value="Instrument" <?php if ($row->wo_trade=='Instrument'){echo 'selected';}?>>Instrument</option>
                                                    <option value="HVAC" <?php if ($row->wo_trade=='HVAC'){echo 'selected';}?>>HVAC</option>
                                                    <option value="Civil" <?php if ($row->wo_trade=='Civil'){echo 'selected';}?>>Civil</option>
                                                    <option value="EHS" <?php if ($row->wo_trade=='EHS'){echo 'selected';}?>>EHS</option>
                                                    <option value="Calibrasi" <?php if ($row->wo_trade=='Calibrasi'){echo 'selected';}?>>Calibrasi</option>
                                                    <option value="Electrical" <?php if ($row->wo_trade=='Electrical'){echo 'selected';}?>>Electrical</option>
                                                </select>
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <input type="text" class="form-control border-input" name="wo_trade" value="<?php echo $row->wo_trade; ?>" readonly>
                                                <?php } ?>
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
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <select class="form-control border-input select2" name="wo_type" required>
                                                    <option value="Calibration" <?php if ($row->wo_type=='Calibration'){echo 'selected';}?>>Calibration</option>
                                                    <option value="Instalation" <?php if ($row->wo_type=='Instalation'){echo 'selected';}?>>Instalation</option>
                                                    <option value="Corrective" <?php if ($row->wo_type=='Corrective'){echo 'selected';}?>>Corrective</option>
                                                    <option value="Demand for Goods" <?php if ($row->wo_type=='Demand for Goods'){echo 'selected';}?>>Demand for Goods</option>
                                                    <option value="Breakdown" <?php if ($row->wo_type=='Breakdown'){echo 'selected';}?>>Breakdown</option>
                                                    <option value="Commisioning" <?php if ($row->wo_type=='Commisioning'){echo 'selected';}?>>Commisioning</option>
                                                </select>
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <input type="text" class="form-control border-input" name="wo_type" value="<?php echo $row->wo_type; ?>" readonly>
                                                <?php } ?>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>WO Status</label>
                                                <input type="text" class="form-control border-input" name="wo_status" value="<?php echo $row->wo_status; ?>" readonly >
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Machine Name</label>
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <input type="text" class="form-control border-input" name="machine_name" value="<?php echo $row->machine_name; ?>" required >
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <input type="text" class="form-control border-input" name="machine_name" value="<?php echo $row->machine_name; ?>" readonly >
                                                <?php } ?>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>WO Description</label>
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <textarea class="form-control border-input" rows="5" placeholder="Description" name="wo_desc"><?php echo $row->wo_desc; ?></textarea>
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <textarea class="form-control border-input" rows="5" placeholder="Description" name="wo_desc" readonly><?php echo $row->wo_desc; ?></textarea>
                                                <?php } ?>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Couse Description</label>
                                                <?php 
                                                if ($row->wo_status == "Prepare") { ?>
                                                <textarea class="form-control border-input" rows="5" placeholder="Couse Description" name="couse_desc"><?php echo $row->couse_desc; ?></textarea>
                                                <?php } else if ($row->wo_status == "Delivered" || $row->wo_status == "On Work" || $row->wo_status == "Closed" ) { ?>
                                                <textarea class="form-control border-input" rows="5" placeholder="Couse Description" name="couse_desc" readonly><?php echo $row->couse_desc; ?></textarea>
                                                <?php } ?>
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
