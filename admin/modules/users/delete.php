<?php
require($_SERVER['DOCUMENT_ROOT']."/configs/db.php");

if (!empty($_GET)) {

    // echo $_GET['id'];

    $sql ="DELETE FROM users WHERE `users`.`id` = " . $_GET['id'];

    if (mysqli_query($conn, $sql)) {
        echo "Deleted user";
        mysqli_close($conn);
        header('Location: /admin/users.php');
		// echo "<script> document.location.href='/'; </script>";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}

?>