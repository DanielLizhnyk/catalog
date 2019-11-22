<?php
if(isset($_POST['category'])){
 
    
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    
    $category = htmlentities(mysqli_real_escape_string($link, $_POST['category']));
   
    
    $query ="INSERT INTO category VALUES(NULL, '$category')";
     
    
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    
}
?>