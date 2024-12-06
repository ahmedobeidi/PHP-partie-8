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
    <title>Exercice 4</title>
</head>
<body>
    <p>
        <?php 
            if (
                isset (
                    $_COOKIE['username'],
                    $_COOKIE['password']
                )
            ) {
                echo "Username = {$_COOKIE['username']}, Password = {$_COOKIE['password']}";
            }
        ?>
    </p>
</body>
</html>