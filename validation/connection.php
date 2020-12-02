<?php
$connect = mysqli_connect("localhost", "root", "") or die ("Could not connect to Database");
mysqli_select_db($connect, "sis");
?>