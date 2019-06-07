<?php
session_start();
$firstname = @$_SESSION[$firstname];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Success</title>
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
                    <a class="font-w700" href="index.php">
                        <img class="img-fluid" src="assets/media/slogo.png" alt="">         
                    </a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row pay-reg pay-bottom">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow rounded bg-white pt-5 pb-5 pay-border text-center">
                <h2>Thank you for registering</h2>
                <span><?php echo "<br>".$firstname."<br>";?></span>
                <p class="p-5 m-5">Kindly click the link sent to your email to confirm your registeration</p>
                <br>
                <a href="login.php"><i class="fa fa-arrow-right"></i> Then login</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
<?php
unset($_SESSION[$firstname]);
?>