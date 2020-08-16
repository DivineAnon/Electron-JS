<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="bootstrap material admin template" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BODC CYBER APPS | VALIDATOR</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("global/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/css/bootstrap-extend.min.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/css/site.min.css")}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset("global/vendor/animsition/animsition.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asscrollable/asScrollable.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/switchery/switchery.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/intro-js/introjs.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/slidepanel/slidePanel.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-mmenu/jquery-mmenu.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/flag-icon-css/flag-icon.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/waves/waves.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/select2/select2.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-select/bootstrap-select.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/icheck/icheck.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/switchery/switchery.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asrange/asRange.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/ionrangeslider/ionrangeslider.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asspinner/asSpinner.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/clockpicker/clockpicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/ascolorpicker/asColorPicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-touchspin/bootstrap-touchspin.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-labelauty/jquery-labelauty.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-datepicker/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-maxlength/bootstrap-maxlength.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/timepicker/jquery-timepicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-strength/jquery-strength.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/multi-select/multi-select.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/typeahead-js/typeahead.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/examples/css/forms/advanced.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/datatables.net-bs4/dataTables.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/examples/css/tables/datatable.css")}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset("global/fonts/font-awesome/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/material-design/material-design.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/brand-icons/brand-icons.min.css")}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:700,400,500,700italic'>

    <!-- Scripts -->
    <script src="{{asset("global/vendor/breakpoints/breakpoints.js")}}"></script>
    <script>
        Breakpoints();

    </script>
</head>

