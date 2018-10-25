            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Material Request
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Material_Request/update" method="POST">
                                    
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
                                                <?php 
                                                if ($mr_item < 1) { ?>
                                                    <select class="form-control border-input select2" name="mr_status" >
                                                        <option value="Prepare" <?php if ($row->mr_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                        <option value="Complete" disabled>Approved</option>
                                                        <option value="Complete" disabled>Complete</option>
                                                    </select>
                                                <?php } else { ?>
                                                    <?php if ($row->mr_status=='Prepare') { ?>
                                                        <select class="form-control border-input select2" name="mr_status" >
                                                            <option value="Prepare" <?php if ($row->mr_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                            <option value="Approval" <?php if ($row->mr_status=='Approval'){echo 'selected';}?>>Approval</option>
                                                            <option value="Complete" disabled>Complete</option>
                                                        </select>
                                                    <?php } else if ($row->mr_status=='Approval') { ?>
                                                    <select class="form-control border-input select2" name="mr_status">
                                                        <option value="Prepare" disabled>Prepare</option>
                                                        <option value="Approval" <?php if ($row->mr_status=='Approval'){echo 'selected';}?>>Approval</option>
                                                        <option value="Complete" <?php if ($row->mr_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                    </select>
                                                    <?php } } ?>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Date</label>
                                                <?php 
                                                if ($row->mr_status=='Prepare') { ?>
                                                <input type="date" class="form-control border-input" name="req_date" value="<?php echo date("Y-m-d") ?>" readonly>
                                                <?php } else if ($row->mr_status=='Approval') { ?>
                                                <input type="date" class="form-control border-input" name="req_date" min="<?php echo $row->req_date; ?>" value="<?php echo $row->req_date; ?>" required readonly>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-5">
                                            <div class="form-group">
                                                <label>Remark</label>
                                                <textarea class="form-control border-input" rows="3" placeholder="Remark" name="remark"><?php echo $row->remark; ?></textarea>
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
