<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <form action="sessionconnection.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
        <button><a href="http://akash2.local/task-3/register.php">signup</a></button>
    </form>
</body>
</html>
