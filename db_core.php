<?php

//This file contains the core database details and connects to the database
$host = "localhost";
$un = 'rvnd';
$pass = 'rvnd';
$db = 'fabric';
$con = mysqli_connect($host,$un,$pass) or die('Something went wrong, please try again later');
mysqli_select_db($con,$db);
?>
