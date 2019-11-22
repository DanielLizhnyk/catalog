<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <a class="button" href="/index.php">Back</a>
<?php
require_once 'connect.php';
require_once 'app/add/addProduct.php';
?>
<h2>Add new product</h2>
<form method="POST">
    <select name="category_id">
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
        <?php endforeach; ?>
    </select>
    
<p>Product:<br>
<input type="text" name="product" /></p>
    <input type="submit" value="Добавить">
</form>
</body>
</html>