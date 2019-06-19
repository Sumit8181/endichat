<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url() ; ?>index.php/admindashboard/">Dashboard</a></li>
                      <li><a href="<?php echo base_url() ; ?>index.php/admindashboard/sitesettings">Settings</a></li>
                      <li><a href="<?php echo base_url() ; ?>index.php/admindashboard/sitesettings">App Settings</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?php echo base_url() ; ?>index.php/admindashboard/sitesettings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url() ; ?>index.php/admin/admin_logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ; ?>assets/admindashboard/production/images/Endichat_LOGO.png" alt="">Super Admin
                    <span class=" fas fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url() ; ?>index.php/admindashboard/changepassword/"> Change Password</a></li>
                    
                    <li><a href="<?php echo base_url() ; ?>index.php/admindashboard/">Dashboard</a></li>
                    <li><a href="<?php echo base_url() ; ?>index.php/admin/admin_logout">
                      <i class="fas fa-sign-out-alt"></i> Log Out</a> </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->