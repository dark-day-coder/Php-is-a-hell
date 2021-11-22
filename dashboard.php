<?php
    include ("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="tailwind.css">
</head>
<body class="bg-gray-800">
    <div class="text-center text-white">
        <p> Hey mr. <?php echo $_SESSION['username']; ?>!</p>
        <p>You're on the dashboard of my demo task</p>
        <p>If you are not interested staying here you can simply <span class=" text-3xl bg-black text-gray-500 underline"><a href="logout.php">Log Out</a></span></p>
    </div>
    <div class="bg-green text-center text-gray-100  ">
        <p><span class="text-4xl">OR</span> you want to register new user ?? <span><a href="register.php">yes</a></span> </p>

    </div>
</body>
</html>