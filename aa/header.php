<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head><meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo FRONT_SITE_NAME?></title> <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/chosen.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>assets/css/responsive.css">
        <script src="<?php echo FRONT_SITE_PATH?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                            <div class="welcome-area">
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                            <div class="account-curr-lang-wrap f-right">
                                <ul>
                                    <li class="top-hover"><a href="#">Setting  <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="<?php echo FRONT_SITE_PATH ?>profile">Profile  </a></li>
                                            <li><a href="<?php echo FRONT_SITE_PATH ?>order_history">Order History</a></li>
                                            <li><a href="<?php echo FRONT_SITE_PATH ?>logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="<?php echo FRONT_SITE_PATH ?>index">
                                    <img alt="" src="assets/img/logo/logo1.jpeg">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                    <a href="login_register.php">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons"></i>
                                        </div>
                                        <div class="login-text-content">
                                            <p>Register <br> or <span>Sign in</span></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="header-wishlist">
                                   &nbsp;
                                </div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="header-icon-style">
                                            <i class="icon-handbag icons"></i>
                                            <span class="count-style">0</span>
                                        </div>
                                        <div class="cart-text">
                                            <span class="digit">My Cart</span>
                                            <span class="cart-digit-bold"></span>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="about-us.php">about</a></li>
                                        <li><a href="contact-us.php">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
										<li><a href="shop.php">Home</a></li>
										<li><a href="about-us.php">About Us</a></li>
										<li><a href="contact-us.php">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>