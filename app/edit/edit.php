<?php
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 

$query = "SELECT * FROM category";
$categories_result = mysqli_query($link, $query) or die("Game over" . mysqli_error($link));
$categories = mysqli_fetch_all($categories_result, MYSQLI_ASSOC) or die("over" . mysqli_error($link));


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM product WHERE category_id=$categories") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $category = $row['category_id'];
        $product = $row['product'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $category = $_POST['category_id'];
    $product = $_POST['product'];
    
    $mysqli->query("UPDATE product SET category='$category', product='$product' WHERE id='$id") or die($mysqli->error());
    
    $_SESSION['message'] = 'Update';
    $_SESSION['msg_type'] = 'Warning';
    
    header('location: admin.php');
}
?>