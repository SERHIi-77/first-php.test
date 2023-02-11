
<div class="container-fluid">
    <h2>Adding a user account</h2>
</div>
<div class="container">
    <form class="forms-sample" action="?page=add" method="POST">
        <div class="form-group row">
            <label for="exampleInputUsername1" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="name">
                </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email">
                </div>
        </div>    
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="password">
                </div>
        </div>
        <button class="btn btn-primary mr-2">Save</button>
    </form>

<?php

if (!empty($_POST)) {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
    //INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phone`) VALUES (NULL, '', '', '', '', '');
     if (mysqli_query($conn, $sql)) {
        echo "<h3>Stored</h3>";
        echo "<a class='btn btn-primary mr-2' href='/admin/users.php'>Back</a>";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}
?>