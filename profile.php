<?php
session_start();
$userdetails = @$_SESSION['userdetails'];
$emptyPass = @$_SESSION["emptyPass"];
$samePass = @$_SESSION["samePass"];
$passUpdate = @$_SESSION['passwordUpdate'];
$dbPassErr = @$_SESSION['dbPasswordUpdateErr'];
$passUpdateErr = @$_SESSION['passwordUpdateErr'];
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>PayForwardNG: Profile</title>
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
                                <a href="payforward_dashboard.php">
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
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <!-- User Info -->
                <div class="bg-image bg-image-bottom bg-color1 ">
                    <div class="bg-primary-dark-op py-30">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15">
                                <a class="img-link" href="">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/media/avatars/avatar15.jpg" alt="">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10"><?php echo $userdetails["Firstname"]." ".$userdetails["Lastname"];?></h1>

                            <!-- END Personal -->

                            <!-- Actions -->
                            <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-success mb-5">
                                Update Profile Picture
                            </button>

                            <!-- END Actions -->
                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Main Content -->
                <div class="content">
                    <!-- Projects -->
                    <h2 class="content-heading">
                        <i class="fa fa-user mr-5"></i> Personal Details
                    </h2>
                    <div class="row items-push">
                        <div class="col-md-3"></div>
                        <div class="col-md-12 col-xl-6">
                            <div class="row  pay-bottom">
                                <div class="col-md shadow rounded bg-white pt-5 pb-5 pay-border">
                                    <form action="assets/servers/register.php" role="form" method="post" class="pb-5">

                                    <div class="row form-group pay-reg">
                                    
                                        <div class="col-md-6">
                                        <label for="firstname">First Name:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="<?php echo $userdetails["Firstname"];?>">
                                        </div>
                                        
                                    </div>

                                    <div class="row form-group pay-reg">
                                    
                                        <div class="col-md-6">
                                        <label for="lastname">Last Name:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="<?php echo $userdetails["Lastname"];?>">
                                        </div>
                                        
                                    </div>

                                    <div class="row form-group pay-reg">
                                    
                                        <div class="col-md-6">
                                        <label for="email">Email address:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="email" class="form-control"id="email" name="email" placeholder="<?php echo $userdetails["Email"];?>">
                                        </div>
                                        
                                    </div>

                                    <div class="row form-group pay-reg">
                                        
                                        <div class="col-md-6">
                                        <label for="mobile-number">Mobile Number:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control" id="mobile-number" name="mobile-number" placeholder="<?php echo $userdetails["Mobile_Number"];?>">                                        </div>
                                        
                                    </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6 text-center pay-pad">
                                                <button type="submit" class="btn bg-color pay-white">Update Profile</button>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <!-- END Projects -->

                    <!-- Second Project -->
                    <h2 class="content-heading">
                        <i class="fa fa-lock mr-5"></i> Change Password
                    </h2>
                    <div class="row items-push">
                    <div class="col-md-3"></div>
                        <div class="col-md-12 col-xl-6">
                            <div class="row  pay-bottom">
                                <div class="col-md shadow rounded bg-white pt-5 pb-5 pay-border">
                                    <span class="text-danger"><?php echo $emptyPass;?></span>
                                    <span class="text-danger"><?php echo $samePass;?></span>
                                    <span class="text-success"><?php echo $passUpdate;?></span>
                                    <span class="text-danger"><?php echo $dbPassErr;?></span>
                                    <span class="text-danger"><?php echo $dbPassErr;?></span>
                                    <form action="assets/servers/change_password.php" role="form" method="post" class="pb-5">

                                    <div class="row form-group pay-reg">
                                        
                                        <div class="col-md-6">
                                        <label for="current-password">Current Password:</label>
                                        </div>
                                        <div class="col-md-6">
                                    <input type="password" class="form-control" id="current-password" name="current-password" placeholder="">                                        </div>
                                        
                                    </div>


                                    <div class="row form-group pay-reg">
                                        
                                        <div class="col-md-6">
                                        <label for="new-password">New Password:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="password" class="form-control" id="new-password" name="new-password" placeholder="">
                                        </div>
                                    </div>


                                    <div class="row form-group pay-reg">
                                        <div class="col-md-6">
                                        <label for="confirm-password">Retype New Password:</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="password" class="form-control"id="confirm-password" name="confirm-password" placeholder="">
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6 text-center pay-pad">
                                                <button type="submit" class="btn bg-color pay-white">Change Password</button>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                </div>
                <!-- END Main Content -->
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
<?php

unset($_SESSION["emptyPass"]);
unset($_SESSION["samePass"]);
unset($_SESSION['passwordUpdate']);
unset($_SESSION['dbPasswordUpdateErr']);
unset($_SESSION['passwordUpdateErr']);
?>