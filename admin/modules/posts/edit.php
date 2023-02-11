<?php

// делаем запрос для вывода информации о редактируемом 
$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

$sql_u = "SELECT * FROM users WHERE id=" . $row['user_id'];
$result_u = $conn->query($sql_u);
$user_u = $result_u->fetch_assoc();



?>
<div class="container-fluid">
    <h2>Editing a post in the database</h2>
    <br>
</div>

<div class="container">
    <form class="forms-sample" action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
            <h4>Post made by <p class = "text-capitalize font-weight-bold display-4"><?php echo $user_u['username'];;?></p> date of creation <?php echo $row['created'];?></h4>
        </div>
         <div class="form-group row">
            <label for="exampleTextarea" class="col-sm-1 col-form-label">Content: </label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="exampleTextarea" rows="10" name="twit"><?php echo $row['twit'];?></textarea>
                </div>
         </div>
        <button class="btn btn-primary mr-2">Save</button>
    </form>
<?php
    if (!empty($_POST)) {
        $sql = "UPDATE posts SET twit = '" . $_POST['twit'] . "' WHERE id = " . $_GET['id'] . ";";
        //$sql = "UPDATE posts SET twit = '" . $_POST['twit'] . "', user_id ='" . $userID . "' WHERE id = " . $_GET['id'] . ";";
        //UPDATE `posts` SET `twit` = '...' WHERE `posts`.`id` = 4;
        if (mysqli_query($conn, $sql)) {
            echo "<h4>Stored</h4>";
            echo "<a class='btn btn-primary mr-2' href='/admin/posts.php'>Back</a>";
        } else {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
</div>

