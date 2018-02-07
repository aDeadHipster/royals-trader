<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Royals Trader - Profile</title>
    <?php include('dependencies.html') ?>
</head>
<body>
<div class="container-fluid">
    <div class="row main-row">
        <div id="main-wrapper" class="col-md-6 col-lg-6 col-sm-12 col-12">
            <!-- Header row -->
            <?php
            include("header.php");
            ?>

            <!-- Profile Info Row -->
            <div class="row">
                <div class="col-12">
                    <div class="col-md-12 mt-2 p-3 border">
                        <div class="col-md-2">
                            <img src="https://lh3.googleusercontent.com/VT-PqxMMsA2wPy7kzmuKGDIzaA3AGuXKExqnfOfwTEy5AvLIMTranbfNGheRr457RD4=w300" class="img-profile">
                        </div>
                        <div class="col-md-10">
                            <table></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>