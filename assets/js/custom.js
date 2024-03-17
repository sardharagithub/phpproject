jQuery('#frmRegister').on('submit',function(e){
	jQuery('.error_field').html('');
	jQuery.ajax({
		url:FRONT_SITE_PATH+'login_register_submit',
		type:'post',
		data:jQuery('#frmRegister').serialize(),
		success:function(result){
			var data=jQuery.parseJSON(result);
			if(data.status=='error'){
				jQuery('#'+data.field).html(data.msg);
			}
			if(data.status=='success'){
				jQuery('#'+data.field).html(data.msg);
				jQuery('#frmRegister')[0].reset();
			}
		}
		
	});
	e.preventDefault();
});	

function set_checkbox(id){
	var cat_dish=jQuery('#cat_dish').val();
	var check=cat_dish.search(":"+id);
	if(check!='-1'){
		cat_dish=cat_dish.replace(":"+id,'');
	}else{
		cat_dish=cat_dish+":"+id;	
	}
	jQuery('#cat_dish').val(cat_dish);
	jQuery('#frmCatDish')[0].submit();
}

function add_to_cart(id,type)
{
	var qty=jQuery('#qty'+id).val();
	var attr=jQuery('input[name="radio_'+id+'"]:checked').val();
	jQuery.ajax({
		url:FRONT_SITE_PATH+'manage_cart',
		type:'POSt',
		data:'qty='+qty+'&attt='+attr+'&type='+type,
		success:function(result)
		{
			swal("co!","Dish added successfully","success");
		}
	});
}
/*

jQuery('#frmLogin').on('submit',function(e){
	jQuery('.error_field').html('');
	jQuery('#login_submit').attr('disabled',true);
	jQuery('#form_login_msg').html('Please wait...');
	jQuery.ajax({
		url:'login_register_submit.php',
		type:'post',
		data:jQuery('#frmLogin').serialize(),
		success:function(result){
			jQuery('#form_login_msg').html('');
			jQuery('#login_submit').attr('disabled',false);
			var data=jQuery.parseJSON(result);
			if(data.status=='error'){
				jQuery('#form_login_msg').html(data.msg);
			}
			if(data.status=='success'){
				//jQuery('#form_login_msg').html(data.msg);
				window.location.href='shop.php';
			}
		}
		
	});
	e.preventDefault();
});	*/
