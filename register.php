<?php
    include 'user.php';
    if(isset($_POST['submit'])){
        $name = $_POST['fullName'];
        $username = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confPass = $_POST['confPass'];
        if($name ==''||$username==''||$email==''||$password==''||$confPass==''){
            echo '<p> all fields are mendatory';
        }else if($password !== $confPass){
            echo '<p> password donot match';
        }else{
            array_push($user['name'],$name);
            array_push($user['username'],$username);
            array_push($user['email'],$email);
            array_push($user['password'],$password);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U11A-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <form class="registerForm" action="register.php" method="post">
        <h1>Registration</h1>
        <label for="fullName">Name</label> <input type="text" name="fullName" id="fullName">
        <br>
        <label for="userName">UserName</label> <input type="text" name="userName" id="userName">
        <br>
        <label for="email">Email</label> <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label> <input type="password" name="password" id="password">
        <br>
        <label for="confPass">Confirm password</label> <input type="password" name="confPass" id="confPass">
        <br>
        <button type="submit">Register</button>
        <p>already have an account? please login <a href="index.php">Here</a></p>

    </form>
   
</body>
</html>