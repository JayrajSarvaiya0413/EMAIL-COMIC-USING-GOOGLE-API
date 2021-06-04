<?php

include "unsubcon.php"; // Using database connection file here

$id = $_POST['mail']; // get id through query string

$del = mysqli_query($db,"delete from email where emailid = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    echo "delete successfully";
     header("location:unsubsucess.php"); // redirects to all records page
     exit; 
 }
 else
 {
    echo "Error deleting record"; // display error message if not delete
}
?>