<?php
    
            
       
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        
        if(!$connection){
            die("Database connection failed ");
        }else{
            // echo 'We are connected';
            // will not execute anymore of code, and will give a user a error
        }
        // * - znaci all
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);
        
        if(!$result){
            // die == return
            die('Query failed' .mysqli_error($connection));
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
        
            <?php
                while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <pre>
                        <?php
                            print_r($row);
                        ?>
                    </pre>

                    <?php
                }
            ?>

        </div>


    </div>
</body>
</html>