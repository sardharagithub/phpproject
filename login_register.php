<?php
include ("header.php");
include("database.inc.php");
if(isset($_POST['login']))
{
    $email=get_safe_value($_POST['user_email']);
	$password=get_safe_value($_POST['user_password']);  
    $q="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $res=mysqli_query($con,$q);
    
	$row=mysqli_fetch_array($res);
   
    
    if($row)
    {   
		$_SESSION['unm']=$row['name'];
    	redirect('shop');
    }
    else
    {
        $_SESSION['login']="<div class='error'>invalid detail</div>";
		echo "invalid uername password"; 
        $_SESSION['unm']="please login";
    }
}

?>
<div class="login-register-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="post" id="frmLogin">
                                                <input type="email" name="user_email" placeholder="Email" required>
                                                <input type="password" name="user_password" placeholder="Password" required>
                                                <div class="button-box">
                                                    
                                                    <button type="submit" name="login" id="login_submit">Login</button>
													<input type="hidden" name="type" value="login"/>
												   <div id="form_login_msg" class="success_field"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="post" id="frmRegister">
                                                <input type="text" name="name" placeholder="Name" id="name" required>
												<input name="email" id="email" placeholder="Email" type="email" required>
												<div id="email_error" class="error_field"></div>
                                                <input type="password" name="password" placeholder="Password" id="password" required>
                                                <input type="text" name="mobile" placeholder="Mobile" id="mobile" required>
                                                <div class="button-box">
                                                    <button type="submit" id="register_submit">Register</button>
                                                </div>
												<input type="hidden" name="type" value="register"/>
												<div id="form_msg" class="success_field"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
include("footer.php");
?>