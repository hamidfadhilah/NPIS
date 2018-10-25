            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Item Detail
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form name='form1' action="<?php echo base_url();?>Item_Detail/add" method="POST" >
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <select class="selectpicker" data-live-search="true" name="item_name" required>
                                                    <option value=""></option>
                                                        <?php foreach($item_name as $row){
                                                            if ($row->item_name != ""){?>
                                                    <option value="<?php echo $row->item_name;?>"><?php echo $row->item_name;?></option>
                                                        <?php }} ?>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Manufacture</label>
                                                <input type="text" class="form-control border-input" placeholder="manufacture" name="manufacture" required>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Item Detail Name</label>
                                                <input type="text" class="form-control border-input" placeholder="item detail name" name="item_detail_name" required >
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Vendor</label>
                                                <input type="text" class="form-control border-input" placeholder="vendor" name="vendor" required>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Lead Time</label>
                                                <input type="number" class="form-control border-input" placeholder="lead time" min="0" name="lead_time" id="time" onchange="total();" required>
                                            </div>
                                        </div> 
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Packing Size</label>
                                                <input type="number" class="form-control border-input" placeholder="packing size" min="0" name="packing_size" required />
                                            </div>
                                        </div>   
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Packing Unit</label>
                                                <input type="number" class="form-control border-input" placeholder="packing unit" min="0" name="packing_unit" required />
                                            </div>
                                        </div>  
                                        <div class="pull-right col-md-4">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control border-input select2" name="status" required>
                                                    <option value="Active">Active</option>
                                                    <option value="Non Active">Non Active</option>
                                                </select>
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ROP</label>
                                                <input type="number" class="form-control border-input" placeholder="rop" name="rop" id="rop" value="" readonly />
                                            </div>
                                        </div>  
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Min Level</label>
                                                <input type="number" class="form-control border-input" placeholder="min level" min="0" name="min_level" id="min" onchange="total();" required />
                                            </div>
                                        </div>  
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Min Order</label>
                                                <input type="number" class="form-control border-input" placeholder="min order" min="0" name="min_order" required />
                                            </div>
                                        </div>                              
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Max Level</label>
                                                <input type="number" class="form-control border-input" placeholder="max level" name="max_level" id="max" onchange ="total();" required />
                                            </div>
                                        </div>  
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Req Month</label>
                                                <input type="number" class="form-control border-input" placeholder="req month" min="0" name="req_month" id="req" onchange ="total();" required />
                                            </div>
                                        </div>  
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>UOM</label>
                                                <input type="number" class="form-control border-input" placeholder="uom" name="uom" readonly />
                                            </div>
                                        </div>                              
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <script type="text/javascript">
                                        
                                        function total() {
                                        var t = parseInt(document.getElementById('time').value);
                                        var x = parseInt(document.getElementById('req').value);
                                        var n = parseInt(document.getElementById('min').value);

                                        var jml_rop = (t * x) + n;

                                        document.getElementById('rop').value = jml_rop;
                                        document.getElementById('max').min = n;
                                        }
                                        
                                        
                                        </script>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  

