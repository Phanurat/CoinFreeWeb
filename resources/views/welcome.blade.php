<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <input type="password" id="password" name="password" placeholder="Password"><br><br>
            <button type="submit">Login</button>
        </form>
        <br>
        <!-- ปุ่มล็อกอินผ่าน Facebook -->
        <a href="#" target="_blank">
            <button class="facebook">Login with Facebook</button>
        </a>
        <!-- ปุ่มล็อกอินผ่าน Google -->
        <a href="#" target="_blank">
            <button class="google">Login with Google</button>
        </a>
    </div>
</body>
</html>
