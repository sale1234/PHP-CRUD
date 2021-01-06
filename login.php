<?php
    if(isset($_POST['submit'])){
        // $username = htmlentities($_POST['username']);
        // $password = htmlentities($_POST['password']);

        // if($username && $password){
        //     echo "Welcome" .$username;

        // }
        
        $connection = mysqli_connect('localhost','root','','loginapp');
        
        if($connection){
            echo 'We are connected';
        }else{
            // will not execute anymore of code, and will give a user a error
            die("Database connection failed ");
        }



    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- This is grid class -->
        <div class="col-xm-6">
            <form action="login.php" method="POST">
                <div action="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div action="form-group">
                        <label for="password" >Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2 form-control">

            </form>
        </div>


    </div>
</body>
</html>