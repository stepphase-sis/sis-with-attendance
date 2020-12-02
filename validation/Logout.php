<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session
session_destroy();

//header('location: ../index.php');

//   header( "refresh:0;url=../index.php" );
//     echo "<script type='text/javascript'>alert('Sucessfully Logout.');</script>";
//    $URL="../index.php";
//echo "<script type='text/javascript'>document.location.href='{$URL}';alert('Sucessfully Logout.');</script>";
//echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
mysqli_close($connect);
echo "<script type='text/javascript'>alert('Sucessfully Logout.');</script>";
echo '<meta http-equiv="refresh" content="0; URL=../index.html">';
?>
