<?php

include('functions.php');

@include 'config.php';
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:login_form.php');
}
?>
	<div class="account-site">

	<?php
	    include_once('../include/header.php');
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
		include_once('../include/footer.php');
	?>