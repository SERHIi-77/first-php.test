<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
?>
<!-- Add your site or application content here -->

<?php
$is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null; // true/false
$is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null; //true/false

// проверяем сесия или куки
    if ($is_session || $is_cookie){
        // тернарный оператор если <true> ? то равно <value> : иначе <value>
        $userID = $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id']; 
        $sql = "SELECT * FROM users WHERE id=" . $userID;
        $result = mysqli_query($conn, $sql);
        $user = $result->fetch_assoc();
?>

    <h2> Hello <?php echo $user['username'] ?> !</h2>
    <!-- <a href="logout.php">Logout</a> -->

<?php
    } else {
?>

    <h2>Hello!</h2>

<?php
    }
?>

<?php
    require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>