<?php
require("db.php");

// процедурный подход
for ($i = 31; $i <= 40; $i++) {
    $newUser = "User" . "$i";
    $newMail = "mail" . "$i" . "@mail.com";
    $sql = "INSERT INTO `users` (`username`, `email`) VALUES ('$newUser', '$newMail')";
    // INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES (NULL, 'asd', 'aadd', '', '');
    if (mysqli_query($conn, $sql)) {
        echo "Stored." . "<br>";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
echo "<script> document.location.href='/'; </script>";
?>