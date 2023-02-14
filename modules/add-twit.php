<?php
// connecting DB
require($_SERVER['DOCUMENT_ROOT'].'/configs/db.php');
//var_dump($_POST);
$user_id = $_POST['user_id'];
$text = $_POST['twit'];
$imageName = '';

// проверка наличия прикрепленнного файла
if(!empty($_FILES) && $_FILES['image']['error'] != 4) {
    // определяем путь для сохранения картинок
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/uploads/';
    // определяем расширение файла картинки
    $ext = pathinfo($_FILES['image']['name']);
    // конструируем имя файла случайный набор символов + текущее время (сек) . расширение
    $imageName = generateRandomString() . time() . "." . $ext['extension'];
    // путь + имя файла
    $uploadfile = $uploaddir . $imageName;

// проверка успешной загрузки файла картинки
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Возможная атака с помощью файловой загрузки!\n";
        die();
    }

}

$sql = "INSERT INTO posts (twit, user_id, image) VALUES ('" . $text . "', '" . $user_id . "', '" . $imageName . "' )";
if (mysqli_query($conn, $sql)) {

    $html = '<li class="list-group-item">';
    $html .= $text;
    if($imageName != '') {
        $html .= '<div class="d-flex justify-content-end">
        <img class="img-fluid img-rounded float-right" width="100" src="/uploads/'.$imageName.'">
        </div>';
    }
    $html .= "</li>";
    echo $html;

} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

// генерация рандомной строки для создания уникального имени файла
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>