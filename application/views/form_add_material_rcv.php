            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Material Receiving
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Material_Rcv/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Rcv</label>
                                                <input type="input" class="form-control border-input" name="no_rcv" placeholder="No Rcv" required>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Rcv Date</label>
                                                <input type="date" class="form-control border-input" name="rcv_date" min="<?php echo date("Y-m-d") ?>" required>
                                            </div>
                                        </div>                         
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PO Number</label>
                                                <select class="selectpicker" data-live-search="true" name="po_number" required>
                                                <option value=""></option>
                                                        <?php
                                                            $bool ="false";
                                                            foreach($result as $row){
                                                                foreach($rcv as $row1){
                                                                    if ($row->po_number == $row1->po_number) {
                                                                        $bool = "true";
                                                                        break;           
                                                                    } else 
                                                                        $bool = "false";
                                                                }
                                                                if ($row->po_number != "" & $bool == "false"){?>
                                                                    <option value="<?php echo $row->po_number;?>"><?php echo $row->po_number;?></option>                                                                 
                                                        <?php }} ?>          
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" class="form-control border-input" name="status" value="Not Complete" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DO Number</label>
                                                <input type="text" class="form-control border-input" name="do_number" placeholder="DO Number" required>
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
