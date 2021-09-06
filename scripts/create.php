<?php
require_once '../config/connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$country = $_POST['country'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `first_name`, `last_name`, `country`) 
VALUES (NULL, '$first_name', '$last_name', '$country');");

header('Location: ../index.php');