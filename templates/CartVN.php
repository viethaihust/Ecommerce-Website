<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link href = "../css/cart.css" rel="stylesheet">
</head>
<body>
<form action="Check%20out%20VN.html">
<section class="cart">
	<table name="ta" id = 'dsTable' style="width:100%">
		<tr>
			<th class="cart_Session"></th>
			<th class="cart_Session">Sản phẩm</th>
			<th class="cart_Session">Giá</th>
			<th class="cart_Session">Số lượng</th>
			<th class="cart_Session">Số tiền</th>
			<th class="cart_Session"></th>
		</tr>
		
		<tr >
			<td class="cart_Picture"><img class="cart_img" src="https://klbtheme.com/machic/wp-content/uploads/2021/09/single-1.jpg"></td>
			<td class="cart_Product">iphone#######</td>
			<td class="cart_Common" >
			<input  class="cart_Price" type="text" id ="cart_Price" name="cart_Price" value="500" disabled>
			</td>
			<td class="cart_Common" >
			
			<input type="button" class="button_TypeL"  value="-" onclick="DecreaceQuantity(this)">
			<input  class="cart_Quantity" type="text" id ="cart_Quantity" name="Quantity" value="0" min="1" disabled>
			<input type="button" class="button_TypeR" value="+" onclick="IncreaceQuantity(this)">
			
			</td>
			<td class="cart_Common">
			<input style="width:100px" class="cart_Subtotal" type="text" id="Subtotal"  value="0" disabled>
			</td>
			<td class="cart_Delete" style="width:50px" >
			<input type="button" class="button_TypeD" value="x" onclick="deleteRow(this)">
			</td>
		</tr>
		<tr >
			<td class="cart_Picture"><img class="cart_img" src="https://klbtheme.com/machic/wp-content/uploads/2021/09/single-1.jpg"></td>
			<td class="cart_Product">iphone#######</td>
			<td class="cart_Common" >
			<input  class="cart_Price" type="text" id ="cart_Price" name="cart_Price" value="500" disabled>
			</td>
			<td class="cart_Common" >
			
			<input type="button" class="button_TypeL"  value="-" onclick="DecreaceQuantity(this)">
			<input  class="cart_Quantity" type="text" id ="cart_Quantity" name="Quantity" value="0" min="1" disabled>
			<input type="button" class="button_TypeR" value="+" onclick="IncreaceQuantity(this)">
			
			</td>
			<td class="cart_Common">
			<input style="width:100px" class="cart_Subtotal" type="text" id="Subtotal"  value="0" disabled>
			</td>
			<td class="cart_Delete" style="width:50px" >
			<input type="button" class="button_TypeD" value="x" onclick="deleteRow(this)">
			</td>
		</tr>
		<tr >
			<td class="cart_Picture"><img class="cart_img" src="https://klbtheme.com/machic/wp-content/uploads/2021/09/single-1.jpg"></td>
			<td class="cart_Product">iphone#######</td>
			<td class="cart_Common" >
			<input  class="cart_Price" type="text" id ="cart_Price" name="cart_Price" value="500" disabled>
			</td>
			<td class="cart_Common" >
			
			<input type="button" class="button_TypeL"  value="-" onclick="DecreaceQuantity(this)">
			<input  class="cart_Quantity" type="text" id ="cart_Quantity" name="Quantity" value="0" min="1" disabled>
			<input type="button" class="button_TypeR" value="+" onclick="IncreaceQuantity(this)">
			
			</td>
			<td class="cart_Common">
			<input style="width:100px" class="cart_Subtotal" type="text" id="Subtotal"  value="0" disabled>
			</td>
			<td class="cart_Delete" style="width:50px" >
			<input type="button" class="button_TypeD" value="x" onclick="deleteRow(this)">
			</td>
		</tr>
		</table>
<aside class="cart_Total">
	<fieldset class="cart_fieldset">
	<legend><h3>Thanh toán</h3></legend>
		<table >
			<tr>
				<th class="cart_Session">Tổng</th>
				<td class="cart_Common"><p id="carttotal_Subtotal">0</p></td>
			</tr>
			

		</table>
	<input class="cart_Submit" type="submit" value="Thanh toán">

</aside>

</section >
</form>
<script>

function DecreaceQuantity(a){
	var y=a.parentNode.previousElementSibling.firstElementChild.value
	var x=a.nextElementSibling.value;
if(x>0){
	a.nextElementSibling.value-=1;
	a.parentNode.nextElementSibling.firstElementChild.value-=y;
	document.getElementById("carttotal_Subtotal").innerHTML-=y;
}
}
function IncreaceQuantity(a){
	var y=a.parentNode.previousElementSibling.firstElementChild.value
	a.previousElementSibling.value-=-1;
	a.parentNode.nextElementSibling.firstElementChild.value-=-y;
	document.getElementById("carttotal_Subtotal").innerHTML-=-y;
}
function deleteRow(row){
	var d = row.parentNode.parentNode.rowIndex;
	var y = row.parentNode.previousElementSibling.firstElementChild.value;
	document.getElementById('dsTable').deleteRow(d);
	document.getElementById("carttotal_Subtotal").innerHTML-=y;
}
function P(){
	var x=document.getElementById("Subtotal").value;
	document.getElementById("carttotal_Subtotal").innerHTML=x;
}
</script>
</body>
</html>