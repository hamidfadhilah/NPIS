            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Material Issuance
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Material_Issuance/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No MR</label>
                                                <select class="selectpicker" data-live-search="true" name="no_mr" required>
                                                <option value=""></option>
                                                <?php
                                                            $bool ="false";
                                                            foreach($result as $row){
                                                                foreach($mr as $row1){
                                                                    if ($row->no_mr == $row1->no_mr) {
                                                                        $bool = "true";
                                                                        break;           
                                                                    } else 
                                                                        $bool = "false";
                                                                }
                                                                if ($row->no_mr != "" & $bool == "false"){?>
                                                                    <option value="<?php echo $row->no_mr;?>"><?php echo $row->no_mr;?></option>                                                                 
                                                        <?php }} ?> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Adm</label>
                                                <select class="form-control border-input select2" name="wh_adm" required>
                                                    <option value="Mawar">Mawar</option>
                                                    <option value="Adi Sofian">Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Issuance Date</label>
                                                <input type="date" class="form-control border-input" name="issuance_date" min="<?php echo date("Y-m-d") ?>" required>
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Warehouse Spv</label>
                                                <select class="form-control border-input select2" name="wh_spv" required>
                                                    <option value="Adi Sofian">Adi Sofian</option>
                                                    <option value="Mawar">Mawar</option>
                                                </select>
                                            </div>
                                        </div>                           
                                    </div>

                                    <div class="row">
                                     <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Issuance Status</label>
                                                <select class="form-control border-input select2" name="issuance_status" required disabled>
                                                    <option value="Not Complete">Not Complete</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
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
