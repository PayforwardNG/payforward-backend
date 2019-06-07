<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Plans</title>
        <?php
        include('head.php');
        ?>
    </head>
    <body>

        <!-- Page Container -->

        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Top Left Overlay -->
            <?php
                include('top_left_panel.php');
            ?>
                    <!-- Top Left Overlay ENDS -->


                    <!-- Side Navigation -->
                    <div class="content-side pay-white-bg">
                        <ul class="nav-main">
                            <li>
                                <a href="payforward_dashboard.php" >
                                <i><img src="assets/media/home.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Home</span></a>
                            </li>
                            <li class="open">
                                <a class="" href="payforward_quick_save.php">
                                <i><img src="assets/media/money_bag.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Quick Save</span></a>
                            </li>
                            <li>
                                <a class="pay-test" href="payforward_plans.php">
                                    <i><img src="assets/media/my-plans2.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">My Plans</span></a>
                            </li>
                            <li>
                                <a class="" href="payforward_withdrawals.php">
                                    <i><img src="assets/media/withdraw.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">Withdrawals</span></a>
                            </li>
                            <li>
                                <a class="" href="payforward_transfers.php">
                                <i><img src="assets/media/transfer.png" alt=""></i>
                                
                                <span class="sidebar-mini-hide pay-white-bg-a">Transfers</span></a>
                            </li>
                            <li>
                                <a  href="payforward_leasing.php">
                                <i><img src="assets/media/handshake.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">Leasing</span></a>
                            </li>
                            <li>
                                <a  href="payforward_paypoints.php">
                                <i><img src="assets/media/coins2.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Paypoints</span></a>
                            </li>
                            <li>
                                <a  href="payforward_faqs.php">
                                <i><img src="assets/media/question.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">FAQs</span></a>
                            </li>
                            <li>
                                <a class="" href="assets/servers/sign_out.php">
                                <i><img src="assets/media/sign_out.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Sign Out</span></a>
                            </li>
                        </ul>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php
                include('header.php');
            ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Breadcrumb -->
                <div class="bg-body-light border-b pay-blue">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
                            <span class="breadcrumb-item active text-danger">Dashboard</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Periodic plan -->
                <div class="content pay-bg-color" id="periodic">      
                        <div class="content-heading">
                            <div class="dropdown float-right">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Periodic
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                    <a class="dropdown-item active periodic-plan" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Periodic
                                    </a>
                                    <a class="dropdown-item fixed-plan" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Fixed Investments
                                    </a>
                                    <a class="dropdown-item life-goals" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Life Goals
                                    </a>
                                </div>
                            </div>
                            Plans <small class="d-none d-sm-inline"></small>
                        </div> 
                        <div class="row gutters-tiny">
                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                    <div class="block-header">
                                            <h3 class="block-title">
                                                Tertiary Education
                                            </h3>

                                        </div>
                                        <div class="pay-border dropdown-divider"></div>
                                        <div class="block-header">
                                            <div class="content-heading">
                                                <h3 class="block-title">
                                                    Earning Rate
                                                </h3>
                                                <div class="py-20 text-center">
                                                    <div class="font-size-h2 font-w700 mb-0 pay-color" data-toggle="countTo" data-to="5.5" data-after="%">0</div>
                                                </div>
                                            </div>
                                            <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                                <div class="block-content block-content-full block-sticky-options">
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            <i class="fa fa-area-chart text-white-op"></i>
                                                        </div>
                                                    </div>
                                                    <div class="font-size-sm font-w600">Balance</div>
                                                    <div class="py-20 text-center">
                                                        <div class="font-size-h2 font-w700 mb-0 pay-color" >₦87,400.00</div>
                                                    </div>
                                                </div>
