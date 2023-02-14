<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
?>
<!-- Add your site or application content here -->

<?php
if (isAuth()){
    $user = getCurrentUser();
?>

    <h2> Hello, <?php echo $user['username'] ?></h2>  
            
<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/twit.php');
require($_SERVER['DOCUMENT_ROOT'].'/partials/all-twits.php');    

} else {
?>

    <h2>Hello!</h2>

<?php
    }
?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>