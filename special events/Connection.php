<?php

$hostname = 'localhost';
$username = 'root';
$pwd = '';
$dbname = 'special_events';

$conn = mysqli_connect($hostname, $username, $pwd, $dbname);


if(mysqli_connect_errno())
{
    die("Connection faild: ".mysqli_connect_error());
}
?>