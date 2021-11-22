<?php
    require("db-connection.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if($username == '' || $password == ''){
            echo '<p class = "errorMsg"> All the fields are mendatory </p>';
        }else{
            $query = "SELECT * FROM `users` WHERE username='$username'
            AND password='" . md5($password) . "'";
            $result = mysqli_query($conn, $query);
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                session_start();
                $_SESSION['username'] = $username;  
            } 
            header("Location:dashboard.php");
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
    </form>
</body>
</html>