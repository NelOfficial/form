<?php

require_once '../incl/config/config.php';

$username = $_POST['name_and_surname'];
$first_question = $_POST['first_question'];
$second_question = $_POST['second_question'];
$third_question = $_POST['third_question'];
$fourth_question = $_POST['fourth_question'];
$fifth_question = $_POST['fifth_question'];

$first_question_text = "";
$second_question_text = $second_question;
$third_question_text = $third_question;
$fourth_question_text = "";
$fifth_question_text = $fifth_question;

foreach ($first_question as $question) {
    $first_question_text .= $question .';';
}

foreach ($fourth_question as $question) {
    $fourth_question_text .= $question . ';';
}

$file_path = '../media/uploads/' . random_int(0, 9999) . '_' . $_FILES['file_answer']['name'];

if (move_uploaded_file($_FILES['file_answer']['tmp_name'], $file_path)){
    echo '<div style="width: 100%; height: 50px; background: green; color: white; text-align: center;">Файл успешно загружен</div>';
} else {
    echo '<div style="width: 100%; height: 50px; background: indianred; color: white; text-align: center;">Ошибка загрузки файла</div>';
}

$query = mysqli_query($connection, "INSERT INTO `form`
(`username`, `first_question`, `second_question`, `third_question`, `fourth_question`, `fifth_question`, `file_path`) VALUES
('$username', '$first_question_text', '$second_question_text', '$third_question_text', '$fourth_question_text', '$fifth_question_text', '$file_path')");

echo "Отправлено! <a href=\"../\">Назад</a>";