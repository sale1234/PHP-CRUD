<?php
    include "db.php";
    include "functions.php";
    include "includes/header.php";

    createRows();


?>



    <div class="container">
        <!-- This is grid class -->
        <h1 class="text-center">Create</h1>
        <div class="col-xm-6">
            <form action="login_create.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                        <label for="password" >Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <input type="submit" name="submit" value="Create" class="btn btn-primary mt-2 form-control">

            </form>
        </div>
    </div>
<?php include "includes/footer.php";