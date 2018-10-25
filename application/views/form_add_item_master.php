            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Item Master
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Item_Master/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <input type="text" class="form-control border-input" placeholder="itemname" name="item_name" required>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 1</label>
                                                <select class="form-control border-input select2" name="group1" data-placeholder="Group 1">
                                                    <option value="Reagent">Reagent</option>
                                                    <option value="Sparepart">Sparepart</option>
                                                    <option value="Stationary">Stationary</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Inventory Unit</label>
                                                <select class="form-control border-input select2" name="inventory_unit" data-placeholder="Inventory Unit">
                                                    <option value="Pcs">Pcs</option>
                                                    <option value="Dus">Dus</option>
                                                    <option value="Pack">Pack</option>
                                                    <option value="Kg">Kg</option>
                                                    <option value="Unit">Unit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 2</label>
                                                <select class="form-control border-input select2" name="group2" data-placeholder="Group 2">
                                                    <option value="HVAC">HVAC</option>
                                                    <option value="Electrical">Electrical</option>
                                                    <option value="Mechanical">Mechanical</option>
                                                    <option value="Civil">Civil</option>
                                                    <option value="ATK">ATK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Item Handling</label>
                                                <input type="text" class="form-control border-input" placeholder="itemhandling" name="item_handling">
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 3</label>
                                                <select class="form-control border-input select2" name="group3" data-placeholder="Group 3">
                                                    <option value="CAPEX">CAPEX</option>
                                                    <option value="OPEX">OPEX</option>
                                                </select>
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Specification</label>
                                                <textarea class="form-control border-input" rows="3" placeholder="specification" name="specification"></textarea>
                                            </div>
                                        </div>    
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Group 4</label>
                                                <select class="form-control border-input select2" name="group4" data-placeholder="Group 4">
                                                    <option value="ATK">ATK</option>
                                                    <option value="Electricity">Electricity</option>
                                                    <option value="Filter Air dan Udara">Filter Air dan Udara</option>
                                                    <option value="Fabrikasi">Fabrikasi</option>
                                                    <option value="Handy Talky">Handy Talky</option>
                                                    <option value="Alat Komunikasi">Alat Komunikasi</option>
                                                    <option value="Kipas / FAN">Kipas / FAN</option>
                                                    <option value="Panel">Panel</option>
                                                    <option value="Safety Shoes">Safety Shoes</option>
                                                    <option value="Umum">Umum</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Item</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
