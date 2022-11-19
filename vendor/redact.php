<?php
 require_once 'db.php';

$id = $_POST["id"];
$info = $_POST['info'];
$price = $_POST['price'];
$about = $_POST['about'];

mysqli_query($db, "UPDATE `info` SET `info` = '$info', `price` = '$price', `about` = '$about' WHERE `info`.`id` = '$id'"); // запрос

header('Location: ../index.php');


