<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Agent Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/ion.rangeSlider.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/bootstrap.min.css')); ?>"
        id="bootstrap-style" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/app.min.css')); ?>" id="app-style" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/daterangepicker.css')); ?>">-->

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/icons.min.css')); ?>" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/animate.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/chosen.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/select2.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/jquery.fancybox.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assetsAgent/css/responsive.css')); ?>">

</head>

<body data-sidebar="dark" id="main">

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div class="slide-logo">
                    <!-- <img src=""> -->
                    <h5>Enrol Here</h5>
                    
                 
                </div>
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <?php $permissions = check_permission()
                        ?>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <li><a href="/<?php echo e($permission->slug); ?>"><?php echo $permission->icon;?><span><?php echo e($permission->page_title); ?></span></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <!--<li><a href="/agentDashboard"><i"
                                    class="me-2 fa-solid fa-house-chimney-window"></i><span>Dashboard</span></a></li>
                        <li><a href="/agentProgram"><i class="me-2 fa-solid fa-magnifying-glass"></i><span>Programs &
                                    Schools</span></a></li>
                        <li><a href="/agentApplication"><i
                                    class="me-2 fa-solid fa-scroll"></i><span>Applications</span></a></li>
                        <li><a href="/students"><i class="me-2 fa-solid fa-user-graduate"></i><span>Students</span></a>
                        </li>
                        <li><a href="/payments"><i class="fa-solid fa-credit-card me-2 "></i><span>Payments</span></a>
                        </li>
                        <li><a href="/commission_structure"><i class="me-2 fa-solid fa-percent"></i><span>Commission
                                    Structure</span></a></li>
                        <li><a href="/manage_staff"><i class="me-2 fa-solid fa-user-check"></i><span>Manage
                                    Staff</span></a></li>
                        <li><a href="/sub_agent"><i class="me-2 fa-solid fa-user"></i><span>Sub Agents</span></a></li>
                        <li><a href="/growth_hub"><i class="me-2 fa-solid fa-users"></i><span>Growth Hub</span></a></li>
                        <li><a href="/agent_student_profile"><i class="me-2 fa-solid fa-users"></i><span>Student
                                    Profile</span></a></li>
                        <li><a href="/wallet"><i class="me-2 fa-solid fa-wallet"></i><span>Wallet</span></a></li>
                        <li><a href="/training_request"><i class="me-2 fa-solid fa-flag"></i><span>Training
                                    Request</span></a></li>
                        <li><a href="/students_applications"><i class="me-2 fa-solid fa-file-lines"></i><span>Students
                                    Applications</span></a></li>
                        <li><a href="/invoices"><i class="me-2 fa-solid fa-receipt"></i><span>Invoices</span></a></li>
                        <li><a href="/team"><i class="me-2 fa-solid fa-people-group"></i><span>Team</span></a></li>
                        <li><a href="/agent_my_reminders"><i class="me-2 fa-solid fa-clock"></i><span>My
                                    Reminders</span></a></li>
                        <li><a href="/template"><i class="me-2 fa-solid fa-file-lines"></i><span>Template</span></a>
                        </li>
                        <li><a href="/knowledge_base"><i class="me-2 fa-solid fa-box"></i><span>Knowledge
                                    Base</span></a></li>-->

                    </ul>
                </div>
            </div>
        </div>


        <div class="main-content">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <!-- <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="" alt="" height="17">
                                </span>
                            </a>
        
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="" alt="" height="19">
                                </span>
                            </a>
                        </div> -->

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Application</a> <i class="fa-solid fa-chevron-right"></i></li> -->
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                    </div>

                    <div class="d-flex">

                        <form class="app-search d-none d-lg-block" action="" method="POST">
                            <div class="position-relative">
                                <input type="text" class="form-control search-input " placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                                <div class="search-result">
                                    <div class="search-result__content">
                                        <div class="search-result__content__title">Pages</div>

                                        <div class="mb-3">
                                            <a href="" class="d-flex align-items-center">
                                                <div
                                                    class="bg-success text-white p-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="ms-2">Mail Settings</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center">
                                                <div
                                                    class="bg-warning text-white p-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-user-group"></i>
                                                </div>
                                                <div class="ms-2">Users & Permissions</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center">
                                                <div
                                                    class="bg-info text-white p-2 rounded-circle d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-credit-card"></i>
                                                </div>
                                                <div class="ms-2">Transactions Report</div>
                                            </a>
                                        </div>

                                        <div class="search-result__content__title">Users</div>
                                        <div class="mb-3">
                                            <a href="" class="d-flex align-items-center mt-2">
                                                <div class="w-8 h-8 image-fit">
                                                    <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="ms-2">Al Pacino</div>
                                                <div class="ms-auto text-end">alpacino@left4code.com</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center mt-2">
                                                <div class="w-8 h-8 image-fit">
                                                    <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="ms-2">Al Pacino</div>
                                                <div class="ms-auto text-end">alpacino@left4code.com</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center mt-2">
                                                <div class="w-8 h-8 image-fit">
                                                    <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="ms-2">Al Pacino</div>
                                                <div class="ms-auto text-end">alpacino@left4code.com</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center mt-2">
                                                <div class="w-8 h-8 image-fit">
                                                    <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="ms-2">Al Pacino</div>
                                                <div class="ms-auto text-end">alpacino@left4code.com</div>
                                            </a>
                                            <a href="" class="d-flex align-items-center mt-2">
                                                <div class="w-8 h-8 image-fit">
                                                    <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="ms-2">Al Pacino</div>
                                                <div class="ms-auto text-end">alpacino@left4code.com</div>
                                            </a>
                                        </div>
                                        <div class="search-result__content__title">Products</div>
                                        <a href="" class="d-flex align-items-center mt-2">
                                            <div class="w-8 h-8 image-fit">
                                                <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-2">Al Pacino</div>
                                            <div class="ms-auto text-end">alpacino@left4code.com</div>
                                        </a>
                                        <a href="" class="d-flex align-items-center mt-2">
                                            <div class="w-8 h-8 image-fit">
                                                <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-2">Al Pacino</div>
                                            <div class="ms-auto text-end">alpacino@left4code.com</div>
                                        </a>
                                        <a href="" class="d-flex align-items-center mt-2">
                                            <div class="w-8 h-8 image-fit">
                                                <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-2">Al Pacino</div>
                                            <div class="ms-auto text-end">alpacino@left4code.com</div>
                                        </a>
                                        <a href="" class="d-flex align-items-center mt-2">
                                            <div class="w-8 h-8 image-fit">
                                                <img src="/assetsAgent/img/profile-9.jpg" alt=""
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-2">Al Pacino</div>
                                            <div class="ms-auto text-end">alpacino@left4code.com</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect d-none-custom"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div> -->

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce
                                                        the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                            key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="/assetsAgent/img/profile-icon.png"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified
                                                        English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                            key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce
                                                        the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                            key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="/assetsAgent/img/profile-icon.png"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge
                                                        friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                            key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View
                                            More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown profile-login d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/assetsAgent/img/profile-icon.png"
                                    alt="Header Avatar">
                                <!-- <span class="d-none d-xl-inline-block ms-1" key="t-henry">Sukhwinder Singh</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> -->
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item user-name" href="javascript::">
                                    <span class=" font-size-14"><b> Sukhwinder Singh</b></span>
                                    <span class=" font-size-12 opacity-50">DevOps Engineer</span>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user font-size-16 align-middle me-1"></i>
                                    <span key="t-profile">Profile</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                                    <span key="t-my-wallet">My Wallet</span>
                                </a>
                                <a class="dropdown-item d-block" href="#">
                                    <span class="badge bg-success float-end">11</span>
                                    <i class="bx bx-wrench font-size-16 align-middle me-1"></i>
                                    <span key="t-settings">Settings</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                    <span key="t-lock-screen">Lock screen</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(url('logout')); ?>"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bx bx-power-off font-size-16 align-middle me-1"></i>
                                    <span key="t-logout">Logout</span>
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© Enrollhere 2022 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <!-- END layout-wrapper -->

        <div class="shadow-md">
            <div class="color_change">Color Scheme</div>
            <ul class="plaette-colors">
                <li class="color-layout" id="blue" data-color="#2a3c4a"></li>
                <li class="color-layout" id="yellow" data-color="#064e3b"></li>
                <li class="color-layout" id="dark-green" data-color="#164e63"></li>
                <li class="color-layout" id="green" data-color="#312e81"></li>
            </ul>
        </div>

        <div class="shadow-md1">
            <div class="heading-dark">Dark Mode</div>
            <label class="switch">
                <input type="checkbox" class="checkbox" id="checkbox">
                <span class="slider"></span>
            </label>
        </div>
        <script>
            var base_path = '<?php echo e(url('/')); ?>';
        </script>
        

        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('assetsAgent/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/chosen.jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/moment.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assetsAgent/js/daterangepicker.min.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('assetsAgent/js/litepicker.js')); ?>"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>-->

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>-->

        <script src="<?php echo e(asset('assetsAgent/js/ckeditor.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/metisMenu.min.js')); ?>"></script> 
        <script src="<?php echo e(asset('assetsAgent/js/simplebar.min.js')); ?>"></script>

        <script src="<?php echo e(asset('assetsAgent/js/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/jquery.fancybox.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assetsAgent/js/apexcharts.min.js')); ?>"></script>-->
        <script src="<?php echo e(asset('assetsAgent/js/canvasjs.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assetsAgent/js/chart.js')); ?>"></script>-->

        <script src="<?php echo e(asset('assetsAgent/js/select2.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assetsAgent/js/ecommerce-select2.init.js')); ?>"></script>-->
        <!--<script src="<?php echo e(asset('assetsAgent/js/dashboard.init.js')); ?>"></script>-->
        <script src="<?php echo e(asset('assetsAgent/js/ion.rangeSlider.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('assetsAgent/js/range-sliders.init.js')); ?>"></script>-->

        <!-- Main js -->
        <script src="<?php echo e(asset('assetsAgent/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assetsAgent/js/agent_custom.js')); ?>"></script>
        

        <script>
            // click body js 
            const checkbox = document.getElementById('checkbox');

            checkbox.addEventListener('change', () => {
                document.body.classList.toggle('dark');
            });

            $(".gallery-list a").fancybox();
        </script>

        <script>
            var _seed = 42;
            Math.random = function() {
                _seed = _seed * 16807 % 2147483647;
                return (_seed - 1) / 2147483646;
            };
        </script>


</body>

</html>
<?php /**PATH /home/enrolhere/public_html/college/resources/views/layouts/agent_app.blade.php ENDPATH**/ ?>