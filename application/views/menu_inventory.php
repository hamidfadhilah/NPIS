            
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>Stock_Opname">Stock Opname</a></li>
                        <?php 
                        if($this->session->userdata('level') == "admteknik"){
                        ?>
                        <li><a href="<?php echo base_url();?>New_Material_Request">New Material Request</a></li>
                        <?php }?>
                        <li><a href="<?php echo base_url();?>Material_Issuance">Material Issuance</a></li>
                        <li><a href="<?php echo base_url();?>Work_Order">Work Order</a></li>
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

                    <?php 
                    if($this->session->userdata('level') == "supervisor"){
                    ?>
                    <ul class="nav navbar-nav navbar-right">                
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="ti-bell"></i>
                                <span class="badge_notify red">7</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>  
                         </li>
                    </ul>
                    <?php } ?>
                </div>
            </div>        
            
                
        