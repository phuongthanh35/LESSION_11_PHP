<?php
    require_once 'pdo.php';
    $data = ['name' => $_POST['name']];
    createNewData($data);
    header("Location: http://localhost/buoi_11_php/category/index.php");
?> 