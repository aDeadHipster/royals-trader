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
    <title>Royals Trader - Homepage</title>
    <?php include('dependencies.html')?>
</head>
<body>
<div class="container-fluid">
    <div class="row main-row">
        <div id="main-wrapper" class="col-md-6 col-lg-6 col-sm-12 col-12">
            <!-- Header row -->
            <?php
                include("header.php");
            ?>
        </div>
    </div>
</div>
</body>
</html>