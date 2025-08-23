<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../CSS/loginstyle.css">
</head>

<body>
    
    <div class="login-container">
        <table>
            <form action="login.php" method="post">
                <tr>
                    <td>
                        <label for="username">Username:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" required>
                    </td>
                <tr>
                    <td>
                        <label for="password">Password:</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" required>
                    </td>
                </tr>


                <tr>
                    <td>
                        <button type="submit">Log In</button>
                    </td>
                </tr>
                </td>
            </form>
            <tr>
                <td>
                    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                </td>
            </tr>
            </td>
        </table>
    </div>
</body>

</html>