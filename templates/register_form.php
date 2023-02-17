<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = 'user';

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User đã tồn tại!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user(name, phone, address, email, password, user_type) VALUES('$name','$phone','$address','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
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
      <h3>Đăng ký</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="nhập tên của bạn">
      <input type="email" name="email" required placeholder="nhập email của bạn">
      <input type="phone" name="phone" required placeholder="nhập sđt của bạn">
      <input type="address" name="address" required placeholder="nhập địa chỉ của bạn">
      <input type="password" name="password" required placeholder="nhập mật khẩu của bạn">
      <input type="password" name="cpassword" required placeholder="xác nhận mật khẩu của bạn">
      <input type="submit" name="submit" value="Đăng ký" class="form-btn">
      <p>Đã có tài khoản <a href="login_form.php">Đăng nhập ngay</a></p>
   </form>

</div>

</body>
</html>