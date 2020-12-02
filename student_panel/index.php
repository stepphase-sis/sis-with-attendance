<?php
include('student/connection.php');
if (isset($_SESSION["slogged"])) {
//echo $_SESSION["flogged"];

    $_SESSION["crntuser"] = "index.php"; //To redirect
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Dashboard</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link href="../styles/profileStyle.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    section {
  width: 100%;
}


/* Pattern styles */
.left-half {
  
  float: left;
  width: 50%;
}
.right-half {
  
  float: left;
  width: 50%;
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
          <a class="nav-links"><?php echo $_SESSION['student_name'];?></a> <a style="color : white "><?php echo $_SESSION['username']?></a>
        </li>
        <li>
          <a href="../validation/Logout.php" class="nav-links">Log Out</a>
        </li>
      </ul>
    </nav>
    <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <div class="cardHeader">
          <h2>Student Information System</h2>
            <h5>Aug 20, 2020</h5>
          </div>
          <div class="fakeimg">
            <img src="../images/banner.jpg" alt="" />
          </div>
          <p>About SIS</p>
          <p>
            A student information system (SIS), student management system,
            school administration software or student administration system is a
            management information system for education establishments used to
            manage student data. Student information systems provide
            capabilities for registering students in courses; documenting
            grading, transcripts, results of student tests and other assessment
            scores; building student schedules; tracking student attendance; and
            managing many other student-related data needs in a school.
            Information security is a concern, as universities house an array of
            sensitive personal information, making them potentially attractive
            targets for security breaches, such as those experienced by retail
            corporations or healthcare providers. A major system in use within
            the UK is Capita's SIMS system. Other systems available include
            Arnor, Bromcom, Civica REMS, Cloud School, Engage, iSAMS,
            PowerSchool, RM Integris, ScholarPack, SchoolBase, SchoolPod and
            WCBS.
          </p>
        </div>
        <div class="card">
          <h2>Gain More Knowledge</h2>
          <h5>Sep 2, 2017</h5>
          <div class="fakeimg" style="height: 700px">
            <img src="../images/cardimg.jpg" alt="" style="height: 700px" />
          </div>
          <p>Some text..</p>
          <p>
            Sunt in culpa qui officia deserunt mollit anim id est laborum
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco.
          </p>
        </div>
      </div>
      <div class="rightcolumn">
        <div class="card" style="height:300px ">
          <div class="left-half">
            <article>
              <h1>Your Profile</h1>
              <img alt="Avatar" class="avatar" src="../images/img_avatar.png
           <?php
                                // $pho = "select enrollno,photo from student where enrollno ='" . $_SESSION['enrollment'] . "'";
                                // $phosql = mysqli_query($connect, $pho);
                                // while ($phorow = mysqli_fetch_array($phosql)) {
                                //     $enroll = $phorow['enrollno'];
                                //     $photo = $phorow['photo'];
                                // }
                                // if ($photo) {
                                //     // File upload path
                                //     // $path = "../uploads/profile/$emrollnoment/";
                                //     $path = "../uploads/profile/";

                                //     echo $path . $photo;
                                // } else {
                                //     echo './../dist/img/s.jpg';
                                // }
            ?> 
          " alt="User profile picture">
          <h3>(<?php echo $_SESSION['enrollment'];?>)</h3>
            </article>
          </div>
          <div class="right-half" style="left-margin: 10px">
            <article>
              <h1>&nbsp;</h1>
              <h3><?php echo $_SESSION['student_name'];?> <?php echo $_SESSION['username']?></h3>
              <h3><?php echo $_SESSION['department'];?></h3> 
              <h3>Sem <?php echo $_SESSION['ssemester'];?>th</h3>  
            </article>
            <form method="POST" action="./profileEdit.php">
              <button type="submit">Edit Profile</button>
            <form>
          </div>
        </div>
        <div class="card">
          <h2>Follow Us</h2>
          <div class="card-body">
            <div class="template-demo">
              <button
                type="button"
                class="btn btn-social-icon btn-outline-facebook"
              >
                <i class="fa fa-facebook"></i>
              </button>
              <button
                type="button"
                class="btn btn-social-icon btn-outline-youtube"
              >
                <i class="fa fa-youtube"></i>
              </button>
              <button
                type="button"
                class="btn btn-social-icon btn-outline-twitter"
              >
                <i class="fa fa-twitter"></i>
              </button>
              <button
                type="button"
                class="btn btn-social-icon btn-outline-dribbble"
              >
                <i class="fa fa-dribbble"></i>
              </button>
              <button
                type="button"
                class="btn btn-social-icon btn-outline-linkedin"
              >
                <i class="fa fa-linkedin"></i>
              </button>
              <button
                type="button"
                class="btn btn-social-icon btn-outline-instagram"
              >
                <i class="fa fa-instagram"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <h3>Popular Post</h3>
          <div class="fakeimg">
            <img src="../images/sidecardimg.jpg" alt="" />
          </div>
          <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          <br />
          <br />
          <div class="fakeimg">
            <img src="../images/sidecardimg1.jpg" alt="" />
          </div>
          <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div>
      </div>
    </div>
    <div class="footer">
      <h2>2020&copy; SIS</h2>
    </div>
    <script src="../script/script.js"></script>
  </body>
</html>
<?php
} else {
    echo "<script type='text/javascript'>alert('Please Login First.');</script>";
    echo '<meta http-equiv="refresh" content="0; URL=./login.php">';
}
?>