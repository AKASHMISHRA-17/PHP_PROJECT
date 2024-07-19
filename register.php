<?php
require 'connection.php';
if(isset($_POST["registerbtn"]))
{
    $fname=$_POST["fd"];
    $lstname=$_POST["ld"];
    $email=$_POST["ud"];
    $password=$_POST["pd"];
    $sql = "INSERT INTO loginpage (first_name,last_name,username,password)VALUES ('$fname', '$lstname', '$email','$password')";
    if (mysqli_query($conn, $sql))
     {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>user Sign Up Page</h1>
    <form method="post" autocomplete="off">
        FirstName:
        <input type="text"name="fd">
        <br>
        <br>
        LastName:
        <input type="text"name="ld">
        <br>
        <br>
        username:
        <input type="text" name="ud">
        <br>
        <br>
        Password:
        <input type="text"name="pd">
        <br>
        <br>
        <input type="submit"name="registerbtn"value="Register">
</form>

</body>
</html>
