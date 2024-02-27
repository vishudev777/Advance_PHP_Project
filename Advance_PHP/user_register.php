<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `users`(name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted Successfully";
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
        <br><h1>Sign up Page ( For User )</h1><br>
        <form action="" method='post'>
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="">Mobile :</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
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