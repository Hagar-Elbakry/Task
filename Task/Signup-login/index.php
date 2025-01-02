<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sign UP</h3>
    <form action="process/signup.php" method="post"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="E-Mail"><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <button>Sign UP</button>
    </form>


    <h3>Log IN</h3>
    <form action="process/login.php" method="post">
        <input type="email" name="email" placeholder="E-Mail"><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <button>Log IN</button>
    </form>
</body>
</html>
