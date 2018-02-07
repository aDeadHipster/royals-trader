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

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row main-row">
        <div id="main-wrapper" class="col-md-6 col-lg-6 col-sm-12 col-12">
            <!-- Header row -->
            <?php
                echo file_get_contents("header.php");
            ?>
        </div>
    </div>
</div>
</body>
</html>