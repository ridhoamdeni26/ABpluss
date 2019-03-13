<?php $this->load->view('layout/header') ?>
  
  <body class="nav-md">
    <!-- <div id="loaderContainer" class="loader-container"> -->
        <!-- <div class="preloader">
          <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
          </div>
        </div> -->
        <!-- </div> -->
        <!-- <div id="loginContainer" class="loader-container flex-center-middle hidden">
            <login-container></login-container>
        </div> -->
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo site_url() ?>App/index" class="site_title"><img src="<?php echo base_url() ?>assets/build/images/logoAB.png" width="70px" height="auto" alt="logo.png"></img><span>ABPluss Car</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('layout/sidebar') ?>
            <!-- /sidebar menu -->
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
                    <img src="<?php echo base_url() ?>assets/build/images/user.png" >ADMIN
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url('site/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

    	<!-- page content -->
        <div class="right_col" role="main">
          <?php $this->load->view($contents) ?>
        </div>
        <!-- /page content -->

<?php $this->load->view('layout/footer') ?>

  </body>
</html>