<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $title ?></title>
        <meta name="description" content="top menu navigation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/awesome-bootstrap-checkbox.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.googleapis.com.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css')?>" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-skins.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/leaflet/leaflet.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/leaflet/easy-button.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/leaflet/Leaflet.PolylineMeasure.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/leaflet/leaflet.js')?>"></script>
        <script src="<?php echo base_url('assets/leaflet-providers/leaflet-providers.js')?>"></script>
        <script src="https://rawgithub.com/ismyrnow/Leaflet.groupedlayercontrol/master/src/leaflet.groupedlayercontrol.js"></script>
        <script src="<?php echo base_url('assets/leaflet/Leaflet.PolylineMeasure.js')?>"></script>
        <script src="<?php echo base_url('assets/leaflet/easy-button.js')?>"></script>
        <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css" />
        <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>

        <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
        <?php if(isset($map['js'])) echo $map['js'];?>

    </head>
    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            GIS (SICKAT)
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php base_url('assets/images/avatars/avatar2.png')?>" alt="User" />
                                <span class="user-info">
                                    <small>User </small>
                                    Michael
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="profile.html">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                API Reference

                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Result API
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                        Request API
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Content
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url('Home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Applikasi
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                        Menu I
                                    </a>
                                </li>

                                 <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-map bigger-110 blue"></i>
                                        Menu II
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                </nav>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>


                <ul class="nav nav-list">
                    <li class="active">
                        <a href="index.html">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('Maps/admin_kabjayapura')?>">
                            <i class="menu-icon fa fa-map"></i>
                            <span class="menu-text"> Peta Admin</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('Maps/drag')?>">
                            <i class="menu-icon fa fa-upload"></i>
                            <span class="menu-text"> Import Shape File</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('Maps/FileManager')?>">
                            <i class="menu-icon fa fa-file"></i>
                            <span class="menu-text"> GeoJson File </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('Maps/rumah') ?>">
                            <i class="menu-icon fa fa-cogs"></i>
                            <span class="menu-text"> Rumah </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">


                    <div class="page-content">


                        <?php echo $contents;?>



                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">SICKAT</span>
                            Application &copy;  Penlap | BAPPEDA KAB. JAYAPURA
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <script src="<?php echo base_url('assets/js/ace-extra.min.js')?>"></script>
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js')?>'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/ace-elements.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/ace.min.js')?>"></script>
    </body>

</html>
