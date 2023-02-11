<?php

// делаем запрос для вывода информации о редактируемом пользователе в value
$sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>
<div class="container-fluid">
    <h2>Editing a record in the database</h2>
</div>

<div class="container">
    <form class="forms-sample" action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group row">
            <label for="exampleInputUsername1" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" value="<?php echo $row['username']; ?>">
                </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                </div>
        </div>    
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                </div>
                
        </div>
        <div class="form-group row">
            <label for="exampleTextarea1" class="col-sm-2 col-form-label">Role: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="role" value="<?php echo $row['role']; ?>">
                </div>
                
        </div>
        <div class="form-group row">
            <label for="exampleTextarea1" class="col-sm-2 col-form-label">Phone: </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                </div>
                
        </div>
        <button class="btn btn-primary mr-2">Save</button>
    </form>
<?php
    if (!empty($_POST)) {
        $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "', `password` = '" . $_POST['password'] . "', `role` = '" . $_POST['role'] . "', `phone` = '" . $_POST['phone'] . "' WHERE `id` = " . $_GET['id'] . ";";
        // UPDATE `users` SET `username` = 'I', `email` = 'i@i.ua', `password` = 'i', `role` = 'user', `phone` = '+38' WHERE `users`.`id` = 5;
        if (mysqli_query($conn, $sql)) {
            echo "<h4>Stored</h4>";
            echo "<a class='btn btn-primary mr-2' href='/admin/users.php'>Back</a>";
        } else {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
</div>

