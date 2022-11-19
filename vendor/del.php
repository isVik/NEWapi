<?php

require_once 'db.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE FROM `info` WHERE `id` = '$id'");

header('Location: ../index.php');
