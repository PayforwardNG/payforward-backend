<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Withdrawals</title>
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
                                <a class="pay-test" href="payforward_withdrawals.php">
                                    <i><img src="assets/media/withdraw.png" alt=""></i>
                                    <span class="sidebar-mini-hide pay-white-bg-a">Withdrawals</span></a>
                            </li>
                            <li>
                                <a  href="payforward_transfers.php">
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
                <div class="content pay-bg-color">
                    <!-- Latest Orders and Top Products -->
                    <div class="row gutters-tiny">
                        <!-- Latest Orders -->
                        <div class="col">
                            <div class="content-heading">
                                <div class="dropdown float-right">
                                <button type="button" class="btn pay-n-color" data-toggle="modal" data-target="#withdraw">
                                    Cash out now!
                                    </button>
                                </div>
                                Withdrawals
                            </div>
                            <div class="block block-rounded shadow  bg-white rounded">
                                <div class="block-content">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 100px;" class="text-center">Plan</th>
                                                <th class="text-center">Status</th>
                                                <th class="d-none d-sm-table-cell text-center">Amount [ ₦ ]</th>
                                                <th style="width: 100px;" class="text-center">Date</th>
                                                <th class="text-center">Bank</th>
                                                <th class="d-none d-sm-table-cell text-center">Paypoints</th>
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
                                                    <td class="text-center">
                                                            <a class="font-w600" href="be_pages_ecom_order.php">05/05/2019</a>
                                                        </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">GTB</a>
                                                        </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">100</a>
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
                                                    <td class="text-center">
                                                            <a class="font-w600" href="be_pages_ecom_order.php">05/05/2019</a>
                                                        </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">Access</a>                                          </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">100</a>
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
                                                    <td class="text-center">
                                                            <a class="font-w600" href="be_pages_ecom_order.php">05/05/2019</a>
                                                        </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">GTB</a>
                                                        </td>
                                                        <td class="text-center">
                                                                <a class="text-gray-dark" href="be_pages_ecom_orders.php">100</a>
                                                            </td>        
                                                </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Orders and Top Products -->
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

        <div id="withdraw" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>  
                    </div>
                    <div class="modal-body">
                        

                            <div class="row gutters-tiny">
                                    <!-- Orders Earnings Chart -->
                                    <div class="col-md">
                                        <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
                                            <div class="block-header">
                                                <h3 class="block-title">
                                                    Withdrawal Form
                                                </h3>
                                            </div>
                                            <div class="pay-border dropdown-divider"></div>
                                            <div class="block block-rounded block-transparent">
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
                                                            <label for="sel1">Select your bank:</label>
                                                            <select class="form-control pay-border" id="sel1">
                                                                    <option>GTB</option>
                                                                    <option>Access</option>
                                                                    <option>Zenith</option>
                                                                <!-- <option>4</option> -->
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sel1">Account number:</label><br>
                                                            <input type="number" class="pay-border">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sel1">Amount:</label><br>
                                                            <input type="number" class="pay-border">
                                                        </div>
                                                            <button type="submit" class="btn btn-default pay-border">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>            
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/codebase.core.min.js"></script>
        <script src="assets/js/codebase.app.min.js"></script>

    </body>
</html>
<?php

?>