<?php 
//destroys the session and sends user back to login page
include("server.php");
session_unset();
session_destroy();
header('location: login3.php');
?>