<?php
require('session.php');

echo 'session: ' . $_SESSION['status'];
echo 'Current User: ' . $_SESSION['name'];
echo 'username' . $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HOME!</h1>

    <form action="logout.php">
        <input type="submit" value="LOGOUT">

    </form>


    <a href="about.php">Go to Home</a>


</body>

</html>