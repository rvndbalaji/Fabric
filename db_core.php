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
         if(mysqli_errno($con)==$MYSQL_CODE_DUPLICATE_KEY)
         {
            return mysqli_errno($con);
         }
        return mysqli_error($con);
    }
}

function isLoggedIn()
{
		 if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		{
		 return true;
   		}
		else return false;
}

function getUserInfo($field)
{
    Global $con;

	$id = $_SESSION['user_id'];
	$result = Fetch("SELECT $field FROM users WHERE id='$id' ORDER BY id");
    return $result;

}

?>
