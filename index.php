<?php
require_once 'connect.php';
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a class="button" href="/admin.php">Admin</a>
    <ul id="nav">
  <?php
    $query = "SELECT * FROM category"; 
    $res = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($res)): ?>
    <li><a href="#"><?php echo $row["category_name"] ?></a>
    <ul>
    <?php
    $query1 = "SELECT * FROM product WHERE category_id =".$row['id']; 
    $res1 = mysqli_query($link, $query1);
    while($row1 = mysqli_fetch_array($res1)): ?> 
    <li><a href="#"><?php echo $row1['product_name']; ?></a></li>
    <?php
    endwhile; ?>
    </ul>
    </li>  
    <?php 
    endwhile; ?>     
    
</ul>

</body>
</html>