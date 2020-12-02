<?php
//PHP Login Validation for Student
if (isset($_POST['s_login'])) {
    include "../student_panel/student/connection.php";

    $email = $_POST['user_id'];
    $psw = $_POST['password'];

    $s_query = ("SELECT * FROM student WHERE std_emailid = '$email' AND std_password = '$psw' AND std_status = 1");
    $s_login = mysqli_query($connect, $s_query);
    if($values = mysqli_fetch_assoc($s_login)) {
        $s_name = $values['std_fname'];
        $_SESSION['student_name'] = "$s_name";
    }

    if(!$values) {
        echo "<script type='text/javascript'>alert('Please Check Enrollment / Password / Check for status (Active).');</script>";
        echo '<meta http-equiv="refresh" content="0; URL=../index.html">';
    } else {
       
        $suser = "SELECT * FROM `student` WHERE std_emailid = '$email'";
        $user = mysqli_query($connect, $suser);
        while($row = mysqli_fetch_array($user, MYSQLI_ASSOC)) {
            $s_name = $row['std_lname'];
            //$s_photo = $row['photo'];
            $sem = $row['std_sem'];
            $enrollment = $row['std_enroll'];
            $s_email = $row['std_emailid'];
            $sid = $row['std_id'];
            $s_dep = $row['std_dep'];
        }
        $_SESSION["slogged"] = "slogged";
        $_SESSION['department'] = "$s_dep";
        $_SESSION['s_email'] = "$s_email";
        $_SESSION['s_id'] = "$sid";
       // $_SESSION['mobileno'] = "$mobno";
        $_SESSION['username'] = "$s_name";
        //$_SESSION['photo'] = "$s_photo";
        $_SESSION['enrollment'] = "$enrollment";
        //$_SESSION['password'] = "$psw";
        $_SESSION['ssemester'] = "$sem";
        // header('Location: student_home.php');
        echo '<meta http-equiv="refresh" content="0; URL=../student_panel/index.php">';
    }
    /*mysqli_close($connect);*/
}
?>