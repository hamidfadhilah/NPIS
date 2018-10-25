                    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Item Master
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Item_Master/update" method="POST">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Item Code</label>
                                                <input type="text" class="form-control border-input" placeholder="itemcode" name="item_code" value="<?php echo $row->item_code; ?>" readonly>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input type="text" class="form-control border-input" placeholder="itemname" name="item_name" value="<?php echo $row->item_name; ?>">
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 1</label>
                                                <select class="form-control border-input select2" name="group1" data-placeholder="Group 1">
                                                    <option value="Reagent" <?php if ($row->group1=='Reagent'){echo 'selected';}?>>Reagent</option>
                                                    <option value="Sparepart"<?php if ($row->group1=='Sparepart'){echo 'selected';}?>>Sparepart</option>
                                                    <option value="Stationary" <?php if ($row->group1=='Stationary'){echo 'selected';}?>>Stationary</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Inventory Unit</label>
                                                <select class="form-control border-input select2" name="inventory_unit" data-placeholder="Inventory Unit">
                                                    <option value="Pcs" <?php if ($row->inventory_unit=='Pcs'){echo 'selected';}?>>Pcs</option>
                                                    <option value="Dus" <?php if ($row->inventory_unit=='Dus'){echo 'selected';}?>>Dus</option>
                                                    <option value="Pack" <?php if ($row->inventory_unit=='Pack'){echo 'selected';}?>>Pack</option>
                                                    <option value="Kg" <?php if ($row->inventory_unit=='Kg'){echo 'selected';}?>>Kg</option>
                                                    <option value="Unit" <?php if ($row->inventory_unit=='Unit'){echo 'selected';}?>>Unit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 2</label>
                                                <select class="form-control border-input select2" name="group2" data-placeholder="Group 2">
                                                    <option value="HVAC" <?php if ($row->group2=='HVAC'){echo 'selected';}?>>HVAC</option>
                                                    <option value="Electrical" <?php if ($row->group2=='Electrical'){echo 'selected';}?>>Electrical</option>
                                                    <option value="Mechanical" <?php if ($row->group2=='Mechanical'){echo 'selected';}?>>Mechanical</option>
                                                    <option value="Civil" <?php if ($row->group2=='Civil'){echo 'selected';}?>>Civil</option>
                                                    <option value="ATK" <?php if ($row->group2=='ATK'){echo 'selected';}?>>ATK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Item Handling</label>
                                                <input type="text" class="form-control border-input" placeholder="itemhandling" name="item_handling" value="<?php echo $row->item_handling; ?>">
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 3</label>
                                                <select class="form-control border-input select2" name="group3" data-placeholder="Group 3">
                                                    <option value="CAPEX" <?php if ($row->group3=='CAPEX'){echo 'selected';}?>>CAPEX</option>
                                                    <option value="OPEX" <?php if ($row->group3=='OPEX'){echo 'selected';}?>>OPEX</option>
                                                </select>
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Specification</label>
                                                <input type="text" class="form-control border-input" placeholder="specification" name="specification" value="<?php echo $row->specification; ?>">
                                            </div>
                                        </div>    
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 4</label>
                                                <select class="form-control border-input select2" name="group4" data-placeholder="Group 4">
                                                    <option value="ATK" <?php if ($row->group4=='ATK'){echo 'selected';}?>>ATK</option>
                                                    <option value="Electricity" <?php if ($row->group4=='Electricity'){echo 'selected';}?>>Electricity</option>
                                                    <option value="Filter Air dan Udara" <?php if ($row->group4=='Filter Air dan Udara'){echo 'selected';}?>>Filter Air dan Udara</option>
                                                    <option value="Fabrikasi" <?php if ($row->group4=='Fabrikasi'){echo 'selected';}?>>Fabrikasi</option>
                                                    <option value="Handy Talky" <?php if ($row->group4=='Handy Talky'){echo 'selected';}?>>Handy Talky</option>
                                                    <option value="Alat Komunikasi" <?php if ($row->group4=='Alat Komunikasi'){echo 'selected';}?>>Alat Komunikasi</option>
                                                    <option value="Kipas / FAN" <?php if ($row->group4=='Kipas / FAN'){echo 'selected';}?>>Kipas / FAN</option>
                                                    <option value="Panel" <?php if ($row->group4=='Panel'){echo 'selected';}?>>Panel</option>
                                                    <option value="Safety Shoes" <?php if ($row->group4=='Safety Shoes'){echo 'selected';}?>>Safety Shoes</option>
                                                    <option value="Umum" <?php if ($row->group4=='Umum'){echo 'selected';}?>>Umum</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Item </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    