<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'crud');

if (!$connect) {
	die('Failed to connect to database!');
}