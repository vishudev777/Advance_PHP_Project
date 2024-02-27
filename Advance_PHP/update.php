<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `users` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

//checks if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve from the form to =>variables(Posting the data)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Constructing the sql query for data insetion
    $sql = "update `users` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";

    // Execute the SQL query
    $result = mysqli_query($con, $sql); //to execute sql query $result is created & this method(mysqli_query) will allow us to execute this query

    //check if the query was sucessfull
    if ($result) {
        //  echo "Data Updated sucessfully";
       header('location:display.php');
    } else {
        die(mysqli_error($con));
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
        <form method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name?> >
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email?>>
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile?>>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password?>>
            </div>

      
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value="1234">
            </div>
       
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>