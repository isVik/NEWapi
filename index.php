<?php
require_once 'vendor/db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
            color: #fff;
            border-radius: 10px;
            border: 5px double #fff;
        }
        .buttonAdd:hover{
            background: #8d0000;
        }
    </style>
</head>
<body>
<table>
    <form method="post" action="vendor/add.php">
        <tr style="text-align: center; font-weight: bold; color: #fa0000 ">
            <td>info</td>
            <td>price</td>
            <td>about</td>
        </tr>
        <tr>
            <td><input type="text" name="info"></td>
            <td><input type="number" name="price" ></td>
            <td><textarea name="about"></textarea></td>
            <td><input class="buttonAdd" type="submit" value="+ + +"></td>
        </tr>
    </form>
</table>

<table>
    <tr>
        <td>ID</td>
        <td>Info</td>
        <td>Price</td>
        <td>about</td>
    </tr>
    <?php
    $queryAllData = "SELECT * FROM `info`"; // делаем выборку данных
    $allData = mysqli_query($db, $queryAllData); // выполняетсся запрос получаем данные
    $allData = mysqli_fetch_all($allData); // преобразовываем к данные с из mysql объекта=>  массиву
    foreach ($allData as $all) { // перебираем массив и рендерим html
        ?>
        <tr>
            <td><?= $all[0] ?></td>
            <td><?= $all[1] ?></td>
            <td><?= $all[2] ?> ₽</td>
            <td><?= $all[3] ?></td>
            <td><a style=" color: #font-size: 30px; color: darkgreen;text-decoration: none;" href="vendor/about.php?id=<?=$all[0]?>">abt</a></td>
            <td><a style=" color: #font-size: 30px; color: purple;text-decoration: none;" href="redact.php?id=<?=$all[0]?>">red</a></td>
            <td><a style=" color: #font-size: 30px; color: red;text-decoration: none;" href="vendor/del.php?id=<?=$all[0]?>">del</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>


