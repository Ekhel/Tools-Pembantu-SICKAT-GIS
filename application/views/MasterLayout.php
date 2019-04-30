<!DOCTYPE html>
<html lang en="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
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
        <script src="<?php echo base_url('assets/leaflet/groupedLayerControl.js')?>"></script>
        <!--<script src="https://rawgithub.com/ismyrnow/Leaflet.groupedlayercontrol/master/src/leaflet.groupedlayercontrol.js"></script>!-->
        <script src="<?php echo base_url('assets/leaflet/Leaflet.PolylineMeasure.js')?>"></script>
        <script src="<?php echo base_url('assets/leaflet/easy-button.js')?>"></script>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/leaflet/leaflet_draw.css" />
        <!--<link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css" />!-->
        <!--<script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>!-->
        <script src="<?php echo base_url('assets/leaflet/leaflet_draw.js')?>"></script>
    </head>
    <style>
        html, body {
          height: 800px;
          width: 100%;
        }
    </style>
    <body>
        <div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="<?php echo base_url(); ?>Home" class="navbar-brand">
                        <small>
                            <i class="fa fa-globe"></i>
                            SICKAT GIS
                        </small>
                    </a>

                    <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                        <span class="sr-only">Toggle user menu</span>

                        <img src="<?php echo base_url()?>assets/css/bootstrap.min.cssassets/images/avatars/user.jpg" alt="Jason's Photo" />
                    </button>

                    <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                        <span class="sr-only">Toggle sidebar</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                    <ul class="nav ace-nav">

                      <li>
                          <a href="<?php echo base_url(); ?>Login">
                              <i class="ace-icon fa fa-lock"></i>
                              Masuk
                          </a>
                      </li>

                    </ul>
                </div>

                <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Alat
                                &nbsp;
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url()?>Home/faq">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Cek Shape File
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>Home/faq">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Gambar Peta
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Peta
                                &nbsp;
                                <i class="ace-icon fa fa-angle-down bigger-110"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                                <li>
                                    <a href="<?php echo base_url('Home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Jalan & Jembatan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Perumahan Masyarakat
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Fasilitas Umum
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Home/applikasi'); ?>">
                                        <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                        Perkebunan
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


            <div class="main-content">
                 <?php echo $contents;?>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">SICKAT GIS</span>
                            Application &copy; 2018 Penlap | BAPPEDA KAB. JAYAPURA
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
