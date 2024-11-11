<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "insert into `admin`(name, password) values('$name', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Welcome,".$name. "has Registered Successfully as Admin";
        //  echo 'Welcome, Admin ' . $name . ' you are Logged in ';
            header('location:admin_login.php');
    } else {
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <br><h1>Sign up Page ( For Admin )</h1><br>
        <form action="" method='post'>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="pass">Password :</label>
                <input type="password" id="pass" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Sign up</button>

            
        </form>
    </div>
</body>

</html>
