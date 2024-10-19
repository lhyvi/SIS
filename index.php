<?php
session_start();

if (isset($_SESSION['uname'])) {
    header('Location: sis.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <h1 id="sis-title">SIS</h1>
    <div class="container">
        <div class="panel">
            <h2>User Login</h2>
            <form action="login.php" method="post" class="indexform">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="uname" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" required>
                </div>
                <button type="submit">Login</button>
                <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error">' . $_GET['error'] . '</p>';
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>