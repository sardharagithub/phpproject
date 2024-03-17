<div class="footer-area black-bg-2 pt-70">
            <div class="footer-bottom-area border-top-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5">
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                    <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<script src="<?php echo FRONT_SITE_PATH?>assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/popper.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/ajax-mail.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/plugins.js"></script>
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/main.js"></script>
		<script>
		var FRONT_SITE_PATH="<?php echo FRONT_SITE_PATH?>";
		</script>
		<script src="<?php echo FRONT_SITE_PATH?>assets/js/custom.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>
<script>
    /* function alert($type,$msg)
{
    $bs_class=($type=="success") ? "alert-success" : "alert-danger";
    echo <<<alert
     <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
       <strong class="me-3">$msg</strong> 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
  alert;

}



     let register_form=document.getElementById('frmRegister');
     register_form.addEventListener('submit',(e)=>{
        e.preventDefault();
        
        let data=new FormData();
        data.append('name',frmRegister['name']);
        data.append('email',frmRegister['email']);
        data.append('password',frmRegister['password']);

        data.append('cpassword',frmRegister['cpassword']);
        data.append('mobile',frmRegister['mobile']);
        data.append('register','');

        let xhr=new XMLHttpRequest();
        xhr.open("POST"."register.php",true);
        xhr.onload=function()
        {
            if(this.responseText=='pass_mismatch')
            {
                alert('error',"password mismatched");
            }
           else if(this.responseText=='email_already')
            {
                alert('error',"email is already registered!");
            }
           else if(this.responseText=='phone_alredy ')
            {
                alert('error',"phone no is already registered!");
            }
            else if(his.responseText=='ins_failed ')
            {
                alert('error',"Registretion is failed server down");
            }
            else
            {
                alert('success',"Registretion is successfully") ;
                register_form.reset();

            }
        }  
        xhr.send(data);
     });

     */
    </script>
