<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logout.php">
        <button type="submit">Logout</button>
    </form>
    Welcome <?php echo "{$_SESSION['username']}"; ?>
</body>
</html>