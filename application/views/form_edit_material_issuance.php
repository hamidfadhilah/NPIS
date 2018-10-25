            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Material Issuance
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Material_Issuance/update" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Issuance</label>
                                                <input type="text" class="form-control border-input" name="no_issuance" value="<?php echo $row->no_issuance; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No MR</label>
                                                <input type="text" class="form-control border-input" name="no_mr" value="<?php echo $row->no_mr; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Adm</label>
                                                <select class="form-control border-input select2" name="wh_adm" required>
                                                    <option value="Mawar" <?php if ($row->wh_adm=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                    <option value="Adi Sofian" <?php if ($row->wh_adm=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Issuance Date</label>
                                                <input type="date" class="form-control border-input" name="issuance_date" min="<?php echo $row->issuance_date; ?>" value="<?php echo $row->issuance_date; ?>" required>
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Spv</label>
                                                <select class="form-control border-input select2" name="wh_spv" required>
                                                    <option value="Adi Sofian" <?php if ($row->wh_spv=='Adi Sofian'){echo 'selected';}?>>Adi Sofian</option>
                                                    <option value="Mawar" <?php if ($row->wh_spv=='Mawar'){echo 'selected';}?>>Mawar</option>
                                                </select>
                                            </div>
                                        </div>                           
                                    </div>

                                    <div class="row">
                                     <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Issuance Status</label>
                                                <?php 
                                                $bool = "false";
                                                foreach($item as $row1){
                                                    if ($row1->status_issuance_item != "Complete") {
                                                        $bool = "true";
                                                        break;
                                                    }
                                                }
                                                if ($bool == "true") { ?>
                                                    <select class="form-control border-input select2" name="issuance_status" required disabled>
                                                        <option value="Not Complete" <?php if ($row->issuance_status=='Not Complete'){echo 'selected';}?>>Not Complete</option>
                                                    </select>
                                                <?php } else { ?>
                                                <select class="form-control border-input select2" name="issuance_status" required>
                                                    <option value="Not Complete" <?php if ($row->issuance_status=='Not Complete'){echo 'selected';}?>>Not Complete</option>
                                                    <option value="Complete" <?php if ($row->issuance_status=='Complete'){echo 'selected';}?>>Complete</option>
                                                </select>
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
