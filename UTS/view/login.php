<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="./../css/loginStyle.css">
</head>

<div class="loading-container">
        <i class="fas fa-plane airplane"></i>
        <p>Loading...</p>
    </div>
<body>
    <div class="login-container" style="display: none;">
        <h2>Login</h2>
        <?php
        session_start();
        if (isset($_SESSION["error"])) {
            echo "<span>" . $_SESSION["error"] . "</span>";
        } elseif (isset($_SESSION["sukses"])) {
            echo "<span class='sukses'>" . $_SESSION["sukses"] . "</span>";
        }
        ?>
        <!-- <span>Email atau Password Salah !</span> -->
        <form action="../routes/route.php?action=login" method="post">
            <div class="input-group">
                <label for="">Email</label>
                <input type="email" placeholder="Enter your Email" name="email" required>
            </div>
            <div class="input-group">
                <label for="">Password</label>
                <input type="password" placeholder="Enter your Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Login" name="submit" id="submit">
            </div>
            <div class="input-group register">
                <p>Apakah Anda memiliki akun ? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</body>
<?php
unset($_SESSION["error"]);
unset($_SESSION["sukses"]);
?>
<script>
    setTimeout(function() {
        $(".login-container").css("display", "block");
        $(".loading-container").css("display", "none");
    }, 1000);
</script>

</html>