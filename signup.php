<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['sex'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($email) && !is_numeric($email))
    {
        $query = "insert into form (fname, lname, sex, email, pass) values ('$firstname', '$lastname', '$Gender', '$email', '$password')";

        mysqli_query($con, $query);

        echo "<script type ='text/javascript'> alert('Succesfully Register')</script>";
    }
    else{
        echo "<script type ='text/javascript'> alert('Please enter some valid Information')</script>";
    }


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last name</label>
            <input type="text" name="lname" required>  
            <label>Gender</label>
            <input type="text" name="sex" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign up button you agree to our<br>
            <a href="t&m.php">Terms and Condition</a> 
        </p>
        <p>Already have an account?<a href="loginpage.php">Login</a></p>
    </div>
</body>
</html>
