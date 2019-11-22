<?php
require_once 'connect.php';
require_once'app/add/addCategory.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <a class="button" href="/index.php">Back</a>

<h2>Add new category</h2>
<form method="POST">
<p>Category:<br>
<input type="text" name="category" /></p>
    <input type="submit" value="Добавить">
</form>
</body>
</html>