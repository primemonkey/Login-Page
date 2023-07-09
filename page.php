<?php

session_start();

if (!isset($_SESSION['logged'])) {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Page</title>
</head>

<body>

    <?php

    echo "<p>Welcome " . $_SESSION['user'] . '! [ <a href="logout.php">Log out!</a> ]</p>';

    echo "<p><b>E-mail</b>: " . $_SESSION['email'];

    ?>

</body>

</html>