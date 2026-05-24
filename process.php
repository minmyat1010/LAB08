<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password267') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>
</body>
</html>