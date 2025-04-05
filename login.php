<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="dashboard.php">
        <label for="username">Username:</label>
        <input type="text" name="Username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="Password" id="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
