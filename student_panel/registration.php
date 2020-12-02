<?php include('../validation/connection.php');
//if (isset($_SESSION['logged'])) {
//SESSION for permission to open page under Admin whene admin is login and
    //$_SESSION["adminhome"] = "imadmin";

    //include('sis/functions.php');
    include('student/validation.php');
    ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HTML Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      .container-card {
        background-color: #189ab4;
        color: white;
        padding: 20px;
        max-width: 600px;
        margin: auto;
        margin-top: 65px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fa fa-bars"></i>
      </span>
      <a href="../index.html"><img class="logo" src="../images/logo.png"></a>
      <ul class="main-nav" id="js-menu">
        <li>
          <a href="../index.html" class="nav-links">Home</a>
        </li>
        <li>
          <a href="../About.html" class="nav-links">About Us</a>
        </li>
        <li>
          <a href="../Contact.html" class="nav-links">Contact Us</a>
        </li>
        <li>
          <a href="login.php" class="nav-links">Login</a>
        </li>
      </ul>
    </nav>
    <div class="container-card">
      <form
        role="form"
        method="POST"
        name="addstudent"
        id="registeration"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
        onsubmit="return validate();"
      >
        <table align-item="center" width="600">
          <caption style="padding: 20px; background-color: #05445e">
            Registration
          </caption>
          <tr>
            <th>Enrollment No.</th>
            <td>
              <input type="number" id="enrollment" name="enrollment" placeholder="enter your enrollment no." />
            </td>
          </tr>
          <tr>
            <th>First Name</th>
            <td>
              <input
                type="text"
                name="fn"
                id="fn"
                maxlength="10"
                title="enter your first name"
                placeholder="enter your first name"
              />
            </td>
          </tr>
          <tr>
            <th>Last Name</th>
            <td>
              <input type="text" id="ln" name="ln" placeholder="enter your last name" />
            </td>
          </tr>
          <tr>
            <th>Enter password</th>
            <td>
              <input
                type="password"
                id="pwd"
                name="pwd"
                placeholder="enter your password"
              />
            </td>
          </tr>
          <tr>
            <th>Re-enter password</th>
            <td>
              <input
                type="password"
                id="repwd"
                name="repwd"
                placeholder="re-enter your password"
              />
            </td>
          </tr>
          <tr>
            <th>Email</th>
            <td>
              <input type="email" id="email" name="email" placeholder="enter your email" />
            </td>
          </tr>
          <tr>
            <th>Contact Number</th>
            <td>
              <input type="tel" id="number" name="number" placeholder="enter your number" />
            </td>
          </tr>
          <tr>
            <th>Address</th>
            <td>
              <textarea
                rows="2"
                cols="20"
                wrap="hard"
                name="address"
                id="address"
                placeholder="enter your address"
              ></textarea>
            </td>
          </tr>
          <tr>
            <th>Select gender</th>
            <td>
              Male<input type="radio" id="optionsRadios1" name="Gender" value="Male" checked /> Female<input
                type="radio"
                name="Gender"
                id="optionsRadios2"
                value="Female"
              />
            </td>
          </tr>
          <tr>
            <th>Date Of Birth</th>
            <td><input type="number" id="dob" name="dob" /></td>
          </tr>
          <tr>
            <th>Select Country</th>
            <td>
              <select name="country">
                <option value="" selected="selected" disabled="disabled">
                  Select country
                </option>
                <option id="country" name="country" value="India">India</option>
                <option id="country" name="country" value="USA">USA</option>
              </select>
            </td>
          </tr>
          <tr>
            <th>Upload photo</th>
            <td><input type="file" name="Image" id="Image"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center" style="margin-bottom: 40px">
              <input type="submit" id="addstudent" name="addstudent" />
              <input type="reset" value="Reset Data" />
              <h3>
                Already have an account
                <a href="./Login.html" style="color: #05445e">Login</a>
              </h3>
            </td>
          </tr>
        </table>
      </form>

      <?php
           if (isset($_POST['addstudent'])) {
               $Enrollment = $_POST['enrollment'];
               $Fname = $_POST['fn'];
               $Lname = $_POST['ln'];
               $Password = md5($_POST['pwd']);
               $Repassword = md5($_POST['repwd']);
               $Email = $_POST['email'];
               $Number = $_POST['number'];
               $Gender = $_POST['Gender'];
               $Address = $_POST['address'];
               $DOB = $_POST['dob'];
               $Country = $_POST['country'];
               $Dep = "Computer";
               $Sem = 5;
               $Status = 1;

               //echo $Enrollment,$Fname,$Lname,$Email,$Password,$Address,$Dep,$Sem,$DOB,$Status,$Gender;
              if (isset($_FILES['Image'])) {
                  $category_name = "image";
                  $files = $_FILES['fileToUpload'];
                  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
                  mkdir("../images/$Enrollment");
                  $path = "./images/$Enrollment";
                  $img = "./images/$Enrollment" . upload($files, $valid_extensions, $path, $category_name);
                  } else {
                    $img = "";
                  }

                  // search submission ID
                  $student_search = "SELECT * FROM student WHERE std_enroll = '$Enrollment'";
                  $search_result = mysqli_query($connect, $student_search);
                  $resultcount = mysqli_num_rows($search_result);
              if ($resultcount > 0) {
                echo '<script>alert("Given Email id is all ready registred")</script>';
              } else {
                     $insert_student = "INSERT INTO student(std_enroll,std_fname,std_lname,std_emailid,std_password,std_add,std_dep,std_sem,std_birthday,std_status) VALUES('$Enrollment','$Fname','$Lname','$Email','$Password','$Address','$Dep','$Sem','$DOB','$Status')";
                     $insert_result = mysqli_query($connect, $insert_student);
                     if (!$insert_result) {
                         echo '<script>alert("Inserted into Database Fail")</script>';
                      } else {
                          echo '<script>alert("Inserted into Database")</script>';
                          echo '<meta http-equiv="refresh" content="0; URL=./login.php">';
                }
              }
           }
?>

    </div>
    <div class="footer">
      <h2>2020&copy; SIS</h2>
    </div>
    <script src="../script/script.js"></script>
  </body>
</html>
<?php
// } else {
//     echo "<script type='text/javascript'>alert('Please Login First.');</script>";
//     echo '<meta http-equiv="refresh" content="0; URL=./home.php">';
// }
?>
