<?php

@include 'config.php';

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

$select = mysqli_query($conn, "SELECT * FROM user");
?>

<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Avatar</th>
         <th>Name</th>
         <th>Phone</th>
         <th>Email</th>
         <th>Address</th>
         <th>User Type</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="../image/userpics/<?php echo $row['avatar']; ?>" height="100" alt=""></td>
         <td><?php echo $row['user_name']; ?></td>
         <td><?php echo $row['phone']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['address']; ?></td>
         <td><?php echo $row['user_type']; ?></td>
      </tr>
   <?php } ?>
   </table>
</div>
