<?php
session_start();

// Destroy the session first to clear all session data
session_destroy();

// Now, set the session variable after destroying the session
$_SESSION['status'] = 'invalid';
unset($_SESSION['username']);

header('Location: login.php');
?>
