<?php include "db.php"; ?>
<?php


function createRows(){
    global $connection;
    if(isset($_POST['submit'])){
        
        // CRUD
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
        

            
            
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username','$password')";

        $result = mysqli_query($connection, $query);
        
        if(!$result){
            // die == return
            die('Query failed' .mysqli_error($connection));
        }
        
        

    }


}


function showAllData(){
    //nista ne ulazi u funkciju osim ako ti ne stavis, iako si inkludovao
    global $connection;
    // * - znaci all
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        // die == return
        die('Query failed' .mysqli_error($connection));
    }



    while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        echo "<option value='$id'>$id $username $password</option>";
    }
}


function updateTable(){
    //nista ne ulazi u funkciju osim ako ti ne stavis, iako si inkludovao
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result =  mysqli_query($connection,$query);

    if(!$result){
        die('Query failed' .mysqli_error($connection));
    }


}

function deleteRows(){
    //nista ne ulazi u funkciju osim ako ti ne stavis, iako si inkludovao
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result =  mysqli_query($connection,$query);

    if(!$result){
        die('Query failed' .mysqli_error($connection));
    }


}


