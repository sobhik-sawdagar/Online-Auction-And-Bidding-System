<?php
$cemail = $_SESSION["cust_email"];
?>

<div class="container-fluid">
    <h1 id=h1 style="text-align:center;"><u>ONLINE AUCTION & BIDDING</u></h1>
    <img src='Admin/misc/logo5.png' alt='' id='l2'>
    &nbsp;
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border: 1px solid wheat;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="structAbout.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="structContact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="structBids.php">1. My Bids</a>
                        <hr>
                        <a class="dropdown-item" href="structProfile.php">2. My Profile</a>
                        <hr>
                        <a class="dropdown-item" href="structUpro.php">3. Update Profile</a>
                        <hr>
                        <a class="dropdown-item" href="structReqPro.php">4. Request To List Your Product</a>
                        <hr>
                        <a class="dropdown-item" href="logout.php"><b>Log Out</b></a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <p style="color: white; margin-top:15px;"><?php
                                                                echo "Welcome | $cemail";
                                                                ?></p>
                </li>
            </ul>

        </div>
    </nav>


</div>