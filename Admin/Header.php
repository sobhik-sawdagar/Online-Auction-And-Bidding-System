<?php
$adnamne = $_SESSION["Admin_Name"];
?>

<div class="container-fluid">
    <h1 id=h1 style="text-align:center;"><u>ADMIN'S CORNER</u></h1>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border: 1px solid wheat;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            &nbsp;&nbsp;
            <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>&nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="structUpCred.php">Update Credentials</a>
                        <hr>
                        <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            
            </ul>

        </div>
    </nav>


</div>