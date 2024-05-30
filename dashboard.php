<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include_once "menu.php";
    include_once "check_login.php";

    $user = $_SESSION['user_login'];
    ?>
    <h1>Hello, <?php echo $user['nama']; ?></h1>
    <h1>Email : <?php echo $user['email']; ?></h1>

    <a href="logout.php"><button>Logout</button></a>
</body>
</html>