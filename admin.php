<?php
require_once 'connect.php';
require_once 'app/edit/edit.php';
require_once 'delete.php';
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glav</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</head>
<body>
    <a class="btn btn-primary" href="/addCategory.php">Add Category</a>
    <a class="btn btn-primary" href="/addProduct.php">Add Product</a>
    
    <div class="container">
    
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>
                    Category
                    </th>
                    <th>
                    Product
                    </th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
            $query = "SELECT * FROM product";
            $res = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($res)): ?>
            <tr>
                <td>
                <?php echo $row["category_id"] ?>
                </td>
                <td>
                <?php echo $row['product_name']; ?>
                </td>
                
                <td>
                    <a href="admin.php?edit=<?php echo $row1['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="delete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    
    
    <div class="row justify-content-center">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" class="form-control" value="<?php echo $category; ?>" placeholder="Enter your category">
            </div>
            <div class="form-group">
                <label>Product</label>
                <input type="text" name="product" class="form-control" value="<?php echo $product; ?>" placeholder="Enter your product">
            </div>
            <div class="form-group">
                <?php
                if($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update</button>
                <?php else: ?>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                <?php endif; ?>
                
            </div>
        </form>
    </div>
    </div>
</body>
</html>