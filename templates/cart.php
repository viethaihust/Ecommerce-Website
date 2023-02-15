<?php
ob_start();
include('../functions.php');
@include 'config.php';
header("Cache-Control: no cache");
session_start();
?>
<?php
        include_once('../include/header.php');
        include_once('../include/site-header.php');
?>
<section class="cart" id="cart_update">
	<table name="ta" id = 'dsTable' style="width:100%">
		<tr>
			<th class="cart_Session"></th>
			<th class="cart_Session">Sản phẩm</th>
			<th class="cart_Session">Giá</th>
			<th class="cart_Session">Số lượng</th>
			<th class="cart_Session">Số tiền</th>
			<th class="cart_Session"></th>
		</tr>
		<?php
		$items = $product->getCartData();
		foreach($items as $item){
			$product_id = $item['id'];
			$query_1 = "SELECT * FROM product_image WHERE product_image.product_id = $product_id";											
			$result_1 = $conn->query($query_1);

			?>
		<form name="DeleteCartForm" method="POST">
		<tr>
			<td class="cart_Picture" style="width:21rem;"><img class="cart_img" src="../image/products/<?php echo $result_1->fetch_assoc()['product_image']; ?>"></td>
			<td class="cart_Product"> <?php echo $item['name']; ?> </td>
			<td class="cart_Common" >
			<input  class="cart_Price" style="color:black; width:auto" type="text" id ="cart_Price" name="cart_Price" value=<?php echo $item['price']; ?> disabled>
			</td>
			<td class="cart_Common" >
			
			<input type="button" class="button_TypeL"  value="-" onclick="DecreaceQuantity(this)">
			<input  class="cart_Quantity" type="text" id ="cart_Quantity" name="Quantity" value=<?php echo $item['quantity']; ?> min="1" disabled>
			<input type="button" class="button_TypeR" value="+" onclick="IncreaceQuantity(this)">
			
			</td>
			<td class="cart_Common">
			<input style="width:100px" class="cart_Subtotal" type="text" id="Subtotal" name="Subtotal" value=<?php echo $item['quantity'] * $item['price']; ?> disabled>
			</td>

			<input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $item['cart_id']; ?>">
			<input type="hidden" name="action" value="deleteCart">
			<td class="cart_Delete" style="width:50px" >
			<button type="submit" class="button_TypeD" value="x" onclick="deleteRow(this)">X
			</td>
		</tr>
		</form>
		<?php
		}
		?>
	</table>

	<div class="cart_Total" style="position:absolute">
		<div class="cart_fieldset">
		<div><h3>Thanh toán</h3></div>
			<table >
				<tr>
					<th class="cart_Session">Tổng</th>
					<td class="cart_Common"><input id="carttotal_Subtotal" value="0" disabled></td>
				</tr>
				

			</table>
		<input class="cart_Submit" type="submit" value="Thanh toán">
		</div>
	</div>

</section>
<?php
        include_once('../include/site-footer.php');
?>
<script>
var total = 0;
$('input[name="Subtotal"]').each(function(){
   total+=parseInt($(this).val())
});
document.getElementById("carttotal_Subtotal").value = total;
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

</script>
<script src="../js/app.js"></script>
<script src="../js/cart.js"></script>
<script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>