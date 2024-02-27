<?php
include 'connect.php';

//checks if the form is submitted
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    // Retrieve the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Construct the sql query for data insetion
    $sql = "select * from `users` where name='$name' and email='$email' and mobile='$mobile' and password='$password'";

    // Execute the SQL query
    $result = mysqli_query($con, $sql); //to execute sql query $result is created & this method(mysqli_query) will allow us to execute this query

    //check if the query was sucessfull
    if ($result) {
        $num = mysqli_num_rows($result);
        if($num==1){
            session_start();
            $_SESSION['username']=$username;
            header('location:for_user_display.php');
            // echo 'Welcome ' . $name . ' you are Logged in ';
        }
     else {
        echo 'incorrect username or password';
        
    }
}
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operations</title>
</head>

<body>
    <div class="container my-5">
        <form action="" method="POST">
        <h3>Login Page (for Users)</h3>
            <div class="form-group">
                <label for="">Name :</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Mobile :</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Password :</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>