<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Locale</h2>
    <form method="post" action="process_login.php">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>

    <h2>Login con Google</h2>
    <a href="google_login.php">Login with Google</a>

    <h2>Login con Facebook</h2>
    <a href="facebook_login.php">Login with Facebook</a>
</body>
</html>
