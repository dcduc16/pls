<?php
error_reporting(0);
$conn = mysqli_connect('db', 'user', 'test', "dockerExample");


$query = 'SELECT table_schema, table_name FROM information_schema.tables';
$result = mysqli_query($conn, $query);

while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
    foreach ($value as $element) {
        echo $element . '  |  ';
    }
}

$result->close();

mysqli_close($conn);
