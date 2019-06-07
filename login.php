<?php
session_start();
$emptyErr = @$_SESSION["emptyErr"]; // Error message for any ocurrence of empty field
$passErr = @$_SESSION["passErr"]; // Error message for wrong password
$emailErr = @$_SESSION["emailErr"]; // Error message for wrong email
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php
        // External files for all styles are linked here
        include('head.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="row ptm-content">
            <div class="col-md-4"></div>
            <!-- Logo -->
            <div class="col-md-4 mt-5 text-center">    
                <div class="content-header-item">
                    <a class="font-w700" href="../PayforwardNG/">
                        <img class="img-fluid" src="assets/media/slogo.png" alt="">         
                    </a>
                </div>
            </div>
            <!-- Logo ends -->
            <div class="col-md-4"></div>
        </div>
        <div class="row pay-reg pay-bottom">
            <div class="col-md-3"></div>
            <!-- Main body -->
            <div class="col-md-6 shadow rounded bg-white pt-5 pb-5 pay-border">
                <h1 class="h3 pay-color text-center">Login</h1>
                <span class="text-danger"><?php echo "<br>".$emptyErr;?></span>
                <!-- Form -->
                <form action="assets/servers/login.php" role="form" method="post" class="pb-5">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <span class="text-danger"><?php echo "<br>".$emailErr;?></span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="John">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <span class="text-danger"><?php echo "<br>".$passErr;?></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn bg-color pay-white">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <span>Don't have an account? </span><a href="register.php">Click here</a>
                        </div>
                    </div>
                </form>
                <!-- Form ends -->
            </div>
            <!-- Main body ends -->
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
<?php
// Clearing of each error message on-refresh
unset($_SESSION["emptyErr"]);
unset($_SESSION["passErr"]);
unset($_SESSION["emailErr"]);
?>