$(function() {
    $("form[name*='DeleteCartForm']").on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					window.location.reload();
				}
			},
            error:function(data){
                alert(JSON.stringify(data));
            }
		});		
	});

    $("form[name*='AddToCartForm']").on('submit', function(event){
		event.preventDefault();
		var elemId = event.target.querySelector('.cart-wrapper')?.id;
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',	
			data : formData,
			success:function(response){
				if(response.success == 1) {
					$('#cart_reset').load(document.URL + ' #cart_reset');
					$('.purchase-info').load(document.URL + ' .purchase-info');
					$('#' + elemId).load(document.URL + ' #' + elemId + ' > *');
				}
			},
            error:function(){
				window.location.href = 'login_form.php';
			}
		});		
	});
});