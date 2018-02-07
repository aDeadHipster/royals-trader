<?php
include("header.php");
?>

<div id="header-row" class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Royals Trader</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="https://mapleroyals.com/?page=index" class="nav-link">Maple Royals</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="li-username" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="mytrades.php">Manage trades</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>