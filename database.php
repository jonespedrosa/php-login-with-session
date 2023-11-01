<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'mg-digitalpersona';


$connection = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()) {
    echo 'Error';
} else {
    // echo 'Connected'; 
}

?>
