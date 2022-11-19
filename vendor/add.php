<?php

require_once 'db.php';

$info = $_POST['info'];
$price = $_POST['price'];
$about = $_POST['about'];

mysqli_query($db,"INSERT INTO `info` (`id`, `info`, `price`, `about`) VALUES (NULL, '$info', '$price', '$about')");

header('Location: ../index.php');



