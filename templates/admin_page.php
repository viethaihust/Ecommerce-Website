<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="icon" href="../image/cropped-logo-dark-32x32.png" sizes="32x32">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/login.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Xin chào <span>admin</span></h3>
      <h1><span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <?php
         $query = "SELECT * FROM viewcount WHERE id = 1;";
         $result = mysqli_query($conn, $query);
         $row = mysqli_fetch_array($result);
      ?>
      <h1><span>Số lượng view của website là: <?php echo $row['count'] ?></span></h1>
      <a href="admin_page_product.php" class="btn">List sản phẩm</a>
      <a href="admin_page_user.php" class="btn">List khách hàng</a>
      <a href="logout.php" class="btn">Thoát</a>
   </div>

</div>

</body>
</html>