<?php 
    if (
        isset(
            $_COOKIE['username'],
            $_COOKIE['password']
        )
    ) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        <?php 
            if (
                isset(
                    $_COOKIE['username'],
                    $_COOKIE['password']
                )
            ) {
                setcookie("username", "Ahmed", time() + (86400 * 30), "/");
                setcookie("password", 1234, time() + (86400 * 30), "/");
                echo "Cookies of exercise-3 are changed";
            }
        ?>
    </p>
</body>
</html>