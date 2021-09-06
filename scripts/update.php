<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$country = $_POST['country'];

mysqli_query($connect, "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `country` = '$country' WHERE `users`.`id` = '$id'");

header('Location: ../index.php');