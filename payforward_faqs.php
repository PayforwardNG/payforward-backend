<?php
session_start();
$userdetails = @$_SESSION['userdetails']; //Userdetails stored here
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - FAQs</title>
        <?php
        //External files for all styles linked here
        include('head.php');
        ?>
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">
            <!-- Left Side Panel -->
            <nav id="sidebar" class="pay-white-bg">
                <div class="sidebar-content pay-white-bg">
                    <!-- Top Left Section -->
                    <?php
                        include('top_left_panel.php');
                    ?>
                    <!-- END Top Left Section -->

                    <!-- Left Side Navigation -->
                    <div class="content-side pay-white-bg">
                        <ul class="nav-main">
                            <li>
                                <a href="payforward_dashboard.php" class="">
                                <i><img src="assets/media/home.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Home</span></a>
                            </li>
                            <li class="open">
                                <a class="" href="payforward_quick_save.php">
                                <i><img src="assets/media/money_bag.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Quick Save</span></a>
                            </li>
                            <li>
                                <a class="" href="payforward_plans.php">
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
                                <a class="" href="payforward_leasing.php">
                                <i><img src="assets/media/handshake.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Leasing</span></a>
                            </li>
                            <li>
                                <a class="" href="payforward_paypoints.php">
                                <i><img src="assets/media/coins2.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Paypoints</span></a>
                            </li>
                            <li>
                                <a class="pay-test" href="payforward_faqs.php">
                                <i><img src="assets/media/question.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">FAQs</span></a>
                            </li>
                            <li>
                                <a class="" href="assets/servers/sign_out.php">
                                <i><img src="assets/media/sign_out.png" alt=""></i>
                                <span class="sidebar-mini-hide pay-white-bg-a">Sign Out</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Left Side Navigation -->
                </div>
            </nav>
            <!-- END Left Side Panel -->

            <!-- Header -->
            <?php
                include('header.php');
            ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container" >
                <!-- Page Content -->
                <div class="row pay-top">
                    <!-- Left Panel -->
                    <div class="content col-md-4 ">
                        <div class="pay-top-minus block-content">
                            <!-- General  -->
                            <div class="block block-bordered block-rounded mb-2" id="general">
                                <a class="font-w600 pay-n-color" href="">
                                    <div class="block-header">
                                        General
                                        <!-- contents in general.php -->
                                    </div>
                                </a>
                            </div>
                            <!-- General ends -->

                            <!-- Savings & Returns -->
                            <div class="block block-bordered block-rounded mb-2" id="save" >
                                <a class="font-w600 pay-n-color "  href="">
                                    <div class="block-header" >
                                        Savings & Returns
                                        <!-- contents in returns.php -->
                                    </div>
                                </a>
                            </div>
                            <!-- Savings & Returns ends-->

                            <!-- Fee & Charges -->
                            <div class="block block-bordered block-rounded mb-2" id="fees">
                                <a class="font-w600 pay-n-color" href="">
                                    <div class="block-header">
                                        Fee & Charges
                                        <!-- contents in fees.php -->
                                    </div>
                                </a>
                            </div>
                            <!-- Fee & Charges ends-->

                            <!-- Safety & Security -->
                            <div class="block block-bordered block-rounded mb-2" id="safety">
                                <a class="font-w600 pay-n-color" href="">
                                    <div class="block-header">
                                        Safety & Security
                                        <!-- contents in safety.php -->
                                    </div>
                                </a>
                            </div>
                            <!-- Safety & Security ends-->

                            <!-- Withdrawals -->
                            <div class="block block-bordered block-rounded mb-2" id="withdrawals">
                                <a class="font-w600 pay-n-color" href="">
                                    <div class="block-header">
                                        Withdrawals
                                        <!-- contents in withdrawals.php -->
                                    </div>
                                </a>
                            </div>
                            <!-- Withdrawals ends-->

                            <!-- Leasing -->
                            <div class="block block-bordered block-rounded mb-2" id="leasing">
                                <a class="font-w600 pay-n-color" href="">
                                    <div class="block-header">
                                        Leasing
                                    </div>
                                </a>
                            </div>
                            <!-- Leasing ends-->
                        </div>
                    </div>
                    <!-- Left Panel ends -->

                    <!-- Right Text Content -->
                    <div class="col-md-8 ptm-content pay-bottom">
                        <div id="content">
                            <!-- contents to be displayed onclick of id above -->
                        </div>
                    </div>
                    <!-- Right Text Content ends -->
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