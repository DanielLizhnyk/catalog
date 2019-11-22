<?php
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
    
   
$query = "SELECT * FROM category";
$categories_result = mysqli_query($link, $query) or die("Game over" . mysqli_error($link));
$categories = mysqli_fetch_all($categories_result, MYSQLI_ASSOC) or die("over" . mysqli_error($link));

var_dump(json_encode($categories));
     
if(isset($_POST['product'])){
    
    $product = filter_var($_POST['product'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category_id'], FILTER_VALIDATE_INT);
    
    $query ="INSERT INTO product VALUES(NULL, '$product', '$category_id')";
    
     
    
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    
}
?>