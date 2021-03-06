            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add New Material Request
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>New_Material_Request/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <input type="text" class="form-control border-input" name="req_name" value="<?php echo $this->session->userdata('name'); ?>" readonly >
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Dept</label>
                                                <input type="text" class="form-control border-input" name="req_dept" value="<?php echo $this->session->userdata('dept'); ?>" readonly >
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-2">
                                            <div class="form-group">
                                                <label>Status MR</label>
                                                <select class="form-control border-input select2" name="new_mr_status" disabled>
                                                    <option value="Prepare">Prepare</option>
                                                    <option value="Approval">Approval</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Date</label>
                                                <input type="date" class="form-control border-input" name="req_date" value="<?php echo date("Y-m-d") ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input type="text" class="form-control border-input" name="item_name" placeholder="Item Name" required>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-5">
                                            <div class="form-group">
                                                <label>Remark</label>
                                                <textarea class="form-control border-input" rows="3" placeholder="Remark" name="remark"></textarea>
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
