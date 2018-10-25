            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Material Receiving
                        </div>
                        
                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>Material_Rcv/update" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>No Rcv</label>
                                                <input type="input" class="form-control border-input" name="no_rcv" placeholder="No Rcv" value="<?php echo $row->no_rcv; ?>" readonly>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Rcv Date</label>
                                                <input type="date" class="form-control border-input" name="rcv_date" min="<?php echo $row->rcv_date; ?>" value="<?php echo $row->rcv_date; ?>" readonly>
                                            </div>
                                        </div>                         
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PO Number</label>
                                                <input type="text" class="form-control border-input" name="po_number" value="<?php echo $row->po_number; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <?php 
                                                $bool = "false";
                                                foreach($result as $row1){
                                                        if ($row1->status_rcv_item != "Complete") { 
                                                            $bool = "true";
                                                            break;
                                                        }
                                                }
                                                if ($bool  == "false") { ?>
                                                    <select class="form-control border-input select2" name="status" required>
                                                        <option value="Not Complete" <?php if ($row->status=='Not Complete'){echo 'selected';}?>>Not Complete</option>
                                                        <option value="Complete" <?php if ($row->status=='Complete'){echo 'selected';}?>>Complete</option>
                                                    </select>
                                                <?php } else { ?>
                                                    <input type="text" class="form-control border-input" name="status" value="Not Complete" readonly>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DO Number</label>
                                                <input type="input" class="form-control border-input" name="do_number" placeholder="DO Number" value="<?php echo $row->do_number; ?>" readonly>
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
