            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Purchasing Requsition
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>PR_Opex/update" method="POST">
                                    
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
                                                <input type="date" class="form-control border-input" name="pr_date" min="<?php echo date("Y-m-d") ?>" value="<?php echo $row->pr_date; ?>" required>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Status</label>
                                                <select class="form-control border-input select2" name="app_status">
                                                    <option value="Prepare" <?php if ($row->app_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="Complete" <?php if ($row->app_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Status</label>
                                                <select class="form-control border-input select2" name="ack_status">
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
                                                <?php 
                                                if ($pr_item < 1) { ?>
                                                    <select class="form-control border-input select2" name="pr_status" disabled readonly>
                                                        <option value="Prepare" <?php if ($row->pr_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    </select>
                                                <?php } else { ?>
                                                <select class="form-control border-input select2" name="pr_status">
                                                    <option value="Prepare" <?php if ($row->pr_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="Complete" <?php if ($row->pr_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Name</label>
                                                <select class="form-control border-input select2" name="app_name" required>
                                                    <option value="Mawar" <?php if ($row->app_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                    <option value="Adi Sofian" <?php if ($row->app_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Name</label>
                                                <select class="form-control border-input select2" name="ack_name" required>
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
                                                <select class="form-control border-input select2" name="req_name" required>
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
                                                <input type="date" class="form-control border-input" name="app_date" min="<?php echo date("Y-m-d") ?>" value="<?php echo $row->app_date; ?>">
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Date</label>
                                                <input type="date" class="form-control border-input" name="ack_date" min="<?php echo date("Y-m-d") ?>" value="<?php echo $row->ack_date; ?>">
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Priority</label>
                                                <select class="form-control border-input select2" name="pr_priority">
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
                                                    <input type="text" class="form-control border-input" name="po_number" >
                                                <?php } else { ?>
                                                <input type="text" class="form-control border-input" name="po_number" value="<?php echo $row->po_number; ?>" >
                                                <?php } ?>
                                            </div>
                                        </div>                                          
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit PR</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
