<?php
include_once 'db1.php';

?>

<!doctype HTML>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="signup.php" method="post">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <input type="text" name="user" placeholder="username">
        <br>
        <input type="password" name="pw" placeholder="password">
        <br><br>
        <button type="submit" name="submit">SIGN UP!</button>
    </form>


</body>
</html>