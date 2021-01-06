<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if(!$connection){
            die("Database connection failed ");
            // will not execute anymore of code, and will give a user a error
        }

?>