</div>
                                            
                                        </div>
                                        <div class="dropdown-divider pay-border"></div>
                                        <div class="block-header">
                                            <h3 class="block-title">
                                                Next Saving Date:
                                            </h3>
                                            <span class="p-3"> May 08, 2019</span>
                                            <span class="p-3"> ₦1,500.00 Weekly</span>
                                            <span class="p-3 badge badge-success"> Active</span>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="pull-all"></div>
                                        </div>        
                                </div>
                            </div>
                        </div>
                        <!-- END Orders Overview -->
                    </div>
                <!-- Periodic plan ENDS-->

                <!-- Fixed-investment -->
                <div class="content pay-bg-color" id="fixed-investment">      
                        <div class="content-heading">
                            <div class="dropdown float-right">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="test()">
                                    Fixed Investments
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                    <a class="dropdown-item periodic-plan" href="javascript:void(0)" >
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Periodic
                                    </a>
                                    <a class="dropdown-item active fixed-plan" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Fixed Investments
                                    </a>
                                    <a class="dropdown-item life-goals" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Life Goals
                                    </a>
                                </div>
                            </div>
                            Plans <small class="d-none d-sm-inline"></small>
                        </div> 
                        <div class="row gutters-tiny">
                            <!-- Orders Earnings Chart -->
                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                    <div class="block-header">
                                        <h3 class="block-title">
                                            <i>No Fixed Invesment Plan yet</i>
                                        </h3>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- END Orders Overview -->
                    </div>
                <!-- Fixed-investment ENDS-->

                    <!-- Life-goals -->                   
                <div class="content pay-bg-color" id="life-goals">      
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Life Goals
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                <a class="dropdown-item periodic-plan" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Periodic
                                </a>
                                <a class="dropdown-item fixed-plan" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Fixed Investments
                                </a>
                                <a class="dropdown-item active life-goals" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-calendar mr-5"></i>Life Goals
                                </a>
                            </div>
                        </div>
                        Plans <small class="d-none d-sm-inline"></small>
                    </div> 
                    <div class="row gutters-tiny">
                        <!-- Orders Earnings Chart -->
                        <div class="col-md-6">
                            <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                <div class="block-header">
                                        <h3 class="block-title">
                                            Retirement
                                        </h3>
                                    </div>
                                    <div class="pay-border dropdown-divider"></div>
                                    <div class="block-header">
                                        <div class="content-heading">
                                            <h3 class="block-title">
                                                Earning Rate
                                            </h3>
                                            <div class="py-20 text-center">
                                                <div class="font-size-h2 font-w700 mb-0 pay-color" data-toggle="countTo" data-to="3" data-after="%">0</div>
                                            </div>
                                        </div>
                                        <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                            <div class="block-content block-content-full block-sticky-options">
                                                <div class="block-options">
                                                    <div class="block-options-item">
                                                        <i class="fa fa-area-chart text-white-op"></i>
                                                    </div>
                                                </div>
                                                <div class="font-size-sm font-w600">Balance</div>
                                                <div class="py-20 text-center">
                                                    <div class="font-size-h2 font-w700 mb-0 pay-color" >₦1,300,400.00</div>
                                                </div>
                                            </div>
</div>
                                        
                                    </div>
                                    <div class="dropdown-divider pay-border"></div>
                                    <div class="block-header">
                                        <h3 class="block-title">
                                            Next Saving Date:
                                        </h3>
                                        <span class="p-3"> May 08, 2019</span>
                                        <span class="p-3"> ₦20,000.00 Monthly</span>
                                        <span class="p-3 badge badge-warning">Pending</span>
                                    </div>
                                    <div class="block-content block-content-full">
                                        <div class="pull-all"></div>
                                    </div>        
                            </div>
                        </div>
                    </div>
                    <!-- END Orders Overview -->
                </div>
                    <!-- Life-goals ENDS-->                   
    
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                            &copy; <span class="js-year-copy">2018</span> <a class="font-w600" href="payforwardng.com" target="_blank">PayForwardNG</a>
                            <span>, All Rights Reserved</span>  
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <script src="assets/js/codebase.core.min.js"></script>

        <script src="assets/js/codebase.app.min.js"></script>

        <script src="assets/js/payforward.js"></script>
        <script>
            // function test () {
            //     alert("We are ready!");
            // }

        </script>
    </body>
</html>
<?php

?>