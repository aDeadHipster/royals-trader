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
            <?php include("header.php"); ?>

            <!-- Profile Info Row -->
            <h1 class="mt-3">Profile info</h1>
            <div class="row mt-3">
                <div class="col-sm-3 d-flex align-items-stretch">
                    <div class="card">
<!--                        <div class="card-header">-->
<!--                            <h3>Profile image <a class="a-edit-profile" href="editprofile.php"><i class="far fa-xs fa-edit"></i></a></h3>-->
<!--                        </div>-->
                        <div class="card-block p-4 m-auto">
                            <img src="https://www.sonypark360.net/wp-content/uploads/2017/08/profile-pictures.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 align-items-stretch">
                    <div class="card">
<!--                        <div class="card-header">-->
<!--                            <h3>Profile Info <a class="a-edit-profile" href="editprofile.php"><i class="far fa-xs fa-edit"></i></a></h3>-->
<!--                        </div>-->
                        <div class="card-block p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Username</th>
                                    <td><?php echo $_SESSION['username'] ?></td>
                                </tr>
                                <tr>
                                    <th>IGNs</th>
                                    <td>Allan, Futurebound, Atariwave</td>
                                </tr>
                                <tr>
                                    <th>Discord</th>
                                    <td>aDeadHipster - Justin#2696</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>sidehero2@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Reputation</th>
                                    <td>203</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trades row -->
            <h1 class="mt-4">Active trades</h1>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3><?php echo $_SESSION['username'] ?> sells</h3>
                        </div>
                        <div class="card-block p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th>Contact</th>
                                </tr>
                                <tr>
                                    <td><img class="item-thumb-sm" src="https://vignette.wikia.nocookie.net/maplestory/images/e/e5/Eqp_Work_Gloves.png/revision/latest?cb=20140930030059"></td>
                                    <td>Selling work gloves 15 attack</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="contact.php"><i class="fas fa-info"></i></a>
                                        <a class="btn btn-sm btn-primary" href="contact.php"><i class="fas fa-comment-alt"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3><?php echo $_SESSION['username'] ?> buys</h3>
                        </div>
                        <div class="card-block p-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Username</th>
                                    <td><?php echo $_SESSION['username'] ?></td>
                                </tr>
                                <tr>
                                    <th>IGNs</th>
                                    <td>Allan, Futurebound, Atariwave</td>
                                </tr>
                                <tr>
                                    <th>Discord</th>
                                    <td>aDeadHipster - Justin#2696</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>sidehero2@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Reputation</th>
                                    <td>203</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>