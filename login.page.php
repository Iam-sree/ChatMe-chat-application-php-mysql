
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp| Login</title>
</head>
<body>
    <div class="page-conitainer" style="width:400px;margin:0 auto;box-shadow:1px 1px 10px 1px #ccc; padding:10px;">
        <form method="post" action="functions/login.func.php">
            <h2>Login</h2><br>
            <input type="text" name="username" placeholder="Username" /><br><br>
            <input type="password" name="password" placeholder="Password" /><br><br>
            <input type="submit" name="login-btn" value="Login" />&nbsp;&nbsp;<a href="sign_up.page.php">Sign-Up</a>
        </form>
    </div>
</body>
</html>