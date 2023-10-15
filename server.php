<?php
error_reporting(0);
$conn = mysqli_connect('db', 'user', 'test', "dockerExample");


$query = 'SELECT * From Person';
$result = mysqli_query($conn, $query);
