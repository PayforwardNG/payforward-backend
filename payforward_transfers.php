<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Transfers</title>

        <?php
        include('head.php');
        ?>
    </head>
    <body>

        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">

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
                                <a  href="payforward_quick_save.php">
                                <i><img src="assets/media/money_bag.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Quick Save</span></a>
                            </li>
                            <li>
                                <a  href="payforward_plans.php">
                                    <i><img src="assets/media/my-plans2.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">My Plans</span></a>
                            </li>
                            <li>
                                <a class="" href="payforward_withdrawals.php">
                                    <i><img src="assets/media/withdraw.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">Withdrawals</span></a>
                            </li>
                            <li>
                                <a class="pay-test" href="payforward_transfers.php">
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
                            <span class="breadcrumb-item active">Dashboard</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->

                <!-- Inter-plan -->
                <div class="content pay-bg-color">
                    <div id="inter-plan">
                        <div class="content-heading">
                            <div class="dropdown float-right">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Inter-plan
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                    <a class="dropdown-item active inter-plan" onclick="displayE()" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Inter-plan
                                    </a>
                                    <!-- onclick="test()" -->
                                    <a class="dropdown-item intra-plan" onclick="displayR()" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Intra-plan
                                    </a>
                                </div>
                            </div>
                            Transfers <small class="d-none d-sm-inline"></small>
                        </div>
                        <div class="row gutters-tiny">
                            <!-- Orders Earnings Chart -->
                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                    <div class="block-header">
                                        <h3 class="block-title">
                                            New
                                        </h3>
                                    </div>
                                    <div class="pay-border dropdown-divider"></div>
                                    <div class="block-header">
                                        <div class="content-heading">
                                        <h3 class="block-title">
                                        Amount
                                        </h3>
                                        <input type="number" class="pay-border">
                                    </div>
                                    <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                        <div class="block-content block-content-full block-sticky-options">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="sel1">Select the plan to be debited:</label>
                                                    <select class="form-control pay-border" id="sel1">
                                                        <option>Wedding</option>
                                                        <option>Birthday</option>
                                                        <option>Burial</option>
                                                        <!-- <option>4</option> -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sel1">Select plan to be credited:</label>
                                                    <select class="form-control pay-border" id="sel1">
                                                            <option>Wedding</option>
                                                            <option>Birthday</option>
                                                            <option>Burial</option>
                                                        <!-- <option>4</option> -->
                                                    </select>
                                                </div>
                                                    <button type="submit" class="btn btn-default pay-border">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text div -->
                            <div class="col-md-6">
                                    <h3 class="pay-font pay-color p-3">
                                        Transfer funds from a plan to another plan
                                    </h3>
                                </div>
                        </div>

                    </div>

                    <!-- Intra-plan -->
                    <div id="intra-plan">
                        <div class="content-heading">
                            <div class="dropdown float-right">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Intra-plan
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                                    <a class="dropdown-item inter-plan " onclick="displayE()" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Inter-plan
                                    </a>
                                    <a class="dropdown-item active intra-plan" onclick="displayR()" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>Intra-plan
                                    </a>
                                </div>
                            </div>
                            Transfers <small class="d-none d-sm-inline"></small>
                        </div>
                        
                        <div class="row gutters-tiny">

                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                    <div class="block-header">
                                        <h3 class="block-title">
                                            New
                                        </h3>
                                    </div>
                                    <div class="pay-border dropdown-divider"></div>
                                    <div class="block-header">
                                        <div class="content-heading">
                                        <h3 class="block-title">
                                        Amount
                                        </h3>
                                        <input type="number" class="pay-border">
                                    </div>
                                    <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                        <div class="block-content block-content-full block-sticky-options">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="sel1">Select the plan to be debited:</label>
                                                    <select class="form-control pay-border" id="sel1">
                                                        <option>Wedding</option>
                                                        <option>Birthday</option>
                                                        <option>Burial</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sel1">Enter ID of Member:</label>
                                                    <input type="number" class="pay-border">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sel1">Enter plan of Member:</label>
                                                    <input type="number" class="pay-border">
                                                </div>
                                                    <button type="submit" class="btn btn-default pay-border">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="pay-font pay-color p-3">
                                    Transfer funds from your account to another Member
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

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
    </body>
</html>