<?php
require('database.php');
session_start();

if (isset($_SESSION['status']) && $_SESSION['status'] == 'valid') {
    header('Location: home.php');
    exit();
}

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo 'Please fill in all fields.';
    } else {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_array($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['status'] = 'valid';
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                header('Location: home.php');
                exit();
            } else {
                $_SESSION['status'] = 'invalid';
                echo 'Invalid Credentials';
            }
        } else {
            $_SESSION['status'] = 'invalid';
            echo 'Invalid Credentials';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="login" value="LOGIN">
    </form>
</body>

</html>
