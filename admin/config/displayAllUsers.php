<?php

// ОО - подход   
    $sqlRead = "SELECT * FROM `users`";
    if ($result = $conn->query($sqlRead)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        ?>
        
        <p>Получено объектов: <?php echo $rowsCount ?></p>
        <table class="table_dark">
            <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Почта</th>
                <th>Пароль</th>
                <th>Телефон</th>
                <th>права</th>
                <th>Option</th>
            </tr>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["password"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["role"] ?></td>

                <td>
                <a href="/admin/edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
                <button class="btnDelete" data-id="<?php echo $row['id']; ?>">Delete</button>
                </td>
            </tr>
        <?php } ?>
        </table>
        
        <?php
        $result->free();
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
