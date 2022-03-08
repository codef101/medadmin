<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>MendSwap | - Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="MendSwap is the Automatic Market Maker protocol based on Binance Smart Chain BEP-20 | MendSwap FIX token" name="description" />
        <meta content="Token, Crytocurrency trading, DeFi, Swap protocol, trading platform, Dex exchange, Dex, DeFi, NFT, Stake, Staking, Fix deposit, GameFi, LotteryGame, Blockchain, Binance, BSC, Smart contract." name="MendSwap" />
        <!-- App favicon -->
        <link rel="shortcut icon" type="image" href="{{ asset('assets/images/favicon.png')}}"> 
        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @livewireStyles

    </head>

    <body data-topbar="light" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-start">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="#" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/LogoMain_icon.png')}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/LogoMain.png')}}" alt="" height="50">
                                    </span>
                                </a>
    
                                <a href="#" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/LogoMain_icon.png')}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/LogoMain.png')}}" alt="" height="19">
                                    </span>
                                </a>
                            </div>
    
                            <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </div>
    
                        <div class="float-end">
                             <div class="dropdown d-none d-lg-inline-block ms-2">
                                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="me-2" src="{{ asset('assets/images/flags/us_flag.jpg')}}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('assets/images/flags/germany_flag.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('assets/images/flags/italy_flag.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('assets/images/flags/french_flag.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('assets/images/flags/spain_flag.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{asset('assets/images/flags/russia_flag.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                                    </a>
                                </div>
                            </div>
    
                            {{-- <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg')}}"
                                        alt="Header Avatar">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                     <a class="dropdown-item" href="#"><i class="ti-dashboard font-size-17 text-muted align-middle me-1"></i> Dashboard</a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                                </div>
                            </div> --}}
                            <!-- Check if the route have a login first -->
                            @if(Route::has('login'))
                            <!-- Check if the user have login already here -->
                            @auth
                            <!-- Check which user login and show the menu items links here -->
                                @if(Auth::user()->utype==='ADM')
                               
                                    <div class="dropdown d-inline-block">
                                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar3.png')}}"
                                                alt="Header Avatar">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                             <a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i class="ti-dashboard font-size-17 text-muted align-middle me-1"></i> Dashboard (Supper Admin Portal)</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                                        </div>
                                    </div>
                                @elseif (Auth::user()->utype==='SVP')
                                <div class="dropdown d-inline-block">
                                    <div class="dropdown d-inline-block">
                                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg')}}"
                                                alt="Header Avatar">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                             <a class="dropdown-item" href="{{ route('sprovider.dashboard') }}"><i class="ti-dashboard font-size-17 text-muted align-middle me-1"></i> Dashboard (Admin Portal)</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                                @else 
                                <div class="dropdown d-inline-block">
                                    <div class="dropdown d-inline-block">
                                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg')}}"
                                                alt="Header Avatar">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                             <a class="dropdown-item" href="{{ route('customer.dashboard') }}"><i class="ti-dashboard font-size-17 text-muted align-middle me-1"></i> Dashboard (Customer Portal)</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- logout form goess here -->
                                <form id="logout-form" method="post" action="{{ route('logout') }}" style="display: none">
                                    @csrf
                              </form>

                                @else
                                <!-- user have not login show this menu here -->
                                <div class="dropdown d-inline-block">
                                    <a class="nav-link" href="{{ route('login') }}">
                                     Login
                                </a>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    Register
                                </a>
                              </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

                <div class="top-navigation">
                    <div class="page-title-content">
                        <div class="container-fluid">
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="page-title-box">
                                        <h4>MendSwap Management System</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Manage System</a></li>
                                            
                                        </ol>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    @auth
                    
                    <div class="container-fluid">
                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        @if(Auth::user()->utype==='ADM')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('admin.dashboard')}}">
                                                    <i class="ti-dashboard"></i>Dashboard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('all_user')}}">
                                                    <i class="ti-user"></i>All Users
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('all_message')}}">
                                                    <i class="ti-email"></i>All Mail List
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('contact')}}">
                                                    <i class="ti-hand-open"></i>All Request
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('referral')}}">
                                                    <i class="ti-link"></i>All Referral
                                                </a>
                                            </li>

                                        @elseif (Auth::user()->utype==='SVP')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('sprovider.dashboard') }}">
                                                    <i class="ti-dashboard"></i>Dashboard
                                                </a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('customer.dashboard') }}">
                                                    <i class="ti-dashboard"></i>Dashboard
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    @else
                    @endif
                </div>
            </header>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                {{ $slot }}
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                © <script>document.write(new Date().getFullYear())</script> MendSwap <span class="d-none d-sm-inline-block"> - Management System | by MendSwap Team.</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 
        
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!--Morris Chart-->
        <script src="{{ asset('assets/libs/morris.js/morris.min.js')}}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <script src="{{ asset('https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI')}}"></script>
        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- Gmaps file -->
        <script src="{{ asset('assets/libs/gmaps/gmaps.min.js')}}"></script>
        <script src="{{ asset('assets/js/pages/gmaps.init.js')}}"></script>
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>
        @livewireScripts
    </body>
</html>