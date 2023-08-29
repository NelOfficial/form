<? require_once '../incl/config/config.php' ?>

<div class="container">
    <div class="table-content">
        <table border="1">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Фамилия Имя</th>
                <th>Первый вопрос</th>
                <th>Второй вопрос</th>
                <th>Третий вопрос</th>
                <th>Четвёртый вопрос</th>
                <th>Пятый вопрос</th>
                <th>Файл</th>
            </tr>
            <tbody>
            <?php
            $result = mysqli_query($connection, "SELECT * FROM `form`");
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $username = $row['username'];
                $first_question = $row['first_question'];
                $second_question = $row['second_question'];
                $third_question = $row['third_question'];
                $fourth_question = $row['fourth_question'];
                $fifth_question = $row['fifth_question'];
                $file_path = $row['file_path'];
                
                $table = "<tr><td><a href=\"remove-item.php?id=$id\" title=\"Удалить\"><img src=\"../media/common/b_drop.png\"></a> <a href=\"edit-item.php?id=$id\" title=\"Редактировать\"><img src=\"../media/common/b_edit.png\"></a>"
                . "</td><td>" . '<xmp>' . $id . '</xmp>'
                . "</td><td>" . '<xmp>' . $username . '</xmp>'
                . "</td><td>" . '<xmp>' . $first_question . '</xmp>'
                . "</td><td>" . '<xmp>' . $second_question . '</xmp>'
                . "</td><td>" . '<xmp>' . $third_question . '</xmp>'
                . "</td><td>" . '<xmp>' . $fourth_question . '</xmp>'
                . "</td><td>" . '<xmp>' . $fifth_question . '</xmp>'
                . "</td><td>" . "<a href=\"../$file_path\">Файл</a>"
                . "</td></tr>";
            
                echo $table;
                }
            ?>
            </tbody>
        </table>
    </div>
</div>