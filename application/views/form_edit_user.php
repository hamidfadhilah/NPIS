            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit User
                        </div>

                        <div class="panel-body">
                            <div class="content">
                                <form class="form-horizontal" action="<?php echo base_url();?>user/update" method="POST">
                                    <div class="row">
                                        <div class="form-group">
                                        <label class="control-label col-sm-5" >User ID</label>
                                        <div class="col-sm-3">
                                                <input type="text" class="form-control border-input" placeholder="userid" name="user_id" value="<?php echo $row->user_id; ?>" readonly>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                        <label class="control-label col-sm-5" >Name</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control border-input" placeholder="name" name="name" value="<?php echo $row->name; ?>" required oninvalid="this.setCustomValidity('Input Name and Minimum At Least 5')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',this)" maxlength="30" minlength="5">
                                        </div>
                                      </div>                                  
                                    </div>

                                    <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5">Department</label>
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control border-input" placeholder="department" name="dept" value="<?php echo $row->dept; ?>" readonly>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                        <label class="control-label col-sm-5" >Username</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control border-input" placeholder="Username" name="username" required oninvalid="this.setCustomValidity('Input Username and Minimum At Least 5')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',this)" maxlength="15" minlength="5" value="<?php echo $row->username; ?>">
                                        </div>
                                      </div>                                  
                                    </div>
                                    
                                    <div class="row">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5">Password</label>
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control border-input" placeholder="Enter Password" name="password" required oninvalid="this.setCustomValidity('Masukkan Password and Minimum At Least 6')" oninput="setCustomValidity('')"  onKeyPress="return huruf(event,'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890',this)" maxlength="12" minlength="6" value="<?php echo $row->password; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                                <label class="control-label col-sm-5">Level</label>
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control border-input" placeholder="level" name="level" value="<?php echo $row->level; ?>" readonly>

                                                <!-- <select class="form-control border-input select2" name="level" data-placeholder="level">
                                                    <option value="admin" <?php if ($row->level=='admin'){echo 'selected';}?>>admin</option>
                                                    <option value="supervisor"<?php if ($row->level=='supervisor'){echo 'selected';}?>>supervisor</option>
                                                    <option value="admteknik" <?php if ($row->level=='admteknik'){echo 'selected';}?>>admteknik</option>
                                                    <option value="operator" <?php if ($row->level=='operator'){echo 'selected';}?>>operator</option>
                                                </select> -->
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit User </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
