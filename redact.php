<?php
require_once 'vendor/db.php';

$redactId = $_GET['id']; // получаем айтишник из адресной строки
$redact = mysqli_query($db, "SELECT * FROM `info` WHERE `id` = '$redactId'"); // делаем выборку строки с полученым выше id
$redact = mysqli_fetch_assoc($redact); // Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>red</title>
    <style>
        body {
            background: url("https://phonoteka.org/uploads/posts/2021-12/1640054824_1-phonoteka-org-p-chernii-fon-dlya-saita-besshovnii-krasivo-1.jpg") center center no-repeat ;
        }
        table {
            background: rgba(154, 205, 50, 0.86);
            border: ;
            padding: 0.5em 0.5em 0.5em;
            box-shadow: red 0.5em 0.5em 0.5em;

        }
        td {
            background: #aedcae;
            padding: 0.5em;
            border: 1px solid red;
        }
        input,textarea{
            background: red;
            font-size: 25px;
            color: #fff;
            border-radius: 10px;
            border: 5px double #fff;
        }
        button:hover{
            background: #8d0000;
        }



    </style>
</head>
<body>

<table>
    <form action="vendor/redact.php" method="post">
        <input type="hidden" name="id" value="<?= $redact['id'] ?>">
        <tr>
            <td><input type="text" name="info" value="<?= $redact['info'] ?>">
            </td>
        </tr>
        <tr>
            <td><input type="number" name="price" value="<?= $redact['price'] ?>">
            </td>
        </tr>
        <tr>
            <td><textarea name="about" cols="50" rows="5"><?= $redact['about'] ?></textarea>

            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">сохранить изменения</button>

            </td>
        </tr>
    </form>
</table>
</body>
</html>





