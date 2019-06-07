<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Leasing</title>
        <?php
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

            <!-- Main Body -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content pay-bg-color pay-reg">
                    <!-- Personal Gadgets -->
                    <div class="categories">
                        <!-- Title Section -->
                        <div class="content-heading">
                            Personal Gadgets
                        </div>
                        <!-- Title Section ends-->

                        <!-- Content Section -->
                        <div class="row gutters-tiny">
                            <!-- Slot -->
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="" data-toggle="modal" data-target="#slot">
                                    <div class=" pay-white-bg-color block-content block-content-full block-sticky-options">
                                        <img src="assets/media/Slot_Logo_Latest.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>                                
                            </div>
                            <!-- Slot ends -->
                            
                            <!-- Asus -->
                            <div class="col-md col-xl-3">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded logo1" href="" data-toggle="modal" data-target="#asus">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                        <img src="assets/media/Asus-Logo-PNG-Photo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
                            <!-- Asus ends -->

                            <!-- Intel -->
                            <div class="col-md col-xl-3">
                                    <!-- bg-gd-dusk -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="" data-toggle="modal" data-target="#intel">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <img src="assets/media/intel_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
                            <!-- Intel Ends -->

                            <!-- Tecno -->
                            <div class="col-md col-xl-3 ">
                                    <!-- bg-gd-sea -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded" href="" data-toggle="modal" data-target="#tecno">
                                    <div class="block-content block-content-full block-sticky-options">
                                        <img src="assets/media/TECNO.jpg" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
                            <!-- Tecno ends -->
                        </div>
                        <!-- Content Section ends -->
                    </div>
                    <!-- Personal Gadgets ends -->

                    <!-- Home Appliances -->
                    <div class="categories">
                        <!-- Title Section -->
                        <div class="content-heading">
                            Home Appliances
                        </div>
                        <!-- Title Section ends-->

                        <!-- Content Section -->
                        <div class="row gutters-tiny">
                            <!-- Thermocool -->
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                        <img src="assets/media/thermocool2_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
                            <!-- Thermocool ends -->

                            <!-- Intermediate Sample -->
                            <div class="col-md col-xl-3  ">
                                <!-- bg-gd-elegance -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/samsung_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/panasonic-logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md col-xl-3  ">
                                <!-- bg-gd-elegance -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/lg_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                        </div>
                        <!-- Content Section ends-->
                    </div>
                    <!-- Home Appliances ends-->

                    <!-- Kitchen Wares -->
                    <div class="categories">
                        <div class="content-heading">
                            Kitchen Wares <small class="d-none d-sm-inline"></small>
                            <!-- Overview -->
                        </div>
                        <div class="row gutters-tiny">
                            <!-- Earnings -->
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/binatone LOGO.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>

                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/Midea_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/master_chef_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/scanfronst_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                        </div>
                    </div>
                    <!-- Kitchen Wares ends -->

                    <!-- Baby Items -->
                    <div class="categories">
                        <div class="content-heading">
                            Baby Items <small class="d-none d-sm-inline"></small>
                            <!-- Overview -->
                        </div>
                        <div class="row gutters-tiny">
                            <div class="col-md col-xl-3  ">
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/drylove_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>

                            <div class="col-md col-xl-3  ">
                                <!-- bg-gd-elegance -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/Huggies_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
        
                            <div class="col-md col-xl-3  ">
                                    <!-- bg-gd-elegance -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/moflix_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>

                            <div class="col-md col-xl-3  ">
                                    <!-- bg-gd-elegance -->
                                <a class="block block-rounded block-transparent bg-saving-dash shadow  bg-white rounded " href="javascript:void(0)">
                                    <div class="pay-white-bg-color block-content block-content-full block-sticky-options">
                                            <img src="assets/media/pampers_logo.png" alt="" width="100%" height="185px">
                                    </div>
                                </a>
                            </div>
                    
                    </div>
                    <!-- Baby Items ends -->

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

        <script src="assets/js/codebase.core.min.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Slot modal -->
        <div id="slot" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>  
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row mt-5">

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5">

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5">

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                                <div class="card col-md-4">
                                    <img class="card-img-top" src="assets/media/iphone.jpeg" alt="Card image" width="100%" height="150px">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Iphone XS Max</h4>
                                        <p class="card-text">#5000,000.00</p>
                                    </div>
                                </div>

                            </div>
    
    
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Slot Modal -->

        <!-- ASUS Modal -->
        <div id="asus" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
            
                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>

                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/asus.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">ASUS Laptop X470MA</h4>
                                            <p class="card-text">#120,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
    
                            </div>
    
                        </div>
                    </div>
                </div>
        </div>
        <!-- END ASUS Modal -->

        <!-- TECNO Modal -->
        <div id="tecno" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
            
                                <div class="row mt-5">

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
                
                                <div class="row mt-5">

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/tecno.png" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Camon 11 pro</h4>
                                            <p class="card-text">#76,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
            
        
                            </div>
    
                        </div>
                    </div>
                </div>
        </div>
        <!-- END TECNO Modal -->

        <!-- Intel Modal -->
        <div id="intel" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
            
                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>

                                <div class="row mt-5">
    
                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>                        
                                        </div>
                                    </div>

                                    <div class="card col-md-4">
                                        <img class="card-img-top" src="assets/media/intel.jpg" alt="Card image" width="100%" height="150px">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">HP Notebook 15</h4>
                                            <p class="card-text">#180,000.00</p>
                                        </div>
                                    </div>
        
    
                                </div>
    
            
                            </div>
    
                        </div>
                    </div>
                </div>
        </div>
        <!-- END Intel Modal -->
    </body>
</html>
<?php

?>