<?php
require_once 'db.php';

$aboutId = $_GET['id'];
$about = mysqli_query($db, "SELECT * FROM `info` WHERE `id` = '$aboutId'");
$about = mysqli_fetch_assoc($about);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            background: url("https://phonoteka.org/uploads/posts/2021-12/1640054824_1-phonoteka-org-p-chernii-fon-dlya-saita-besshovnii-krasivo-1.jpg") center center no-repeat ;
            color: #8d0000;
            font-family: "Yu Gothic UI Light";
        }
        .buttonHome {
            position: absolute;
            margin: 400px 0 0 500px;
            text-decoration: none;
            color: #8d0000;
            border: 1px solid #8d0000;
            padding: 20px;
            font-size: 50px;
        }
        .buttonHome:hover {
            background: #8d0000;
            color: #fff;
        }


    </style>
</head>
<body>
<table>
    <tr>
        <td><h1>Info: <?= $about['info'] ?></h1>
        <td>
    <tr>
    <tr>
        <td><h2>Price: <?= $about['price'] ?> ₽</h2>
        <td>
    <tr>
    <tr>
        <td><h3>About: <?= $about['about'] ?></h3>
        <td>
    <tr>

        <a href="../index.php" class="buttonHome">Home</a>
</table>
</body>
</html>

