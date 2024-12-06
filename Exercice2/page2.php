<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <p>
        <?php 
            if (
                isset (
                    $_SESSION['lastName'],
                    $_SESSION['firstName'],
                    $_SESSION['age']
                )
            ) {
                echo "Lastname = {$_SESSION['lastName']}, firstname = {$_SESSION['firstName']}, age = {$_SESSION['age']}";
            }
        ?>
    </p>
</body>
</html>