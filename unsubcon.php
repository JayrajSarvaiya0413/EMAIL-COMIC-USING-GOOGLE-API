<?php

$db = mysqli_connect("localhost","root","","rtcampemail");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>