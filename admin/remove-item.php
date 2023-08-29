<?php

require_once '../incl/config/config.php';

$id = $_GET["id"];

$result = mysqli_query($connection, "SELECT * FROM `form` WHERE `id` = " . $id);
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $file_path = $row['file_path'];
}

unlink($file_path);

$query_remove = mysqli_query($connection, "DELETE FROM `form` WHERE `id` = " . "$id");

header('Location: index.php');