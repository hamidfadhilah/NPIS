            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Work Order
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Work_Order/update" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No WO</label>
                                                <input type="text" class="form-control border-input" name="no_wo" value="<?php echo $row->no_wo; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No WOR</label>
                                                <input type="text" class="form-control border-input" name="no_wor" value="<?php echo $row->no_wor; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Work Order Status</label>
                                                <select class="form-control border-input select2" name="wo_status" required>
                                                    <?php if($row->wo_status == "Prepare" ) {?>
                                                    <option value="Prepare" <?php if ($row->wo_status=='Prepare'){echo 'selected';}?>>Prepare</option>
                                                    <option value="On Work" <?php if ($row->wo_status=='On Work'){echo 'selected';}?>>On Work</option>
                                                    <option value="Complete" disabled>Complete</option>
                                                    <?php } else if($row->wo_status == "On Work" ) {?>
                                                    <option value="Prepare" disabled>Prepare</option>
                                                    <option value="On Work" <?php if ($row->wo_status=='On Work'){echo 'selected';}?>>On Work</option>
                                                    <option value="Complete" <?php if ($row->wo_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ack Name</label>
                                                <select class="form-control border-input select2" name="ack_name" required>
                                                    <?php if($row->wo_status == "On Work" ) {?>
                                                    <option value="Adi Sofian" <?php if ($row->ack_name=='Adi Sofian'){echo 'selected';} else echo 'disabled';?>>Adi Sofian</option>
                                                    <option value="Mawar" <?php if ($row->ack_name=='Mawar'){echo 'selected';} else echo 'disabled';?>>Mawar</option>
                                                <?php } else { ?> 
                                                    <option value="Adi Sofian" <?php if ($row->ack_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                    <option value="Mawar" <?php if ($row->ack_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <?php if($row->wo_status == "On Work" ) {?>
                                                <input type="date" class="form-control border-input" name="start_date" min="<?php echo $row->start_date; ?>" value="<?php echo $row->start_date; ?>" readonly>
                                                <?php } else { ?> 
                                                <input type="date" class="form-control border-input" name="start_date" min="<?php echo $row->start_date; ?>"  value="<?php echo $row->start_date; ?>" required>
                                                <?php } ?> 
                                            </div>
                                        </div>                           
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Approval Name</label>
                                                <select class="form-control border-input select2" name="app_name" required>
                                                <?php if($row->wo_status == "On Work" ) {?>
                                                    <option value="Adi Sofian" <?php if ($row->app_name=='Adi Sofian'){echo 'selected';} else echo 'disabled';?>>Adi Sofian</option>
                                                    <option value="Mawar" <?php if ($row->app_name=='Mawar'){echo 'selected';} else echo 'disabled';?>>Mawar</option>
                                                <?php } else { ?> 
                                                    <option value="Adi Sofian" <?php if ($row->app_name=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                    <option value="Mawar" <?php if ($row->app_name=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                <?php } ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Finish Date</label>
                                                <input type="date" class="form-control border-input" name="finish_date" min="<?php echo $row->start_date; ?>" value="<?php echo $row->finish_date; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Action</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Action" name="action"><?php echo $row->action; ?></textarea>
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Prevention</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Prevention" name="prevention"><?php echo $row->prevention; ?></textarea>
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
