<?php
session_start();
// User login details imported here
$userdetails = @$_SESSION['userdetails'];
?>

<!doctype html>
<html lang="en" class="no-focus">
    <head>      
        <title>PayForwardNG: Dashboard - Home</title>

    <!-- External files for all styles are linked from here -->
        <?php
        include('head.php');
        ?>
    </head>
    <body>

        <!-- Page Container -->
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">

            <!-- Right Hidden Side Panel -->
            <?php
            include('right_panel.php');
            ?>
            <!-- END Right Hidden Side Panel -->

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
                                <a href="payforward_dashboard.php" class="pay-test">
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
                                <a class="" href="payforward_faqs.php">
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

            <!-- Main Body -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content pay-bg-color">
                    <!-- Saving Overview -->
                    <div class="overview">
                        <!-- Title Section -->
                        <div class="content-heading pay-reg">
                            <div class="dropdown float-right">
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="layout" data-action="side_overlay_toggle">
                                    Finance Tools
                                </button>
                            </div>
                            Saving Overview
                        </div>
                        <!-- END Title Section -->

                        <!-- Content Section -->
                        <div class="row gutters-tiny">
                            <!-- Total Savings -->
                            <div class="col-md-10 col-xl-4">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class=" pay-white-bg-color block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Total Savings</div>                                        
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color payfont3">₦500,000.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Total Savings -->
                            
                            <!-- Total Earnings -->
                            <div class="col-md-10 col-xl-4">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="be_pages_ecom_orders.php">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Total Earnings</div>                                        
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color payfont3">₦30,000.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Total Earnings -->

                            <!-- Current Earning Rate -->
                            <div class="col-md-10 col-xl-4 ">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="javascript:void(0)">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Current Earning Rate</div>                                        
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color payfont3" data-toggle="countTo" data-to="6" data-after="%">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Current Earning Rate -->
                        </div>
                        <!-- END Content Section -->
                    </div>
                    <!-- END Saving Overview -->

                    <!-- Lease Overview -->
                    <div class="overview">
                        <!-- Title Section -->
                        <div class="content-heading">
                            Lease Overview
                        </div>
                        <!-- END Title Section -->

                        <!-- Content Section -->
                        <div class="row gutters-tiny">
                            <!-- Total Value of Lease -->
                            <div class="col-md-10 col-xl-4">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="javascript:void(0)">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Taotal Value of Lease</div>
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color" >₦44,500.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Total Value of Lease -->
                            
                            <!-- Current Lease -->
                            <div class="col-md-10 col-xl-4">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="be_pages_ecom_orders.php">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Current Lease</div>             
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color">₦65,000.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Current Lease -->

                            <!-- Leased Items -->
                            <div class="col-md-10 col-xl-4">
                                <div class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="javascript:void(0)">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <div class="content-heading">
                                            <div class="font-size-sm font-w600 text-uppercase  ">Leased Items</div>                
                                        </div>
                                        <div class="py-20 text-center">
                                            <div class="font-size-h2 font-w700 mb-0 pay-color" data-toggle="countTo" data-to="13">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Leased Items -->
                        </div>
                        <!-- END Content Section -->
                    </div>
                    <!-- END Lease Overview -->


                    <!-- Current Status -->
                    <div class="overview">
                        <!-- Title Section -->
                        <div class="content-heading">
                            Current Status
                        </div>
                        <!-- END Title Section -->
                        
                        <!-- Content Section -->
                        <div class="row gutters-tiny">

                            <!-- Active Plan -->
                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded">
                                    <div class="block-header">
                                        <div class="content-heading">
                                            <h3 class="block-title">
                                            Active Plan
                                            </h3>
                                        </div>
                                        <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                            <div class="block-content block-content-full block-sticky-options">
                                                <div class="block-options">
                                                    <div class="block-options-item">
                                                        <i class="fa fa-area-chart text-white-op"></i>
                                                    </div>
                                                </div>
                                                <div class="py-20 text-center">
                                                    <div class="font-size-h2 font-w700 mb-0 pay-color">₦1,340,000.00</div>
                                                    <div class="font-size-sm font-w600 text-uppercase  pay-color">Wedding</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Active Plan -->

                            <!-- Current Rating -->
                            <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded">
                                    <div class="block-header">
                                        <div class="content-heading">
                                            <h3 class="block-title">
                                                Credit Rating
                                            </h3>
                                        </div>
                                        <div class="block block-rounded block-transparent " href="javascript:void(0)">
                                            <div class="block-content block-content-full block-sticky-options">
                                                <div class="block-options">
                                                    <div class="block-options-item">
                                                        <i class="fa fa-area-chart text-white-op"></i>
                                                    </div>
                                                </div>
                                                <div class="py-20 text-center">
                                                    <div class="font-size-h2 font-w700 mb-0 pay-color" data-toggle="countTo" data-to="55" data-after="%">0</div>
                                                    <div class="font-size-sm font-w600 text-uppercase  pay-color">Lean More</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                            <!-- END Current Rating -->
                        </div>
                        <!-- END Content Section -->
                    </div>
                    <!-- END Current Status -->

                    <!-- Saving Log and Lease History -->
                    <div class="row gutters-tiny">
                        <!-- Saving Log -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Saving Log</h2>
                            <div class="block block-rounded shadow  bg-white rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;" class="text-center">Plan</th>
                                                <th class="text-center">Status</th>
                                                <th class="d-none d-sm-table-cell text-center">Amount [ ₦ ]</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <a class="font-w600" href="be_pages_ecom_order.php">Wedding</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-danger">Pending</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">50,000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a class="font-w600" href="be_pages_ecom_order.php">Brithday</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">100,000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a class="font-w600" href="be_pages_ecom_order.php">Burial</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">70,000</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Saving Log -->

                        <!-- Leasing History -->
                        <div class="col-xl-6">
                            <h2 class="content-heading">Leasing History</h2>
                            <div class="block block-rounded shadow  bg-white rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell text-center" style="width: 100px;">Item</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Amount [ ₦ ]</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">Refrigerator</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-danger">Pending</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">35,000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">Phone</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-danger">Pending</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">60,000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center">
                                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">Laptop</a>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge badge-success">Completed</span>
                                                </td>
                                                <td class="text-center">
                                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">150,000</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Leasing History -->

                        <!-- More -->
                        <div class="font-size-sm font-w600 text-uppercase  pay-color pt-5 mt-n5 mb-5">More</div>
                        <!-- END More -->
                    </div>
                    <!-- END Saving Log and Lease History -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Body -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                        &copy; <span class="js-year-copy">2018</span> 
                        <a class="font-w600" href="payforwardng.com" target="_blank">PayForwardNG</a>
                        <span>, All Rights Reserved</span>  
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scripts -->
        <script src="assets/js/codebase.core.min.js"></script>
        <script src="assets/js/payforward.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>
        <!-- END Scripts -->

        <script>
        // The following internal script is yet to be edited
        var $range = $('.range');

        $range.each(function() {

        var $thumb = $(this).next('.range-thumb');
        var max = parseInt(this.max, 10);
        var tw = 100; // Thumb width. See CSS

        $(this).on('input input.range', function() {

        var w = $(this).width();
        var val = parseInt(this.value, 10);
        var txt = val >= max ? '100' : val;
        var xPX = val * (w - tw) / max; // Position in PX
        // var xPC = xPX * 100 / w;     // Position in % (if ever needed)

        $thumb.css({left: xPX}).attr("data-val", txt);

        });

        });

        $range.trigger('input.range'); // Calc on load
        $(window).on("resize", () => $range.trigger("input.range")); // and on resize
        </script>

    </body>
</html>
