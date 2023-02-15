<?php
ob_start();
include('../functions.php');

@include 'config.php';
session_start();
?>
<!Doctype html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Elextra - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
<link rel="icon" href="https://klbtheme.com/machic/wp-content/uploads/2021/08/cropped-logo-dark-32x32.png"
	sizes="32x32">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<link href = "../bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href = "../css/misc.css" rel="stylesheet">

<link rel="stylesheet" href="../css/Homepage/main.css" />
<link rel="stylesheet" href="../css/Homepage/header.css" />
<link rel="stylesheet" href="../css/Homepage/footer.css" />

</head>
<body>
	<div class="account-site">

	<?php
        include_once('../include/site-header.php');
	?>

		<div class="b1">
			<div class="hyper_link"><a href="">Trang chủ</a> > Tài khoản của tôi</div>
			<div class="container account">
		<div class="row">
		
		<div class="col-3" >
			<div class="row" >
				<div class="col-2"><img style="width:30px; height:30px;margin:8px;" src="https://klbtheme.com/machic/wp-content/uploads/2021/09/single-1.jpg"></div>
				<div class="col">Tài khoản của <br><strong><?php echo $_SESSION['user_name'] ?></strong></div>
			</div>
		
				<form action="My account.html" class="button_Type_Present">
				<button class="button_Type_Side"><span class="iconify icon" data-icon="carbon:user-filled"></span> <a style="font-size:14px;margin:0px 0px 0px 10px;">Tài khoản của tôi</a></button>
				</form>
			
				<form action="My notifications.html">
				<button class="button_Type_Side"><span class="iconify icon" data-icon="carbon:notification-filled"></span> <a style="font-size:14px;margin:0px 0px 0px 10px;" > Thông báo của tôi</a></button>
				</form>
			
				
				<form action="My order.html">
				<button class="button_Type_Side"><span class="iconify" data-icon="clarity:shopping-cart-solid"></span> <a style="font-size:14px;margin:0px 0px 0px 10px;" > Quản lý đơn hàng</a></button>
				</form>
			
				<form action="My Favorite.html">
				<button class="button_Type_Side"><span class="iconify icon" data-icon="bi:suit-heart-fill"></span> <a style="font-size:14px;margin:0px 0px 0px 10px;" > Sản phẩm yêu thích</a></button>
				</form>
				
			
				<form action="My Wishlist.html">
				<button class="button_Type_Side"><span class="iconify icon" data-icon="bi:tag-fill"></span> <a style="font-size:14px;margin:0px 0px 0px 10px;" > Sản phẩm mua sau</a></button>
				</form>
			
		</div>
	
		<div class="col col-right-side">	<form action="">
		    <div class="row b2"><h3>Thông tin tài khoản</h3></div>
			<div class="row b2">
				
				<div class="col-6">
					<h4>Thông tin cá nhân</h4>				
					
						<div class="row">
							<div class="col-3 account_Text_Input_Label">Tên</div>
							<div class="col">
								<input class="account_Text_Input" type="" id="LName" name="LName" value="<?php echo $_SESSION['user_name'] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-3 account_Text_Input_Label">Ngày sinh</div>
							<div class="col">
								<input class="account_Text_Input2" type="date" id="birth" name="birth"  value="2001-01-01">
							</div>
						</div>
						<div class="row">
							<div class="col-3 account_Text_Input_Label">Giới tính</div>
							<div class="col account_Text_Input2">
								<input class="" type="radio" id="account_Male" name="account_Sex" value="">
								<label>Nam</label>
								<input class="" type="radio" id="account_Female" name="account_Sex" value="">
								<label>Nữ</label>
								<input class="" type="radio" id="account_Els" name="account_Sex" value="">
								<label>Khác</label>
							</div>
						</div>
						<div class="row">
							<div class="col-3 account_Text_Input_Label">Quốc tịch</div>
							<div class="col">
								<input class="account_Text_Input" type="" id="nation" name="nation" value="Viet Nam">
							</div>
						</div>
						<div class="row">
							<div class="col-3 account_Text_Input_Label"></div>
							<div class="col">
								<input class="account_Submit_Button" type="submit" id="" name="" value="Lưu thay đổi">
							</div>
						</div></form>
				</div>									
			
				<div class="col account_EP_Input"><div class="row "><h4>Số điện thoại và Email</h4></div>
					<div class="row ">
						<div class="col-1"></div>
						<div class="col-7">
							<div>Số điện thoại</div>
							<div>12345678901</div>
						</div>
						<div class="col-3">
						<form action="account_Phone_Change.html">
							<input class="account_Submit_Button2" type="submit" id="" name="" value="Cập nhật">
						</form>
						</div>
					</div>
					<div class="row ">
						<div class="col-1"></div>
						<div class="col-7">
							<div>Email</div>
							<div>12345678901</div>
						</div>
						<div class="col-3">
						<form action="../templates/account_Email_Change.html">
							<input class="account_Submit_Button2" type="submit" id="" name="" value="Cập nhật">
						</form>
						</div>
					</div>
					<div class="row "><h4>Bảo mật</h4></div>
					
					
					<div class="row account_EP_Input">
						<div class="col-1"></div>
						<div class="col-7">
							<div>Đổi mật khẩu</div>
						</div>
						<div class="col-3">
						<form action="../templates/account_Password_Change.html">
							<input class="account_Submit_Button2" type="submit" id="" name="" value="Cập nhật">
						</form></div>
					</div>
					
					
										
				</div>	
			</div>					
			</div>
		</div>
	</div>

	<?php
        include_once('../include/site-footer.php');
	?>

	</div>
	<script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
	<script src="../../js/app.js"></script>
</body>

</html>