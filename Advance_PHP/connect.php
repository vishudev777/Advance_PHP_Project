<?php

$con = new mysqli('localhost','root','','user_database');

if(!$con){
    die(mysqli_error($con));
}

?>
