<?php
session_start();
include('database.inc.php');
include('function.inc.php');



$type=get_safe_value($_POST['type']);
$added_on=date('Y-m-d h:i:s');
if($type=='register'){
	$name=get_safe_value($_POST['name']);
	$email=get_safe_value($_POST['email']);
	$mobile=get_safe_value($_POST['mobile']);
	$password=get_safe_value($_POST['password']);
	$check=mysqli_num_rows(mysqli_query($con,"select * from user where email='$email'"));
	if($check>0){
		$arr=array('status'=>'error','msg'=>'Email id already registered','field'=>'email_error');
	}else{
		
		mysqli_query($con,"insert into user(name,email,mobile,password,status,email_verify,added_on) values('$name','$email','$mobile','$password','0','0','$added_on')");
		$arr=array('status'=>'success','msg'=>'Thank you for register.','field'=>'form_msg');
	}
	echo json_encode($arr);
}


?>