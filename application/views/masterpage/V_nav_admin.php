<body>
    <!-- leftbar-tab-menu -->
    <div class="leftbar-tab-menu">
        <div class="main-icon-menu">
            <a href="<?php echo base_url('inicio'); ?>" class="logo logo-metrica d-block text-center">
                <span>
                    <img src="<?php echo base_url(); ?>/recursos/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
            </a>
            <nav class="nav">
                <a href="#MetricaHospital" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Clientes" data-trigger="hover">
                    <i data-feather="layers" class="align-self-center menu-icon icon-dual"></i>
                </a>
                <!--end MetricaHospital-->
                <a href="#soporte" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Soporte" data-trigger="hover">
                    <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                </a>

                <a href="#MetricaStaff" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Facturacion" data-trigger="hover">
                    <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                </a>
                <!--end MetricaStaff-->
                <a href="#accounts" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Ordenes y cuentas" data-trigger="hover">
                    <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                </a>

                <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Configuración global" data-trigger="hover">
                    <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                </a>
                <a href="#extras" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Extras" data-trigger="hover">
                    <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                </a>
            </nav>
            <!--end nav-->
            <div class="pro-metrica-end">
                <a href="#" class="help" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Chat">
                    <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
                </a>
                <a href="" class="profile">
                    <img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle thumb-sm">
                </a>
            </div>
        </div>
        <!--end main-icon-menu-->

        <div class="main-menu-inner">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo base_url('inicio'); ?>" class="logo">
                    <span>
                        <img src="<?php echo base_url(); ?>/recursos/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                        <img src="<?php echo base_url(); ?>/recursos/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-body slimscroll">
                <div id="MetricaHospital" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Clientes</h6>
                    </div>
                    <ul class="nav metismenu">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Clientes</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('administrar/clientes'); ?>">Administrar clientes</a></li>
                                <li><a href="<?php echo base_url('add/client'); ?>">Añadir cliente</a></li>
                                <li><a href="<?php echo base_url('notificar/client'); ?>">Notificar cliente</a></li>
                                <li><a href="<?php echo base_url('afiliado/client'); ?>">Afiliados</a></li>
                                <li><a href="<?php echo base_url('client/group'); ?>">Grupos de clientes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end Hospital -->
                <div id="soporte" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Soporte tecnico</h6>
                    </div>
                    <ul class="nav metismenu">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Tickets</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('add/ticket'); ?>">Levantar ticket</a></li>
                                <li><a href="<?php echo base_url('list/tickets'); ?>">Listado de tickets</a></li>

                            </ul>

                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('chat'); ?>">Chat</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('knowledgebase'); ?>">Base de conocimientos</a></li>



                    </ul>
                </div>
                <div id="MetricaStaff" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Facturacion</h6>
                    </div>
                    <ul class="nav metismenu">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Facturas</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('facturas'); ?>">Ver facturas</a></li>


                            </ul>
                        </li>

                    </ul>
                </div>
                <div id="accounts" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Ordenes y cuentas</h6>
                    </div>
                    <ul class="nav metismenu">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Ordenes</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('ordenes/activas'); ?>">Ordenes activas</a></li>
                                <li><a href="<?php echo base_url('ordenes/pendientes'); ?>">Ordenes pendientes</a></li>
                                <li><a href="<?php echo base_url('ordenes/fraudulentas'); ?>">Ordenes Fraudulentas</a></li>
                                <li><a href="<?php echo base_url('ordenes/add'); ?>">Crear orden</a></li>

                            </ul>
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Cuentas</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('cuentas/activas'); ?>">Cuentas activas</a></li>
                                <li><a href="<?php echo base_url('cuentas/suspendidas'); ?>">Cuentas suspendidas</a></li>
                                <li><a href="<?php echo base_url('cuentas/pendientes'); ?>">Cuentas pendientes</a></li>


                            </ul>
                        </li>
                       
                        <!--end nav-item-->

                    </ul>
                </div>
                <div id="MetricaApps" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Configuración</h6>
                    </div>
                    <ul class="nav metismenu">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">Configuraciones general</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?php echo base_url('settings/general'); ?>">Configuracion general</a></li>
                                <li><a href="<?php echo base_url('settings/dns'); ?>">Dominios y DNs</a></li>
                                <li><a href="<?php echo base_url('settings/seguridad'); ?>">Configuraciones de seguridad</a></li>
                                <li><a href="<?php echo base_url('settings/lenguaje'); ?>">Configurar lenguaje</a></li>

                            </ul>
                            
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('settings/connections'); ?>">App connections</a></li>
                        <!--end nav-item-->

                    </ul>
                </div>
                <div id="extras" class="main-icon-menu-pane">
                    <div class="title-box">
                        <h6 class="menu-title">Extras</h6>
                    </div>
                    <ul class="nav metismenu">
                        
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('add_ons'); ?>">Product addons</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('store'); ?>">Tienda</a></li>
                        
                        <!--end nav-item-->

                    </ul>
                </div>
                <!-- end Crypto -->


                <!-- end Pages -->

                <!-- end Authentication-->
            </div>
            <!--end menu-body-->
        </div>
        <!-- end main-menu-inner-->
    </div>
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="hidden-sm">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        English <img src="<?php echo base_url(); ?>/recursos/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="" /> <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="<?php echo base_url(); ?>/recursos/assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="<?php echo base_url(); ?>/recursos/assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="<?php echo base_url(); ?>/recursos/assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="<?php echo base_url(); ?>/recursos/assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14" /></a>
                        <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="<?php echo base_url(); ?>/recursos/assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14" /></a>
                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti-bell noti-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg py-0">

                        <h6 class="dropdown-item-text font-15 m-0 py-3 bg-light text-dark d-flex justify-content-between align-items-center">
                            Notifications <span class="badge badge-primary badge-pill">2</span>
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="la la-cart-arrow-down"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">10 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-success">
                                        <i class="la la-group"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">40 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-pink">
                                        <i class="la la-list-alt"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">1 hr ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-warning">
                                        <i class="la la-truck"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-right text-muted pl-2">2 hrs ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-info">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                    <div class="media-body align-self-center ml-2 text-truncate">
                                        <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary bg-light">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>/recursos/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Robert <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item bg-light" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
                <li class="mr-2">
                    <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
                        <i data-feather="align-right" class="align-self-center"></i>
                    </a>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <a href="#">
                        <span class="responsive-logo">
                            <img src="<?php echo base_url(); ?>/recursos/assets/images/logo-sm.png" alt="logo-small" class="logo-sm align-self-center" height="34">
                        </span>
                    </a>
                </li>
                <li>
                    <button class="button-menu-mobile nav-link">
                        <i data-feather="menu" class="align-self-center"></i>
                    </button>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">System <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <div class="text-center system-text">
                                    <h4 class="text-white">The Poworfull Dashboard</h4>
                                    <p class="text-white">See all the pages Metrica.</p>
                                    <a href="https://mannatthemes.com/metrica/" class="btn btn-sm btn-pink mt-2">See Dashboard</a>
                                </div>
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo base_url(); ?>/recursos/assets/images/dashboard/dash-1.png" class="d-block img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>/recursos/assets/images/dashboard/dash-4.png" class="d-block img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>/recursos/assets/images/dashboard/dash-2.png" class="d-block img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>/recursos/assets/images/dashboard/dash-3.png" class="d-block img-fluid" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12 col-lg-6">
                                <div class="divider-custom mb-0">
                                    <div class="divider-text bg-light">All Dashboard</div>
                                    </divi>
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="../analytics/analytics-index.html"> Analytics</a>
                                                <a class="dropdown-item mb-2" href="../crypto/crypto-index.html"> Crypto</a>
                                                <a class="dropdown-item mb-2" href="../crm/crm-index.html"> CRM</a>
                                                <a class="dropdown-item" href="../projects/projects-index.html"> Project</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="../ecommerce/ecommerce-index.html"> Ecommerce</a>
                                                <a class="dropdown-item mb-2" href="../helpdesk/helpdesk-index.html"> Helpdesk</a>
                                                <a class="dropdown-item" href="../hospital/hospital-index.html"> Hospital</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
                        <a href=""><i class="fas fa-search"></i></a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->