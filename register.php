<?php
session_start();
$genErr = @$_SESSION["genErr"];
$emailErr = @$_SESSION["emailErr"];
$numErr = @$_SESSION["numErr"];
$passErr = @$_SESSION["passErr"];
$regErr = @$_SESSION["regErr"];
$firstErr = @$_SESSION["firstErr"];
$lastErr = @$_SESSION["lastErr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <?php
        include('head.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="row ptm-content">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 text-center">
                <div class="content-header-item">
                    <a class="font-w700" href="../PayforwardNG/">
                        <img class="img-fluid" src="assets/media/slogo.png" alt="">         
                    </a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row pay-reg pay-bottom">
            <div class="col-md-3"></div>
            <div class="col-md-6 shadow rounded bg-white pt-5 pb-5 pay-border">
                <h1 class="h3 pay-color text-center">Register Now!</h1>
                <span class="text-danger"><?php echo $genErr;?></span>
                <span class="text-danger"><?php echo $regErr;?></span>
                <form action="assets/servers/register.php" role="form" method="post" class="pb-5">

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <span class="text-danger"> <?php echo "<br> ".$firstErr;?></span>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <span class="text-danger"> <?php echo "<br> ".$lastErr;?></span>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
                    </div>


                    <div class="form-group">
                        <label for="email">Email address</label>
                        <span class="text-danger"> <?php echo "<br> ".$emailErr;?></span>
                        <input type="email" class="form-control"id="email" name="email" placeholder="johndoe@email.com">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="mobile-number">Mobile Number</label>
                        <span class="text-danger"><?php echo "<br>".$numErr?></span>
                        <input type="text" class="form-control" id="mobile-number" name="mobile-number" placeholder="08123456789">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <span class="text-danger"><?php echo "<br>".$passErr?></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm password">
                    </div>

                    <div class="form-group">
                        <label for="">Referral link (Optional)</label>
                        <input type="text" class="form-control" id="referral" name="referral" placeholder="#PF001">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn bg-color pay-white">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <span>Already have an account? </span><a href="login.php">Click here</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
<?php
unset($_SESSION["genErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["numErr"]);
unset($_SESSION["passErr"]);
unset($_SESSION["regErr"]);
unset($_SESSION["firstErr"]);
unset($_SESSION["lastErr"]);
?>