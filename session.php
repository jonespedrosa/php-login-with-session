<?php
session_start();
// require('session.php');

function pathTo($destination) {
    header("Location: $destination.php");
}


if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* set as default Invalid */
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['username']);
  pathTo('login');
}
// echo 'session: ' . $_SESSION['status'];
// echo 'Current User: ' . $_SESSION['name'];

?>