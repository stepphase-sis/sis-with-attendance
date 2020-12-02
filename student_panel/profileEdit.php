<?php
include('student/connection.php');
if (isset($_SESSION["slogged"])) {
//echo $_SESSION["flogged"];

    $_SESSION["crntuser"] = "index.php"; //To redirect
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
    .container-card {
        background-color: #189ab4;
        color: white;
        padding: 20px;
        max-width: 600px;
        margin: auto;
        margin-top: 70px;
        height: auto;
    }

    .input {
        padding: 8px;
        display: block;
        border: none;
        border-bottom: 1px solid #ccc;
        width: 100%;
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fa fa-bars"></i>
        </span>
        <a href="index.php"><img class="logo" src="../images/logo.png"></a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="index.php" class="nav-links active">Home</a>
            </li>
            <li>
                <a class="nav-links"><?php echo $_SESSION['student_name'];?></a> <a
                    style="color : white "><?php echo $_SESSION['username']?></a>
            </li>
            <li>
                <a href="../validation/Logout.php" class="nav-links">Log Out</a>
            </li>
        </ul>
    </nav>
    <div class="container-card">
        <table width="345">
            <caption style="padding: 20px; background-color: #05445e">
                Profile Edit
            </caption>
        </table>
        <form name="slogin" method="post" action="../validation/login_validation.php">
            <p>
                <label>Email</label>
                <input class="input" name="email" type="email"
                    value="<?php if (isset($_COOKIE['email'])) {echo $_COOKIE['email'];} ?>" />
            </p>
            <p>
                <label>Enrollment No.</label>
                <input class="input" name="enroll" type="enroll"
                    value="<?php if (isset($_COOKIE['enroll'])) {echo $_COOKIE['enroll'];} ?>" />
            </p>
            <p>
                <label>Password</label>
                <input class="input" name="password" type="password"
                    value="<?php if (isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" />
            </p>
            <p>
                <label>Departmant</label>
                <input class="input" name="dep" type="dep"
                    value="<?php if (isset($_COOKIE['dep'])) {echo $_COOKIE['dep'];} ?>" />
            </p>
            <p>
                <label>Semester</label>
                <input class="input" name="sem" type="sem"
                    value="<?php if (isset($_COOKIE['sem'])) {echo $_COOKIE['sem'];} ?>" />
            </p>

            <div style="text-align: center">
                <input type="submit" value="Save" name="save" />
            </div>
        </form>
    </div>
    <div class="footer">
        <h2>2020&copy; SIS</h2>
    </div>
    <script src="../script/script.js"></script>
</body>

</html>
<?php
//}else {
//    echo "<script type='text/javascript'>alert('You are already logged in.');</script>";
//    echo '<meta http-equiv="refresh" content="0; URL=../index.php">';
//}
} else {
    echo '<meta http-equiv="refresh" content="0; URL=./login.php">';
}
?>