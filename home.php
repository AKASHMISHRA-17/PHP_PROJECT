<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['first_name']; echo $_SESSION['last_name'];?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
