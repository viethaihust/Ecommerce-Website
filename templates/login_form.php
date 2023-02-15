<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_avatar'] = $row['avatar'];
         header('location:index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elextra - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
    <link rel="icon" href="../image/cropped-logo-dark-32x32.png"
        sizes="32x32">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Đăng nhập</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="Đăng nhập" class="form-btn">
      <p>Chưa có tài khoản <a href="register_form.php">Đăng ký ngay</a></p>
   </form>

</div>

</body>
</html>