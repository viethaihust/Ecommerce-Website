<?php

@include 'config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_description = $_POST['product_description'];
   $product_sku = $_POST['product_sku'];
   $product_brand = $_POST['product_brand'];
   $product_category = $_POST['product_category'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = '../image/products/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_description)){
      $message[] = 'vui lòng nhập hết';
   }else{
      $insert = "INSERT INTO products(name, price, description, brand_id, category_id, sku) VALUES('$product_name', '$product_price', '$product_description', '$product_brand', '$product_category', '$product_sku');";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         $product_id = mysqli_insert_id($conn);
         $query = "INSERT INTO product_image(product_id, product_image) VALUES('$product_id', '$product_image');";
         $result = mysqli_query($conn,$query);
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'đã thêm sản phẩm';
      }else{
         $message[] = 'không thể thêm sản phẩm';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM product_brands WHERE brandId = $id");
   mysqli_query($conn, "DELETE FROM product_categories WHERE categoryId = $id");
   mysqli_query($conn, "DELETE FROM product_image WHERE product_id = $id");
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   $message[] = 'đã xóa sản phẩm';
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="icon" href="../image/cropped-logo-dark-32x32.png" sizes="32x32">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_page_product.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <a href="admin_page.php" class="btn" style="left: 2rem; position: fixed; width: 20rem">Trở lại</a>

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>thêm sản phẩm</h3>
         <input type="text" placeholder="nhập tên sản phẩm" name="product_name" class="box">
         <input type="number" placeholder="nhập giá sản phẩm" name="product_price" class="box">
         <input type="text" placeholder="nhập mô tả sản phẩm" name="product_description" class="box">
         <input type="text" placeholder="nhập sku sản phẩm" name="product_sku" class="box">
         <select name="product_brand" style="font-size: 2rem">
            <?php
               $query = "SELECT * FROM product_brands";
               $items = mysqli_query($conn,$query);
               foreach($items as $item){
            ?>
               <option value=<?php echo $item['brandId']?>><?php echo $item['brand_name'] ?></option>
            <?php
               }
            ?>
         </select>
         <select name="product_category" style="font-size: 2rem">
            <?php
               $query = "SELECT * FROM product_categories";
               $items = mysqli_query($conn,$query);
               foreach($items as $item){
            ?>
               <option value=<?php echo $item['categoryId']?>><?php echo $item['category_name'] ?></option>
            <?php
               }
            ?>
         </select>
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="thêm sản phẩm">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hành động</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <?php
               $productId = $row['id'];
               $row1 = mysqli_query($conn, "SELECT * FROM product_image WHERE product_id = $productId");
            ?>
            <td><img src="../image/products/<?php echo mysqli_fetch_assoc($row1)['product_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo number_format($row['price']) ?> đ</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Sửa </a>
               <a href="admin_page_product.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Xóa </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>