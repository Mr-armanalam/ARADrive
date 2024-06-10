<?php 

    $db = new mysqli("localhost","root","","stpdrive");

    if($db->connect_error){
        die("connection not stablished") ; //for not next executed
    }


    // new mysqli() or mysqli_connect() - open a new connection to the mysql server
    // mysqli->connect_error() or mysqli_connect_error() - to find connection error
    // die(message) - prints a message and exits the current script
?>