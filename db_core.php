<?php
$MYSQL_CODE_DUPLICATE_KEY = 1062;

//This file contains the core database details and connects to the database
$host = "localhost";
$un = 'rvnd';
$pass = 'rvnd';
$db = 'fabric';
$con = mysqli_connect($host,$un,$pass,$db) or die('Something went wrong, please try again later');


ob_start();
session_start();
function Fetch($query)
{
    Global $con;
    if($r = mysqli_query($con,$query))
    {
        return $r;
    }
    else
    {
        Global $MYSQL_CODE_DUPLICATE_KEY;
         if(strcmp(mysqli_errno($con),$MYSQL_CODE_DUPLICATE_KEY)==0)
         {
            return $MYSQL_CODE_DUPLICATE_KEY;
         }
        return mysqli_error($con);
    }
}

function getFileName()
{
    return basename($_SERVER['PHP_SELF'],'.php');
}
function isLoggedIn()
{
  return (!(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])));
}

function getUserInfo($username,$field)
{
	$result = Fetch("SELECT $field FROM users WHERE fab_username='$username' ORDER BY fab_id");
   return mysqli_fetch_array($result)[$field];
}

function Read($filename)
{
    $handle = fopen($filename, 'r');
    $con = fread($handle,filesize($filename));
    return $con;
}

function Write($filename,$content)
{
    $handler = fopen($filename,'w');
    fwrite($handler,$content);
    fclose($handler);
}

function LogOut()
{
    ob_flush();
    session_destroy();
    header("Location: http://localhost/Fabric");
}

?>
