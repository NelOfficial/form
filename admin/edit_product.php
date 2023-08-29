<?
    require_once '../incl/config/config.php';

    $id = $_POST['id'];
    $username = $_POST["username"];
    $first_question = $_POST["first_question"];
    $second_question = $_POST["second_question"];
    $third_question = $_POST["third_question"];
    $fourth_question = $_POST["fourth_question"];
    $fifth_question = $_POST["fifth_question"];

    $query = mysqli_query($connection, "UPDATE `form` SET `username` = '$username' WHERE `id` = $id");
    $first_question_query = mysqli_query($connection, "UPDATE `form` SET `first_question` = '$first_question' WHERE `id` = $id");
    $second_question_query = mysqli_query($connection, "UPDATE `form` SET `second_question` = '$second_question' WHERE `id` = $id");
    $third_question_query = mysqli_query($connection, "UPDATE `form` SET `third_question` = '$third_question' WHERE `id` = $id");
    $fourth_question_query = mysqli_query($connection, "UPDATE `form` SET `fourth_question` = '$fourth_question' WHERE `id` = $id");
    $fifth_question_query = mysqli_query($connection, "UPDATE `form` SET `fifth_question` = '$fifth_question' WHERE `id` = $id");

    header("Location: index.php");