<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <img src="image/login.png" alt="Login img">

            <form action="#" method="POST">
                <div class="form_input">
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="form_input">
                    <input type="text" name="password" id="password" placeholder="Password">
                </div>
            </form>
        </div>
    </body>
</html>

<?php
    $hostname = "127.0.0.1:3307" ;
    $username = "root";
    $password = "";
    $db='da2';

    $connection = new mysqli($hostname,$username,$password,$db);
    if($connection->connect_error){
        die("There was a error is connecting to the Database - da2");
    }

    if (isset($_POST['username'])) {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from loginform 
                    where username='".$usname."' AND  password='".$password."' 
                    limit 1";
        
        $result = $connection -> query($sql);
        if($resutls->num_rows>0){
            echo "You have Successfully Logged in";
            exit();
        }
        else{
            echo "You have Entered Incorrect Password";
            exit();
        }
    }
?>