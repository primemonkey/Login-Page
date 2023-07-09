<?php

session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)) {
    header('Location: page.php');
    exit();
}

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login page</title>
</head>

<body>

    Welcome <br /><br />

    <form action="login.php" method="post">

        Login: <br /> <input type="text" name="login" /> <br />
        Password: <br /> <input type="password" name="password" /> <br /><br />
        <input type="submit" value="Log in" />

    </form>

    <?php
    if (isset($_SESSION['error']))    echo $_SESSION['error'];
    ?>

</body>

</html>