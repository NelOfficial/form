<?php require_once '../incl/config/config.php' ?>

<div class="container">
<?
    $result = mysqli_query($connection, "SELECT * FROM `form` WHERE `id` = " . $_GET["id"]);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $username = $row['username'];
        $first_question = $row['first_question'];
        $second_question = $row['second_question'];
        $third_question = $row['third_question'];
        $fourth_question = $row['fourth_question'];
        $fifth_question = $row['fifth_question'];
        $file_path = $row['file_path'];
    }
?>

    <p>Редактирование</p>
    <form action="edit_product.php" method="post" class="wrapper-form" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        
        <label for="">Фамилия Имя:</label>
        <input type="text" name="username" id="" value="<?=$username?>">

        <label for="">Первый вопрос:</label>
        <input type="text" name="first_question" id="" value="<?=$first_question?>">
        
        <label for="">Второй вопрос:</label>
        <input type="text" name="second_question" id="" value="<?=$second_question?>">

        <label for="">Третий вопрос:</label>
        <input type="text" name="third_question" id="" value="<?=$third_question?>">

        <label for="">Четвёртый вопрос:</label>
        <input type="text" name="fourth_question" id="" value="<?=$fourth_question?>">

        <label for="">Пятый вопрос:</label>
        <input type="text" name="fifth_question" id="" value="<?=$fifth_question?>">

        <label for="">Файл:</label>
        <a href="$file_path">Файл</a>

        <input type="submit" value="Изменить">
    </form>
</div>