<body class="animsition site-navbar-small dashboard">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
                <i class="icon md-more" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="{{asset("global/vendor/breakpoints/breakpoints.js")}}assets/mmenu/assets/images/logo.png" title="Remark" />
                <span class="navbar-brand-text hidden-xs-down">BODC APPS</span>
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->
                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link waves-effect waves-light waves-round">
                            <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                            data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <img src="{{asset("global/vendor/breakpoints/breakpoints.js")}}assets/global/portraits/5.jpg" alt="..." />
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-account" aria-hidden="true"></i> {{ auth()->user()->name }}</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-accounts-list" aria-hidden="true">{{ auth()->user()->username }}</i> </a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-calendar" aria-hidden="true"></i> {{  now()->toDateString('YYYY-mm-dd') }}</a>
                            <a class="dropdown-item" href="{{ route('web.logout') }}" role="menuitem"><i class="icon md-power"
                                    aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <div class="site-menubar">
        <ul class="site-menu">
            <li class="site-menu-item active">
                <a class="animsition-link" href="index.html">
                    <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">All Data Report</span>
                </a>
            </li>
            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">Unit Status</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row">
                <form action="" class="form-inline">
                    <div class="col-12 col-md-6 col-sm-12" style="margin-left: 180px; margin-top: 10px;">
                        <div class="panel">
                            <header class="panel-heading text-center">
                                <div class="panel-actions"></div>
                                <h1 class="panel-title"
                                    style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                    Unit
                                    Status</h1>
                            </header>
                            <div class="card" style="color: #000000;">
                                <div class="card-block"
                                    style="padding: 0.429rem !important; display: flex; flex-flow: row wrap; align-items: center;">
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Nomor Unit : 200</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Loader : E001</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Kode Proses : (101) Pengangkutan Batubara</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Loading Point : Crusing</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Kode Material : (TS) Top Soil</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Dumping Area : Bunyut</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Kode Aktivitas : (A01) Compacting</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Jarak (KM) : 38</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                                        <h4>Total (BCM/TON) : <strong>872</strong></h4>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                                        <h4>Total HM : <strong>8,3</strong></h4>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                                        <h4>Total Ritasi : <strong>1500</strong></h4>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                                        <h4>Total KM : <strong>315,8</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12">
                                <div class="panel">
                                    <header class="panel-heading text-center">
                                        <div class="panel-actions"></div>
                                        <h1 class="panel-title"
                                            style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                            Operator Information</h1>
                                    </header>
                                    <div class="card" style="color: #000000;">
                                        <div class="card-block"
                                            style="display: flex; flex-flow: row wrap; align-items: center;">
                                            <div class="col-lg-6 col-md-8 col-sm-12">
                                                <p>Nama Operator : <strong>Budi Sudarsono</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-12">
                                                <p>Tanggal Aktivitas : <strong>17 Januari 2020</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-8 col-sm-12">
                                                <p>NRP : <strong>123456789</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-12">
                                                <p>Total Jam OPT : <strong>12 Jam</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12">
                                <div class="panel">
                                    <header class="panel-heading text-center">
                                        <div class="panel-actions"></div>
                                        <h1 class="panel-title"
                                            style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                            Imputer Information</h1>
                                    </header>
                                    <div class="card" style="color: #000000;">
                                        <div class="card-block"
                                            style="display: flex; flex-flow: row wrap; align-items: center;">
                                            <div class="col-lg-6 col-md-8 col-sm-12">
                                                <p>Nama Imputer : <strong>Budi Sudarsono</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-12">
                                                <p>Tanggal Input : <strong>17 Januari 2020</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-8 col-sm-12">
                                                <p>NRP : <strong>123456789</strong></p>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-12">
                                                <p>Jam Input : <strong>12:20</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-sm-12 mt-15" style="margin-left: 152px;">
                        <!-- Panel Basic -->
                        <div class="panel" style="margin-left: 30px;">
                            <header class="panel-heading text-center">
                                <div class="panel-actions"></div>
                                <h1 class="panel-title"
                                    style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                    Standby
                                    Status</h1>
                            </header>
                            <div class="panel-body mt-10" style="background:#FAFAFA">
                                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Standby</th>
                                            <th>Waktu 1</th>
                                            <th>Waktu 2</th>
                                            <th>Waktu 3</th>
                                            <th>Waktu 4</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>(S01) P2H</td>
                                            <td>07.30-07.40</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>(S02) Isi Solar</td>
                                            <td></td>
                                            <td>07.30-07.40</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Panel Basic -->
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 mt-10 mb-20" style="margin-left: 188px;">
                        <a href="" class="btn btn-primary rounded-pill"
                            style="display:flex; flex-direction:column;background-color: orange !important;">Edit</a>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 mt-10 mb-20">
                        <a href="" class="btn btn-primary rounded-pill"
                            style="display:flex; flex-direction:column;background-color: #0ACB40 !important;">Confirm</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Page -->
    <!-- Core  -->
    <script src="{{asset("global/vendor/babel-external-helpers/babel-external-helpers.js")}}">
    </script>
    <script src="{{asset("global/vendor/jquery/jquery.js")}}"></script>
    <script src="{{asset("global/vendor/popper-js/umd/popper.min.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap/bootstrap.js")}}"></script>
    <script src="{{asset("global/vendor/animsition/animsition.js")}}"></script>
    <script src="{{asset("global/vendor/mousewheel/jquery.mousewheel.js")}}"></script>
    <script src="{{asset("global/vendor/asscrollbar/jquery-asScrollbar.js")}}"></script>
    <script src="{{asset("global/vendor/asscrollable/jquery-asScrollable.js")}}"></script>
    <script src="{{asset("global/vendor/waves/waves.js")}}"></script>

    <!-- Plugins -->
    <script src="{{asset("global/vendor/jquery-mmenu/jquery.mmenu.min.all.js")}}"></script>
    <script src="{{asset("global/vendor/switchery/switchery.js")}}"></script>
    <script src="{{asset("global/vendor/intro-js/intro.js")}}"></script>
    <script src="{{asset("global/vendor/screenfull/screenfull.js")}}"></script>
    <script src="{{asset("global/vendor/slidepanel/jquery-slidePanel.js")}}"></script>
    <script src="{{asset("global/vendor/select2/select2.full.min.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-select/bootstrap-select.js")}}"></script>
    <script src="{{asset("global/vendor/icheck/icheck.min.js")}}"></script>
    <script src="{{asset("global/vendor/switchery/switchery.js")}}"></script>
    <script src="{{asset("global/vendor/asrange/jquery-asRange.min.js")}}"></script>
    <script src="{{asset("global/vendor/ionrangeslider/ion.rangeSlider.min.js")}}"></script>
    <script src="{{asset("global/vendor/asspinner/jquery-asSpinner.min.js")}}"></script>
    <script src="{{asset("global/vendor/clockpicker/bootstrap-clockpicker.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/ascolor/jquery-asColor.min.js")}}"></script>
    <script src="{{asset("global/vendor/asgradient/jquery-asGradient.min.js")}}"></script>
    <script src="{{asset("global/vendor/ascolorpicker/jquery-asColorPicker.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-maxlength/bootstrap-maxlength.js")}}">
    </script>
    <script src="{{asset("global/vendor/jquery-knob/jquery.knob.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/jquery-labelauty/jquery-labelauty.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-datepicker/bootstrap-datepicker.js")}}">
    </script>
    <script src="{{asset("global/vendor/timepicker/jquery.timepicker.min.js")}}"></script>
    <script src="{{asset("global/vendor/datepair/datepair.min.js")}}"></script>
    <script src="{{asset("global/vendor/datepair/jquery.datepair.min.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-strength/password_strength.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-strength/jquery-strength.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/multi-select/jquery.multi-select.js")}}"></script>
    <script src="{{asset("global/vendor/typeahead-js/bloodhound.min.js")}}"></script>
    <script src="{{asset("global/vendor/typeahead-js/typeahead.jquery.min.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-placeholder/jquery.placeholder.js")}}">
    </script>

    <!-- Scripts -->
    <script src="{{asset("global/js/Component.js")}}"></script>
    <script src="{{asset("global/js/Plugin.js")}}"></script>
    <script src="{{asset("global/js/Base.js")}}"></script>
    <script src="{{asset("global/js/Config.js")}}"></script>

    <script src="{{asset("mmenu/assets/js/Section/Menubar.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/Sidebar.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/PageAside.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/GridMenu.js")}}"></script>

    <!-- Config -->
    <script src="{{asset("global/js/config/colors.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/config/tour.js")}}"></script>

    <!-- Page -->
    <script src="{{asset("mmenu/assets/js/Site.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asscrollable.js")}}"></script>
    <script src="{{asset("global/js/Plugin/slidepanel.js")}}"></script>
    <script src="{{asset("global/js/Plugin/switchery.js")}}"></script>
    <script src="{{asset("global/js/Plugin/select2.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-tokenfield.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-tagsinput.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-select.js")}}"></script>
    <script src="{{asset("global/js/Plugin/icheck.js")}}"></script>
    <script src="{{asset("global/js/Plugin/switchery.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asrange.js")}}"></script>
    <script src="{{asset("global/js/Plugin/ionrangeslider.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asspinner.js")}}"></script>
    <script src="{{asset("global/js/Plugin/clockpicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/ascolorpicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-maxlength.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-knob.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-touchspin.js")}}"></script>
    <script src="{{asset("global/js/Plugin/card.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-labelauty.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-datepicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jt-timepicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/datepair.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-strength.js")}}"></script>
    <script src="{{asset("global/js/Plugin/multi-select.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-placeholder.js")}}"></script>

    <script src="{{asset("global/vendor/datatables.net/jquery.dataTables.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-bs4/dataTables.bootstrap4.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-scroller/dataTables.scroller.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-responsive/dataTables.responsive.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/dataTables.buttons.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.html5.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.flash.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.print.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.colVis.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js")}}">
    </script>
    <script src="{{asset("mmenu/assets/examples/js/forms/advanced.js")}}"></script>
    <script src="{{asset("global/js/Plugin/datatables.js")}}"></script>

    <script src="{{asset("mmenu/assets/examples/js/tables/datatable.js")}}"></script>

    <script>
        //delete post
        $(document).on('click', '.delete-modal', function () {
            $('.modal-title').text('Delete');
            $('#id_delete').val($(this).data('id'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
        });
        $('.modal-footer').on('click', '.delete', function () {
            $.ajax({
                type: 'DELETE',
                url: 'daily-activity/' + id,
                data: {
                    "_token": "{{csrf_token()}}",
                },
                success: function (data) {
                    toastr.success('Successfully deleted!', 'Success Alert', {
                        timeOut: 5000
                    });
                    $datatable.row($('.stanby_time' + data['id'])).remove().draw();
                }
            });
        });
    </script>
</body>

</html>
