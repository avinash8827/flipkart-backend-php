<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
		integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="css/bootstrap-slider.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
		<link rel="shortcut icon" href="favicon.ico">
		<title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!</title>
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			/* abhishek */
			.k_tbr {
			border: 1px dashed red;
		}

		.k_headertop {
			height: 57px;
			background-color: #2874F0;
		}
		.a_h{
			margin-top: -45px !important;
			background-color: #fff;height: 35px;
			width: 100px;
			border: none;
			
		}
		.k_listnone {
			list-style: none;
			text-decoration: none !important;
		}
		.display_inlineblock {
			display: inline-block;
		}

		.k_text_fixed {
			margin-top: -6px;
			margin-right: 5px !important;
			padding: 0px;
			font-size: 0.7em;
		}
		.k_text_fixed {
			margin-top: -2px;
			margin-right: 5px !important;
			padding: 0px;
			font-size: 0.6em;
		}
		.k_ul {
			width: 150px;
			height: 60px;
			border: 2px solid red;
			margin: 0px;
		}
		.k_li{
			margin-left: 45px;
			width: 40px;
			height: 40px;
			border: 2px solid red;
		}
		.k_headertop .container {
				max-width: 100%;
			}
		.k_plus {
			width: 10px;
			height: 10px;
			margin-top: 2px;
		}
		.k_searchbox{
				width: 100% !important;
		}/* 
		.k_cart{
			padding-right: 10px !important;
		} */
		@media only screen and (max-width:768px) {

			/* Mobile Resolution */
			.display_inlineblock {
				display: inline-block;
			}
			.k_headertop {
				height: 109px;
			}
			.k_headertop .container{
              max-width: 95%;
            }
			.k_icon{
				float: right;
				margin-bottom: 500px !important;
			}
			.k_display_block{
				display: block;
			}
			.k_mysearch_btn{
				float: right;
			}
			.k_form{
				width: 100%;
			}
			/* .k_myform{
				margin-right: 40px !important;
			} */
			.k_headerbottom {
				margin-top: 110px;
				height: 129px;
			}
			.k_headerbottom .container {
				max-width: 100%;
			}
			.container .container-lg .container-md .container-sm .container-xl .container-xxl {
				max-width: 100%;
			}
		}
		@media only screen and (min-width:769px){
			.k_myform{
				width: 100% !important;
				margin-top: -50px !important;
				margin-left: 80px !important;
				}
			.k_link{
				margin-top: -40px !important;
			}
		}
			
		</style>
	</head>
	<body>
		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5 bg-primary text-white modalpadding modalpadding_img">
								<h2 class="">Login</h2>
								<p>Get access to your Orders, Wishlist and Recomendations</p>
		
							</div>
							<div class="col-md-7 bg-white modalpadding modalpaddinglogin">
								<form class="loginform">
									<div class="form-group" style="margin-bottom:40px;">
										<span class="text-secondary">Enter Email/Mobile Number</span>
										<input autocomplete="off" type="text" name="email" class="form-control">
									</div>
									<div class="form-group" style="margin-bottom:20px;">
										<span class="text-secondary">Enter Password</span>
										<input autocomplete="off" type="password" name="password" class="form-control">
										<a href="btn btn-link" class="forgot">Forgot?</a>
									</div>
									<div class="form-group">										
										<input type="submit" name="submit" class="btn btn-lg text-white btn-warning btn-block" value="Login">
									</div>
								</form>
								<a href="#" class="btn btn-lg text-primary btn-white btn-block newtofk">New to Flipkart? Sign up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header class="a_header">
			<div class="k_headertop fixed-top">
				<div class="container ml-0 mr-0 p-0">
					<div class="row col-12 col-sm-12 col-md-6 pr-0">
						<div class="col-6  p-0">
							<ul class="nav mb-2 k_listnone">
								<li class="nav-item k_listnone">
									<a class="nav-link text-white mt-4 d-sm-block d-md-none p-0" href="#"><i class="fas fa-align-justify"></i></a>
								</li>
								<li class="nav-item mt-2 ml-2 k_listnone">
									<a class="nav-link fs-6 mt-2" href="#"
										style="background:url('img/flipkart.png') 0px 0px/contain no-repeat; margin-right:-50px"></a>
									<a class="nav-link text fst-italic k_text_fixed text-white p-0" href="#"
										contenteditable="">Explore
										<span class="fst-italic" style="color: #ffe500;">plus</span>
										<img src="img/abs/plus.png" class="k_plus">
									</a>
								</li> 
							</ul>
						</div>	
						<div class="col-4 col-md-4 p-0 mt-2 d-md-none">
							<a class="nav-link text-white float-right" href="#"><i
								class="fas fa-bell"></i></a>
						</div>
						<div class="col-1 col-md-1 p-0 mt-2 d-md-none">
							<a class="nav-link text-white float-right d-md-none" href="#"><i
										class="fas fa-shopping-cart"></i></a>
						</div>
					</div>
	
					<div>
						<div class="row p-0">
							<div class="col-12 col-sm-12 col-md-5 k_myform k_searchbox p-0">
								<form class="search_form k_form p-0 mt-2">
									<input class="search_box p-0" autocomplete="off" type="text" name="search" placeholder="Search for products, brands and more">
									<button type="submit" class="btn search_btn">
										<i class="fa fa-search"></i>
									</button>
									<div class="a_search_list">
										<ul class="nav flex-column recentul">
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> Core i9</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> pendrive</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> laptop</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> laptop</a>
											</li>
										</ul>
										<h6 class="text-secondary">Trending</h6>
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> mobiles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> mobiles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> laptops</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> television</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> washing machines</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> refigerators</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> shoes</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> sarees</a>
											</li>
										</ul>
									</div>
								</form>
							</div>
	
							<div class="nav-item d-none d-md-block  col-md-2 col-lg-3 p-0">
			                   <button type="button" class="btn btn-white mt-2 float-right rounded-0 a_h">Login</button>
								<ul class="nav flex-column submenu">
									<li class="nav-item">
										<span class="triangleup"></span>
										<a class="nav-link text-white" href="#"><i class="fa fa-bell"></i> My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-white" href="#"><i class="fa fa-briefcase"></i> Flipkart Plus Zone</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-question-circle"></i> Game Zone</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-line-chart "></i> Orders</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Wishlist</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> My Chat</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Gift Cards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Notitfications</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Logout</a>
									</li>
								</ul>
							</div>
							<div class="nav-item d-none d-md-block col-md-1 col-lg-1 p-0">
								<a class="nav-link have_chevron_mouseover p-0 k_link text-white float-right" href="#">More <i class="fa fa-chevron-down"></i></a>
								<ul class="nav flex-column submenu">
									<li class="nav-item">
										<span class="triangleup"></span>
										<a class="nav-link" href="#"><i class="fa fa-bell"></i> Notification Preferences</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-briefcase"></i> Sell on Flipkart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-question-circle"></i> 24x7 Customer
											Support</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-line-chart "></i> Advertise</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Download App</a>
									</li>
								</ul>
							</div>
							<div class="nav-item d-none d-md-block col-md-1 col-lg-1 p-0">
								<a style="position:relative;" class="nav-link p-0 text-white k_link k_cart float-right" href="#"> <i class="fa fa-shopping-cart k_cart"></i> Cart<i class="fa fa-chevron-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<div class="a_header_bottom shadow-sm bg-white mb-2">
			<div class="container h-100">
				<div class="a111" style="overflow:scroll;">
					<ul class="nav h-100" style="width: 4100px;">
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/offer.jpg') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img//abs/home.jpg') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/mob.png') 0px 0px/contain no-repeat"></a>

						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/laptopa.png') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/flight.png') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/surap.png') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#"
								style="background:url('./img/abs/d.png') 0px 0px/contain no-repeat"></a>
						</li>
						<li class="nav-item h-100">
							<a class="nav-link" href="#" style="background:url('') 0px 0px/contain no-repeat"></a>
						</li>

				</div>

			</div>
		</div>
	</header>
		<!-- <header>
			<div class="header_top">
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-2">
								<a href="#" class="a_logo">
									<img width="75" src="img/flipkart.png">
									<div class="a_ep">
										<span class="ep explore">Explore</span> <span class="ep plus">Plus</span>
										<img width="10" src="img/plus.png">
									</div>					
								</a>
							</div>
							<div class="col-md-10">
								<form class="search_form">
									<input class="search_box" autocomplete="off" type="text" name="search" placeholder="Search for products, brands and more">
									<button type="submit" class="btn search_btn">
										<i class="fa fa-search"></i>
									</button>
									<div class="a_search_list">
										<ul class="nav flex-column recentul">
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> Core i9</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> pendrive</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> laptop</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-refresh text-secondary"></i> laptop</a>
											</li>
										</ul>
										<h6 class="text-secondary">Trending</h6>
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> mobiles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> mobiles</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> laptops</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> television</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> washing machines</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> refigerators</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> shoes</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#"><i class="fa fa-search"></i> sarees</a>
											</li>
										</ul>
									</div>
								</form>
							</div>
						</div>
						
						
					</div>
					<div class="col-md-4">
						<ul class="nav nav-pills a_top_nav">
							<li class="nav-item">
								<a class="nav-link have_chevron_mouseover" href="#">My Account <i class="fa fa-chevron-down"></i></a>
								<ul class="nav flex-column submenu">
									<li class="nav-item">
										<span class="triangleup"></span>
										<a class="nav-link" href="#"><i class="fa fa-bell"></i> My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-briefcase"></i> Flipkart Plus Zone</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-question-circle"></i> Game Zone</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-line-chart "></i> Orders</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Wishlist</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> My Chat</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Gift Cards</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Notitfications</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Logout</a>
									</li>
								</ul>
							</li>
							<!--
							<li class="nav-item">
								<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Login &amp; Signup</a>
							</li>
							-
							<li class="nav-item">
								<a class="nav-link have_chevron_mouseover" href="#">More <i class="fa fa-chevron-down"></i></a>
								<ul class="nav flex-column submenu">
									<li class="nav-item">
										<span class="triangleup"></span>
										<a class="nav-link" href="#"><i class="fa fa-bell"></i> Notification Preferences</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-briefcase"></i> Sell on Flipkart</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-question-circle"></i> 24x7 Customer Support</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-line-chart "></i> Advertise</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-download"></i> Download App</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a style="position:relative;" class="nav-link" href="#"><span class="badge badge-light a_bg_orange a_cart_count text-white">2</span> <i class="fa fa-shopping-cart"></i> Cart</a>
							</li>
						</ul>
					</div>
				</div>							
			</div>
			<div class="header_bottom header_bottom_nav">
				<ul class="nav header_bottom_nav_ul">
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Electronics <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5">
							<div class="row">
								<div class="col a_wht">
									<h6> Electronics <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
			
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">TVs &amp; Appliances <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5 a_tvnappliaces">
							<div class="row">
								<div class="col a_wht">
									<h6> Tv &amp; Appliances <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Appliances <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Men <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5 a_men">
							<div class="row">
								<div class="col a_wht">
									<h6> Mens <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Women <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5">
							<div class="row">
								<div class="col a_wht">
									<h6> Women <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Baby &amp; Kids <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5">
							<div class="row">
								<div class="col a_wht">
									<h6> Baby &amp; Kids <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Home &amp; Furniture <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5">
							<div class="row">
								<div class="col a_wht">
									<h6> Home &amp; Furniture <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item have_chevron_mouseover">
						<a class="nav-link" href="#">Sports, Books &amp; More <i class="fa fa-chevron-down"></i></a>
						<div class="category_submenu position-absolute shadow-sm mt-0 ml-5 mr-5">
							<div class="row">
								<div class="col a_wht">
									<h6> Sports, Books &amp; More  <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_gry">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
								<div class="col a_wht">
									<h6> Mobiles <i class="fa fa-caret-right"></i></h6>
									<ul>
										<li>
											<a href="#">MI</a>
										</li>
										<li>
											<a href="#">RealMe</a>
										</li>
										<li>
											<a href="#">Samsung</a>
										</li>
										<li>
											<a href="#">Infinix</a>
										</li>
										<li>
											<a href="#">Oppo </a>
										</li>
										<li>
											<a href="#">Apple</a>
										</li>
										<li>
											<a href="#">Vivo</a>
										</li>
										<li>
											<a href="#">Honor</a>
										</li>
										<li>
											<a href="#">Asus</a>
										</li>
										<li>
											<a href="#">Samsung S10 Series</a>
										</li>
										<li>
											<a href="#">Redme Note 7 Pro</a>
										</li>
										<li>
											<a href="#">Redmi Go</a>
										</li>
										<li>
											<a href="#">RealMe C2</a>
										</li>
										<li>
											<a href="#">Infinix Smart 3 Plus</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
										<li>
											<a href="#">Vivo V15</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Offer Zone</a>
					</li>
				</ul>
			</div>
		</header> -->
		<button  onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-outline-light bg-white backtotop shadow-sm a_backtotop"><i class="fa fa-chevron-up"></i> Back to top</button>
		<div class="overlay w-100 h-100 position-fixed text-center">
			<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-primary"></i>
			<span class="sr-only">Loading...</span>
		</div>
		<div class="  container mt-5 mb-4 p-0 a_viewcart a_checkoutcont a_thankyou my_chat_cont">
			<div class="row m-0 bg-white my_chat_row shadow-sm">
				<div class="col-md-4 p-0">
					<div class="shadow-sm p-3 border font-weight-bold">
						All Chats
					</div>
					<a href="#" class="p-4 btn rounded-0 text-left btn-lg btn-block a_chat_left">
						<div class="row m-0">
							<div class="col-md-2 p-0">
								<img class="img-fluid float-left my_chat_b1 mr-4" src="img/my-chat/bot.png">
							</div>
							<div class="col-md-10 p-0 small">
								<div class="text-secondary">Shopping Assistant 23/5/2019</div>
								<div class="text-secondary">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="text-secondary">Can you repeat again or you can say "restart" to st...</div>
							</div>
						</div>
						
					</a>
				</div>
				<div class="col-md-8 p-0">
					<div class="shadow-sm p-3 border font-weight-bold">
						<img class="img-fluid my_chat_b1 mr-4" src="img/my-chat/bot.png"> Shopping Assistant
					</div>
					<div class="my_chat_b2 shadow-sm">
						<div class="clearfix">
							<div class="position-relative chat_box_left chat_box_text w-50 border shadow-sm bg-white p-2 float-left mb-2">
								<img class="position-absolute c_al" src="img/my-chat/c_al.png">
								<div>What's the budget you have in mind?You can choose from below or say things like: under 30000</div>
								<div class="small cb_small float-right">1:31 pm</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_right chat_box_text border shadow-sm bg-primary text-white p-2 float-right text-right chat_text_righ mb-2">
								<img class="position-absolute c_ar" src="img/my-chat/c_ar.png">
								<span>More than 60000</span>
								<div class="small cb_small">1:31 pm <i class="fa fa-check"></i></div>
							</div>							
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_left chat_box_text w-50 border shadow-sm bg-white p-2 float-left mb-2">
								<img class="position-absolute c_al" src="img/my-chat/c_al.png">
								<div>What's the budget you have in mind?You can choose from below or say things like: under 30000</div>
								<div class="small cb_small float-right">1:31 pm</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_right chat_box_text border shadow-sm bg-primary text-white p-2 float-right text-right chat_text_righ mb-2">
								<img class="position-absolute c_ar" src="img/my-chat/c_ar.png">
								<span>More than 60000</span>
								<div class="small cb_small">1:31 pm <i class="fa fa-check"></i></div>
							</div>							
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_left chat_box_text w-50 border shadow-sm bg-white p-2 float-left mb-2">
								<img class="position-absolute c_al" src="img/my-chat/c_al.png">
								<div>What's the budget you have in mind?You can choose from below or say things like: under 30000</div>
								<div class="small cb_small float-right">1:31 pm</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_right chat_box_text border shadow-sm bg-primary text-white p-2 float-right text-right chat_text_righ mb-2">
								<img class="position-absolute c_ar" src="img/my-chat/c_ar.png">
								<span>More than 60000</span>
								<div class="small cb_small">1:31 pm <i class="fa fa-check"></i></div>
							</div>							
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_left chat_box_text w-50 border shadow-sm bg-white p-2 float-left mb-2">
								<img class="position-absolute c_al" src="img/my-chat/c_al.png">
								<div>What's the budget you have in mind?You can choose from below or say things like: under 30000</div>
								<div class="small cb_small float-right">1:31 pm</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="position-relative chat_box_right chat_box_text border shadow-sm bg-primary text-white p-2 float-right text-right chat_text_righ mb-2">
								<img class="position-absolute c_ar" src="img/my-chat/c_ar.png">
								<span>More than 60000</span>
								<div class="small cb_small">1:31 pm <i class="fa fa-check"></i></div>
							</div>							
						</div>
					</div>
					<div class="my_chat_b3 shadow-sm">
						<div class="row my_text">
							<div class="col-md-1 col-sm-2 col-2 p-2 position-relative">
								<div class="position-absolute chatPlusDiv">
									<a href="#" class="m-2 p-2 pt-1 rounded-circle btn btn-success"><i class="fa fa-picture-o"></i></a>
									<a href="#" class="m-2 p-2 pt-1 rounded-circle btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
									<a href="#" class="m-2 p-2 pt-1 rounded-circle btn btn-warning"><i class="fa fa-file-text text-white"></i></a>
								</div>
								<a href="#" class="m-2 p-2 pt-1 rounded-circle cartButton btn btn-primary chatPlus">
									<i class="fa fa-plus"></i>
								</a>
							</div>
							<div class="col-md-10 col-sm-4 p-2 col-8">
								<textarea onkeyup="auto_grow(this)" class="form-control border-0 chatTextArea" rows="1" placeholder="Type a Message Here..."></textarea>
							</div>
							<div class="col-md-1 col-sm-4 p-2 col-2">
								<a href="#" class="btn btn-lg text-secondary"><i class="fa fa-paper-plane"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of .a_cont -->
		<footer>
			<div class="footer_top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col">
									<h6 class="text-secondary">ABOUT</h6>
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Contact Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">About Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Flipkart Stories</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Press</a>
										</li>
									</ul>
								</div>
								<div class="col">
									<h6 class="text-secondary">HELP</h6>
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Payments</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Shippings</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Cancellation &amp; Returns</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">FAQ</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Report Infrigement</a>
										</li>
									</ul>
								</div>
								<div class="col">
									<h6 class="text-secondary">ABOUT</h6>
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Contact Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">About Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Flipkart Stories</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Press</a>
										</li>
									</ul>
								</div>
								<div class="col">
									<h6 class="text-secondary">ABOUT</h6>
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link" href="#">Contact Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">About Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Flipkart Stories</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">Press</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col">
									<div class="a_footer_top_div">
										<h6 class="text-secondary">Mail Us:</h6>
										<p class="text-white">
											<small>
											Flipkart Internet Pvt Ltd Block B (Begonia),

											Ground Floor, Embassy Tech Village,

											Outer Ring Road, Devarabeesanahalli Village,

											Varthur Hobli, Bengaluru East Taluk,

											Bengaluru District,

											Karnataka, India, 560103.
											</small>
										</p>
									</div>
									
								</div>
								<div class="col">
									<div>
										<h6 class="text-secondary">Registered Office Address:</h6>
										<p class="text-white">
											<small>
											Flipkart Internet Private Limited,

											Vaishnavi Summit, Ground Floor, 7th Main,

											80 Feet Road, 3rd Block,

											Koramangala,

											Bengaluru - 560034

											India<br>

											CIN : U51109KA2012PTC066107<br>

											Telephone: <a href="#" class="btn btn-link btn-lg text-primary"><big>1800 208 9898</big></a>
											</small>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="footer_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="img/icons/briefcase.svg"> Sell On Flipkart</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="img/icons/star.svg"> Advertise</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="img/icons/gift.svg"> Gift Cards</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><img src="img/icons/help_center.svg"> Help Center</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"> &copy; 2019-2020 Flipkart.com.</a>
								</li>
							</ul>	
						</div>
						<div class="col-md-4">
							<a href="#" class="footer_payment_a">
								<img class="img-fluid" src="img/icons/payments/1.svg">
							</a>
						</div>
					</div>	
				</div>
			</div>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script> -->
		<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-slider.js"></script>
		<!--  Zoom Plugin Start  -->
		
		<script src="js/jquery.simpleGallery.js"></script>
		<script src="js/jquery.simpleLens.js"></script>

		<script>
			$(document).ready(function(){
				$('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
					loading_image: 'img/demo/images/loading.gif'
				});

				$('#demo-1 .simpleLens-big-image').simpleLens({
					loading_image: 'img/demo/images/loading.gif'
				});

				$('#demo-2 .simpleLens-thumbnails-container img').simpleGallery({
					loading_image: 'img/demo/images/loading.gif',
					show_event: 'click'
				});

				$('#demo-2 .simpleLens-big-image').simpleLens({
					loading_image: 'img/demo/images/loading.gif',
					open_lens_event: 'click'
				});
			});
		</script>
		<!--  Zoom Plugin End  -->
		
		<script>
			
			//Count Down Timer
		
			/*
			// Set the date we're counting down to
			var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get today's date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			  // Display the result in the element with id="demo"
			  document.getElementById("a_countdown").innerHTML = hours + ": "+ minutes + ": " + seconds + ": " +" Left";

			  // If the count down is finished, write some text 
			  if (distance < 0) {
				clearInterval(x);
				document.getElementById("a_countdown").innerHTML = "EXPIRED";
			  }
			}, 1000);
			*/
			
			$(document).on('focus','.loginform input',function(){
				$(this).prev().css('transform','translate(15px,0px)');
			});
			$(document).on('blur','.loginform input',function(){
				$(this).prev().css('transform','translate(15px,32px)');
			});
			
			//Scroll Code
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
				document.getElementById("myBtn").style.top = "66px";
			  } else {
				document.getElementById("myBtn").style.top = "0px";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				$('html,body').animate({ scrollTop: 0 }, 'fast'); 
			}
			
			function myFunction() {
				 // console.log('hi');
				  // Declare variables
				  var input, filter, ul, li, a, i, txtValue;
				  input = document.getElementById('myInput');
				  filter = input.value.toUpperCase();
				  ul = document.getElementById("myUL");
				  li = ul.getElementsByTagName('li');

				  // Loop through all list items, and hide those who don't match the search query
				  for (i = 0; i < li.length; i++) {
					a = li[i].getElementsByTagName("a")[0];
					txtValue = a.textContent || a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
					  li[i].style.display = "";
					} else {
					  li[i].style.display = "none";
					}
				  }
			}
			
			$(document).ready(function($){ //jQuery Start
				$("#ex2").slider({});
				
				//canmoveup
				$(document).on('mouseover','.sf_section_1_center .gridview_gap a.canmoveup',function(){
					//alert('ok');
					var h = $(this).find('.prod_desc_bottom').height();
					//console.log(h);
					
					$(this).find('.bottom').css('top',-(h+4)+'px');
				});
				
				//canmoveup
				$(document).on('mouseout','.sf_section_1_center .gridview_gap a.canmoveup',function(){
					$(this).find('.bottom').css('top','0px');
				});
				
				//have_chevron
				$(document).on('click','.have_chevron',function(){
					//alert('ok');
					$(this).find('.fa').toggleClass('fa-chevron-up fa-chevron-down');
				});
				
				$(document).on('mouseover','.have_chevron_mouseover',function(){
					$(this).find('.fa').toggleClass('fa-chevron-up fa-chevron-down');
				});
				$(document).on('mouseout','.have_chevron_mouseover',function(){
					$(this).find('.fa').toggleClass('fa-chevron-up fa-chevron-down');
				});
				
				$(document).on('click','.searchby a',function(e){
					overlay();				
					e.preventDefault();
					$(this).parent().parent().find('a.active').removeClass('active');
					$(this).addClass('active');
				});
				
				$(document).on('click','.btn_close',function(){
					$(this).hide();
				});
				
				$(document).on('click','.clearall',function(){
					$('.btn_close').hide();
					$(this).hide();
				});
				
				$(document).on('click','.btn_close,.clearall',function(){
					overlay();
				});
				
				$(document).on('mouseout','.detail .simpleLens-thumbnails-container a',function(){
					$(this).closest('.simpleLens-thumbnails-container').find('a').css('border','2px solid #fff');	
					$(this).css('border','2px solid #2874f0');
				});
				
				$(document).on('click','.chev_down,.chev_up',function(e){
					e.preventDefault();
				});
				$(document).on('click','.chev_down',function(e){
					//We have to calculate dynamically
					var tOh = $('.thumb_OverFlowCont').height();
					var h = $('.thumb_OverFlowCont > div').height();
					//console.log(h);
					var to_move = h-tOh;
					//console.log(to_move);
					$('.thumb_OverFlowCont > div').css('transform','translate(0px,-'+to_move+'px)');
					$(this).hide();
					$('.chev_up').show();
				});
				$(document).on('click','.chev_up',function(e){
					$('.thumb_OverFlowCont > div').css('transform','translate(0px,0px)');
					$(this).hide();
					$('.chev_down').show();
				});
				
				
				$(document).on('mouseover','a.have_video',function(){
					$('.video_iframe').show();
				});
				$(document).on('mouseout','a:not(.have_video)',function(){
					$('.video_iframe').hide();
				});
				
				$(document).on('click','.remove',function(){
					$(this).closest('.row').hide();
				});
				
				$('.od_progress .progress-bar').css('width','100%');
			});//jQuery End
			
			function overlay(){
				$('.overlay').show();
				setTimeout(function(){ 
					$('.overlay').hide();
				}, 1000);
			
			}
			
			$(window).on('scroll', function(event) {
				var scrollValue = $(window).scrollTop();
				//console.log(scrollValue);
				
				if (scrollValue > 46) {
					$('article.detail').addClass('affix');
				}else{
					$('article.detail').removeClass('affix');
				} 
				
			});
			function auto_grow(element) {
				element.style.height = "5px";
				element.style.height = (element.scrollHeight)+"px";
			}
			//myChat
			var x=false;
			$(document).on('click','.chatPlus',function(e){
				
				e.preventDefault();
				if(x == false){
					$(this).find('.fa').css('transform','rotateZ(45deg)');
					$('.chatPlusDiv').css({'opacity':'1','top':'-200px'});
					x=true;
				}else{
					$(this).find('.fa').css('transform','rotateZ(0deg)');
					$('.chatPlusDiv').css({'opacity':'0','top':'-150px'});
					x=false;
				}
				
				//alert('Hi ITs working');
			});
		</script>
	</body>
</html>