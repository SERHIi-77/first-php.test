
<div class="container-fluid">
    <h2>Adding new post</h2>
</div>
<div class="container">
<form class="forms-sample" action="?page=add" method="POST">
         <div class="form-group row">
            <label for="exampleTextarea" class="col-sm-2 col-form-label">Please enter your text: </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleTextarea" rows="10" name="twit"></textarea>
                </div>
         </div>
        <button class="btn btn-primary mr-2">Save</button>
    </form>

<?php

if (!empty($_POST)) {
    $sql = "INSERT INTO posts (twit, user_id) VALUES ('" . $_POST['twit'] . "', '" . $userID . "');";
    //INSERT INTO `posts` (`id`, `twit`, `user_id`, `created`) VALUES (NULL, 'proba', '7', current_timestamp());
     if (mysqli_query($conn, $sql)) {
        echo "<h3>Stored</h3>";
        echo "<a class='btn btn-primary mr-2' href='/admin/posts.php'>Back</a>";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}
?>