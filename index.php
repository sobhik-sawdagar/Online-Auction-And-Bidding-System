<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='login.js'></script>
    <link rel="stylesheet" href="login.css" media="all" />
    <title>Log In</title>
</head>

<body>
    <div class="container-fluid">

        <h1 id=h1 style="text-align:center;"><u>Online Auction and Bidding</u></h1>
        <hr>
    </div>

    <div class="container">

        <h3 id=h3 style="text-align:center;"><u>Login or Register Here</u></h3>

        <form id="log" action="#" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <b>E-mail ID:</b>&nbsp;<input type="email" name="email" placeholder="Email ID" required>
            <br>
            <b>Password:</b>&nbsp;<input type="password" name="pass" placeholder="Password" required>
            <br>
            <br>
            <input class="btn-secondary" type="submit" id="login" name="login" value="Login">
        </form>
        <br>

        <h5 style="font-size: 15px;"><u>Forgot Password?<a href="forgotpass.php">Click Here</a></u></h5>

        <h5 style="font-size: 20px; float:right;"><u>Don't have an account?<a href="cust_register.php">Create Here</a></u></h5>

        

    </div>
    <div class="img">
            <img src="Admin/misc/logo.png" alt="" id="l1">

        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $log = "SELECT * FROM customer WHERE cust_email = '$email' AND cust_pass = '$pass' ";

    $result = mysqli_query($conn, $log);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['cust_email'] === $email && $row['cust_pass'] === $pass && $row['flag'] === 'Enable') {
            $_SESSION['cust_email'] = $row['cust_email'];
            $_SESSION['cust_id'] = $row['cust_id'];
            //header("Location: home.php");
            echo "<script><>window.location.href='home.php';</script>";
            exit();
        } else {
            //header("Location: index.php?error=You Account is disabled! Please Contact Admin");
            echo "<script><>window.location.href='index.php?error=You Account is disabled! Please Contact Admin';</script>";
            exit();
        }
    } else {
        //header("Location: index.php?error=Incorect User Name or Password");
        echo "<script><>window.location.href='index.php?error=Incorect User Name or Password';</script>";
        exit();
    }
}
?>