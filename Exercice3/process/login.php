<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php?error=notPOST');
    return;
}

if (!isset($_POST['username'], $_POST['password'])) {
    header('location: ../index.php?error=areNotSets');
    return;
}

if (
    empty($_POST['username']) ||
    empty($_POST['password'])
) {
    header('location: ../index.php?error=empty');
    return;
}

$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));

if (
    strlen($username) > 50 ||
    strlen($password) > 50
) {
    header('location: ../index.php?error=length');
    return;
}

setcookie("username", $username, time() + (86400 * 30), "/");
setcookie("password", $password, time() + (86400 * 30), "/");

echo "Cookies are sets";