<?php
$servername = "localhost";
$username="root";
$password="";
$db_name="demoproject";
$con = mysqli_connect($servername,$username,$password,$db_name);
if(!$con)
{
  die("Error deleting record:" .mysqli_error($con));
}