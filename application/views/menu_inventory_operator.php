        
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>New_Material_Request">New Material Request</a></li>
                        <li><a href="<?php echo base_url();?>Material_Request">Material Request</a></li>
                        <li><a href="<?php echo base_url();?>Work_Order_Request">Work Order Request</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="ti-user"></i>
                                <p><?php echo $this->session->userdata('username')?></p>
                            </a>
                            <ul class="dropdown-menu">
                                <center><li class="dropdown-menu-title"><span>Account Settings</span></li>
                                <li><a href="<?php echo base_url();?>login/logout">Logout</a></li></center>
                            </ul>
                        </li>               
                    </ul>
                </div>
            </div>
        