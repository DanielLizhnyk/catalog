<?php
require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
    
   
$query = "SELECT * FROM category";
$categories_result = mysqli_query($link, $query) or die("Game over" . mysqli_error($link));
$categories = mysqli_fetch_all($categories_result, MYSQLI_ASSOC) or die("over" . mysqli_error($link));

header('Content-Type: application/json');
echo json_encode($categories);
?>
