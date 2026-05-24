<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
        session_start();

        if (isset($_SESSION['user'])) {
            include "header.inc";

            echo "<h1>Welcome, " . $_SESSION['user'] . "!</h1>";
            echo '<p>You have successfully logged in.</p>';

            include "footer.inc";
        } else {
            header("Location: login.html");
            exit();
        }
    ?>
</body>
</html>