<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Dashboard - Quick Save</title>

        <?php
        include('head.php');
        ?>
        
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <?php
            include('right_panel.php');
           ?>

            <!-- END Side Overlay -->
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
                                <a class="pay-test" href="payforward_quick_save.php">
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
                            <span class="breadcrumb-item active">Dashboard</span>
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->
                <div class="content pay-bg-color">
                    <div class="content-heading">
                        <div class="dropdown float-right">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="layout" data-action="side_overlay_toggle">
                                Finance Tools
                            </button>
                        </div>
                        Save Now <small class="d-none d-sm-inline"></small>
                        <!-- Overview -->
                    </div>
                    <div class="row gutters-tiny">

                        <!-- Orders Earnings Chart -->
                        <div class="col-md-3">
                        </div>
                        <!-- END Orders Earnings Chart -->
                        <div class="col-md-6">
                                <div class="block block-rounded block-mode-loading-refresh shadow  bg-white rounded pay-border">
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
                                                                        <label for="sel1">Select the plan to be credited:</label>
                                                                        <select class="form-control pay-border" id="sel1">
                                                                          <option>Wedding</option>
                                                                          <option>Birthday</option>
                                                                          <option>Burial</option>
                                                                          <!-- <option>4</option> -->
                                                                        </select>
                                                                      </div>


                                                                      <div class="form-group">
                                                                            <label for="sel1">Select bank to be debited:</label>
                                                                            <select class="form-control pay-border" id="sel1">
                                                                              <option>GTB</option>
                                                                              <option>Access</option>
                                                                              <option>Zenith</option>
                                                                              <!-- <option>4</option> -->
                                                                            </select>
                                                                          </div>
                                                                <button type="submit" class="btn btn-default pay-border">Submit</button>
                                                              </form>
                                                    </div>
                                                </div>
</div>
    
                                    </div>
                                    <div class="block-content block-content-full">
                                        <div class="pull-all">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-3">
                            
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

        <script>
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
<?php

?>