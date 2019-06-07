<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Paypoints</title>
        <?php
        include('head.php');
        ?>
    </head>
    <body>

        <!-- Page Container -->
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
                                <a  href="payforward_leasing.php">
                                <i><img src="assets/media/handshake.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">Leasing</span></a>
                            </li>
                            <li>
                                <a class="pay-test" href="payforward_paypoints.php">
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
            
            <header id="page-header" class="pay-p-top">
                <!-- Header Content -->
                <div class="row bg-color pay-p-top">
                    <div class="col-3"></div>
                    <div class="col-6 mt-10 text-center">
                        <h1 style="color:white">Refer & Earn More...</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ipsam fuga et, laborum hic at fugit quibusdam? Natus, non maiores earum quos, omnis deserunt neque deleniti nemo sint fugit nihil?</p>
                    </div>
                    <div class="col-3"></div>
                </div>
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <div class="content pay-bg-color paypoint-top">
                            <!-- 
                        <div class="row">
                            <div class="col bg-dark">Let's</div>
                            <div class="col bg-light">see</div>
                            <div class="col bg-dark">what</div>
                            <div class="col bg-light">happens</div>
                        </div> -->
                    <div class="content-heading">
                         k<small class="d-none d-sm-inline"></small>
                        <!-- Overview -->
                    </div>
                    <div class="row gutters-tiny">
                        <!-- Earnings -->
                        <div class="col-md-10 col-xl-2"></div>
                        <!-- END Earnings -->
                                
                        <!-- Orders -->
                        <div class="col-md-10 col-xl-8 pay-color ">
                                <!-- bg-gd-dusk -->
                            <div class="block block-rounded block-transparent rounded-circle bg-saving-dash shadow  bg-white rounded  " href="">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="content-heading">
                                        <div class="font-size-h3 font-w600 text-center   p-4">
                                        <span class="pay-bg-color p-5"> Referral Link: <a href="">https://<?php echo strtolower($userdetails["Referrals"])?></a></span> </div>             
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 pay-color">₦65,000.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- END Orders -->
    
                            <!-- New Customers -->
                        <div class="col-md-10 col-xl-2"></div>
                </div>


                <!-- Second card -->
                <div class="row gutters-tiny ">
                    <!-- Earnings -->
                    <div class="col-md-10 col-xl-3"></div>
                    <!-- END Earnings -->
                            
                    <!-- Orders -->
                    <div class="col-md-10 col-xl-6 paypoint-move-up " style="color:white">
                            <!-- bg-gd-dusk -->
                        <div class="block block-rounded block-transparent rounded-circle bg-saving-dash shadow  bg-white rounded" href="">
                            <div class="bg-color block-content block-content-full rounded-circle block-sticky-options">
                                <div class="content-heading">
                                    <div class="font-size-sm font-w600 text-uppercase"> &nbsp; Total PayPoints</div>             
                                </div>
                                <div class="py-20 text-center">
                                    <div class="font-size-h2 font-w700 mb-0 ">1000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- END Orders -->

                        <!-- New Customers -->
                    <div class="col-md-10 col-xl-3"></div>
                </div>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                            &copy; <span class="js-year-copy">20</span> 
                            <a class="font-w600" href="payforwardng.com" target="_blank">PayForwardNG</a>
                            <span>, All Rights Reserved</span>  
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <script src="assets/js/codebase.core.min.js"></script>
        <script src="assets/js/payforward.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>

    </body>
</html>
<?php

?>