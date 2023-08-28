<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $connection = mysqli_connect(
        $config['db']['host'],
        $config['db']['username'],
        $config['db']['password'],
        $config['db']['dbname']
    );

    if ($connection == false)
    {
        echo 'Failed to connect to the database!<br>';
        echo mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        exit();
    }
?>