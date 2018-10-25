            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Add Purchasing Requsition
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form action="<?php echo base_url();?>PR_Opex/add" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PR Date</label>
                                                <input type="date" class="form-control border-input" name="pr_date" min="<?php echo date("Y-m-d") ?>" required>
                                            </div>
                                        </div> 
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Status</label>
                                                <input type="text" class="form-control border-input" name="app_status" value="Prepare" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Status</label>
                                                <input type="text" class="form-control border-input" name="ack_status" value="Prepare" readonly>
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Status</label>
                                                <input type="text" class="form-control border-input" name="pr_status" value="Prepare" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Name</label>
                                                <select class="form-control border-input select2" name="app_name" required>
                                                    <option value="Mawar">Mawar</option>
                                                    <option value="Adi Sofian">Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Name</label>
                                                <select class="form-control border-input select2" name="ack_name" required>
                                                    <option value="Mawar">Mawar</option>
                                                    <option value="Adi Sofian">Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Name</label>
                                                <select class="form-control border-input select2" name="req_name" required>
                                                    <option value="Mawar">Mawar</option>
                                                    <option value="Adi Sofian">Adi Sofian</option>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Req Dept</label>
                                                <input type="text" class="form-control border-input" name="req_dept" value="Sanbe Central Warehouse" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Approval Date</label>
                                                <input type="date" class="form-control border-input" name="app_date" readonly>
                                            </div>
                                        </div>
                                        <div class="pull-right col-md-3">
                                            <div class="form-group">
                                                <label>Ack Date</label>
                                                <input type="date" class="form-control border-input" name="ack_date" readonly>
                                            </div>
                                        </div>                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>PR Priority</label>
                                                <select class="form-control border-input select2" name="pr_priority">
                                                    <option value="Normal">Normal</option>
                                                    <option value="Required">Urgent</option>
                                                </select>
                                            </div>
                                        </div>                                           
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add PR</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>  
                    </div>  
