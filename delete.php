<?php
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

$query = "SELECT * FROM product";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM product WHERE category_id=$id") or die($mysqli->error());
    
    
    header("location: admin.php");
}
?>
