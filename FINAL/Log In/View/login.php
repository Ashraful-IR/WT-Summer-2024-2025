<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <h1>Log In</h1>
    <div class="login-container">
        <table>
            <form action="login.php" method="post">
                <tr>
                    <td>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Log In</button>
                    </td>
                </tr>
            </form>
            <tr>
                <td>
                    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>