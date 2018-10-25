            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah User
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form class="form-horizontal" action="<?php echo base_url();?>user/add" method="POST">
                                    <div class="row">
                                        <div class="form-group">
                                        <label class="control-label col-sm-5" >Name</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control border-input" placeholder="name" name="name" required oninvalid="this.setCustomValidity('Input Name and Minimum At Least 5')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',this)" maxlength="30" minlength="5">
                                        </div>
                                      </div>                                  
                                    </div>

                                    <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5">Department</label>
                                                <div class="col-sm-3">
                                                <select class="selectpicker" data-live-search="true" name="dept" required>
                                                    <option value=""></option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="GOJ">GOJ</option>
                                                    <option value="GBK">GBK</option>
                                                    <option value="GBB">GBB</option>
                                                    <option value="QC">QC</option>
                                                    <option value="Ekspedisi">Ekspedisi</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                        <label class="control-label col-sm-5" >Username</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control border-input" placeholder="Username" name="username" required oninvalid="this.setCustomValidity('Input Username and Minimum At Least 5')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',this)" maxlength="15" minlength="5">
                                        </div>
                                      </div>                                  
                                    </div>

                                    <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5">Password</label>
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control border-input" placeholder="Enter Password" name="password" required oninvalid="this.setCustomValidity('Masukkan Password and Minimum At Least 6')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890',this)" maxlength="12" minlength="6">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5">Level</label>
                                                <div class="col-sm-3">
                                                <select class="selectpicker" data-live-search="true" name="level" required>
                                                    <option value=""></option>
                                                    <option value="supervisor">supervisor</option>
                                                    <option value="admteknik">admteknik</option>
                                                    <option value="operator">operator</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Tambah User </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
