<?php
    include 'user.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $user['name'];

        if($username == '' || $password == ''){
            echo '<p> All the fields are mendatory </p>';
        }else{
            if(($username !== $user['name'] || $username !== $user['email']) && ($password !== $user['password'])){
                echo '<p> either the provided user id or password is wrong!';
            } 
            // else {
            //     header('location:dashboard.php');
            // }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>PhoneBook</title>
</head>
<body>
    <form class="loginForm" method="POST" action="index.php">
        <h1>
            Login
        </h1>
        <label for="username">UserName: </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Login</button>
        <p>not a member yet? Register <a href="register.php" id="register">Here</a></p>
        <?php
        // include 'user.php';
        // echo $user['name'];
        ?> 
    </form>
</body>
</html>