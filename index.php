<?php 
	require './inc/functions.php';
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
		integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!
	</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
	
	<style>
		  .a-crose{
                    float: right;
                    color: #000;
                    font-size: large;
                }
                .a-form{
                    width: 460px;
                    min-height: 450px;
                    background-color:#fff;
                    
                    box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.1);
                    padding: 32px;
                }
                .a-form h1{
                    text-align: center;
                    
                }
                .a-form-field input{
                    display: block;
                    width: 99%;
                    height: 50px;
                    border:1px solid #dbdbdb;
                }
                .a-form-field{
                    margin-bottom: 10px;
                }
                .a-form a.btn{
                    color:#6d97c9;
                    text-decoration: none;
                }
                .a-block{
                    display: block;
                }
                .mybtn{
                    width: 100%;
                    height: 50px;
                    margin-top: 30px;
                    margin-bottom: 60px;
                    background-image: -webkit-linear-gradient(left,#5bc4e2,#9914e9);
                }
                .text-white{
                    color:#fff !important;
                }
                .border-0{
                    border:none !important;
                    box-shadow: 0px 0px 1px 1px rgba(0,0,0,0.1);
                }
                
		
	</style>
</head>

<body>
	<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		
		<div class="modal-body">
			<form class="a-form">
                <a href="#" class="a-crose" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
                <h1> Login Form</h1>
                <div class="a-form-field">
                    <label>Email or Phone</label>
                    <input type="text" name="email">
                </div>
                <div class="a-form-field">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <a href="#" class="btn">Forgot Password ?</a>
                <button type="submit" class="a-block mybtn border-0 text-white">LOGIN</button>
                <div style="text-align: center;">
                    <a style="text-decoration: none;color:#333" href="#">Not a member ?</a> <a href="#" class="btn">Signup Now</a>
                </div>
                
            </form>
		</div>
		
	  </div>
	</div>
  </div>
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
									<input type="submit" name="submit"
										class="btn btn-lg text-white btn-warning btn-block" value="Login">
								</div>
							</form>
							<a href="#" class="btn btn-lg text-primary btn-white btn-block newtofk">New to Flipkart?
								Sign up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="a_header">
			<div class="k_headertop fixed-top">
				<div class="container ml-0 mr-0 p-0">
					<div class="row a_myphpheader col-12 col-sm-12 col-md-6 pr-0">
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
										<img src="<?php echo base_url('assets/'); ?>img/abs/plus.png" class="k_plus">
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
			                   <button type="button" class="btn btn-white mt-2 float-right rounded-0 a_h" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
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
								
								<ul class="nav nav-pills a_top_nav">
									<li class="nav-item">
										<a class="nav-link have_chevron_mouseover p-0 k_link text-white float-right a_more" href="#">More <i class="fa fa-chevron-down"></i></a>
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
								</ul>
							</div>
							<div class="nav-item d-none d-md-block col-md-1 col-lg-1 p-0">
								<a style="position:relative;" class="nav-link p-0 text-white k_link k_cart float-right" href="#"> <i class="fa fa-shopping-cart k_cart"></i> Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<div class="a_header_bottom shadow-sm bg-white mb-2 ">
			<div class="container h-100">
				<div class="a111" style="overflow:scroll;">
					<ul class="nav h-100 myheaderbottem" style="width: 4100px;">
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
						
					
						

				</div>

			</div>
		</div>
	</header>

	<!-- Button to Open the Modal -->
	<!--
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		  Open modal
		</button>
		-->
	<div class="container-fluid a_cont">
		<div class="a_main1">
			<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

				<!-- The slideshow -->
				<ol class="carousel-indicators myslider">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner  w-100">
					<div class="carousel-item active w-100">
						<a href="">
							<img width="100%" height="278" src="<?php echo base_url('assets/'); ?>img/1.jpg" alt="Los Angeles">
						</a>
					</div>
					<div class="carousel-item">
						<a href="#">
							<img width="100%" height="278" src="<?php echo base_url('assets/'); ?>img/slider/2.jpg" alt="">
						</a>
					</div>
					<div class="carousel-item">
						<a href="#">
							<img width="100%" height="278" src="<?php echo base_url('assets/'); ?>img/slider/3.jpg" alt="">
						</a>
					</div>
					<div class="carousel-item">
						<a href="#">
							<img width="100%" height="278" src="<?php echo base_url('assets/'); ?>img/slider/4.jpg" alt="">
						</a>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev a_ccontrol" href="#demo" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class="carousel-control-next a_ccontrol " href="#demo" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>

			</div>
		</div>
		<div class="a_main2 bshadow">
			<div class="row">
				<div class="col-sm-12 col-md-10 a_bcwhite">
					<div class="a_main2_c10_top">
						<div class="float-left a_explor">
							<h4 class="float-left"><strong>Deals of the Day</strong></h4>
							<!-- Display the countdown timer in an element -->
							<div style="margin-left:20px;margin-top:5px;" class="float-left a_ex1">
								<img width="20" src="<?php echo base_url('assets/'); ?>img/timer.svg">&nbsp;&nbsp;
								<span id="a_countdown" class="text-secondary"></span>
							</div>

						</div>

						<a href="#" class="btn btn-primary btn-md float-right a_mynewbtn">View All</a>
					</div>
					<div id="demo2" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col-12 ">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/2.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/3.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/4.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/5.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/6.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/7.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo2" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo2" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
				<div class="col-md-2 d-sm-none d-md-block a_m2_c2">
					<a href="#">
						<img width="100%" height="100%" style="border:5px solid #fff;margin:0px 5px;"
							src="<?php echo base_url('assets/'); ?>img/m2/m2_right.jpg">
					</a>
				</div>
			</div>
		</div>
		<div class="a_main3">
			<div class="row">
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_1.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_2.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_3.jpg">
					</a>
				</div>
			</div>
		</div>
		<div class="a_main4 bshadow">
			<div class="row">
				<div class="col-md-12 a_bcwhite">
					<div class="a_main2_c10_top">
						<div class="float-left">
							<h4 class="float-left"><strong>Trending Offers</strong></h4>
						</div>

						<a href="#" class="btn btn-primary btn-md float-right">View All</a>
					</div>
					<div id="demo3" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/2.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/3.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/4.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/5.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/6.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/7.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo3" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo3" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="a_main5">
			<div class="row">
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_1.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_2.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/m3_3.jpg">
					</a>
				</div>
			</div>
		</div>
		<div class="a_main6 bshadow">
			<div class="row">
				<div class="col-md-12 a_bcwhite">
					<div class="a_main2_c10_top a_main6_c10">
						<div class="float-left">
							<h4 class=""><strong>You May Like</strong></h4>
							<h6 class="text-secondary">Based on Your Activity</h6>
						</div>

						<a href="#" class="btn btn-primary btn-md float-right">View All</a>
					</div>
					<div id="demo4" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo4" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo4" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="a_main3 a_main7">
			<div class="row">
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/banners/1.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/banners/2.jpg">
					</a>
				</div>
				<div class="col-md-4">
					<a href="#">
						<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/banners/3.jpg">
					</a>
				</div>
			</div>
		</div>
		<div class="a_main6 a_main8 bshadow">
			<div class="row">
				<div class="col-md-12 a_bcwhite">
					<div class="a_main2_c10_top a_main6_c10">
						<div class="float-left">
							<h4 class=""><strong>Suggested for You</strong></h4>
							<h6 class="text-secondary">Similar to Items You Viewed</h6>
						</div>

						<a href="#" class="btn btn-primary btn-md float-right">View All</a>
					</div>
					<div id="demo8" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/3.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo8" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo8" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="a_main4 a_main9 bshadow">
			<div class="row">
				<div class="col-md-12 a_bcwhite">
					<div class="a_main2_c10_top">
						<div class="float-left">
							<h4 class="float-left"><strong>Trending Offers</strong></h4>
						</div>

						<a href="#" class="btn btn-primary btn-md float-right">View All</a>
					</div>
					<div id="demo9" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/2.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/3.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/4.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/5.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/6.jpg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/7.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<img width="150" height="150" src="<?php echo base_url('assets/'); ?>img/m2/1.jpeg">
												<div class="text-body"><strong>Toys</strong></div>
												<div class="text-success">20-70%+Extra 10% Off </div>
												<div class="text-secondary">Disney, Lego & More</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo9" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo9" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="a_main6 a_main10 bshadow">
			<div class="row">
				<div class="col-md-12 a_bcwhite">
					<div class="a_main2_c10_top recentlyviewed a_main6_c10">
						<div class="float-left">
							<h4 class=""><strong>Recently Viewed</strong></h4>
						</div>

						<a href="#" class="btn btn-primary btn-md float-right">View All</a>
					</div>
					<div id="demo10" class="carousel slide" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/suggested4u/3.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="cbox">
									<div class="row">
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/1.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
										<div class="col">
											<a href="#" class="text-center a_m2_lefta a_noscale">
												<i class="fa fa-heart"></i>
												<div class="a_main6_img_div">
													<img src="<?php echo base_url('assets/'); ?>img/laptops/2.jpeg">
												</div>
												<div class="text-body"><strong>Lenovo Ideapad 530s Core i5 8th Gen - (8
														GB/512 GB SSD/Windows 10...</strong></div>
												<h6>
													<span class="badge badge-success">4.3<i
															class="fa fa-star"></i></span> &nbsp;<span
														class="text-secondary">(269)</span>
												</h6>
												<div>
													<strong class="text-dark"><big>₹89,990</big></strong>&nbsp; <del
														class="text-secondary">₹1,09,999</del>&nbsp; <span
														class="text-success">18% off</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev a_ccontrol" href="#demo10" data-slide="prev">
							<i class="fa fa-chevron-left"></i>
						</a>
						<a class="carousel-control-next a_ccontrol" href="#demo10" data-slide="next">
							<i class="fa fa-chevron-right"></i>
						</a>

					</div>
				</div>
			</div>
		</div>

	</div><!-- End of .a_cont -->
	<div class="a_cont_bottom_last">
		<div class="container">
			<div class="a_cont_bottom_last_head">
				<div>Top Stories : <strong>Brand Directory</strong></div>
				<ul class="nav">
					<li>
						<span class="text-seconday">MOST SEARCHED FOR ON FLIPKART:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-seconday">MOBILES:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-seconday">MOBILES:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-seconday">MOBILES:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-seconday">MOBILES:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-secondary">MOBILES:</span>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
						<a href="#">Redmi Note 7S</a>
					</li>
					<li>
						<span class="text-seconday">BEST SELLING ON FLIPKART: </span>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
						<a href="#">BOOKS</a>
					</li>
				</ul>
			</div>
			<div class="footer_info text-secondary">
				<h6><strong>Flipkart: The One-stop Shopping Destination</strong></h6>
				<p>
					E-commerce is revolutionizing the way we all shop in India. Why do you want to hop from one store to
					another in search of the latest phone when you can find it on the Internet in a single click? Not
					only mobiles. Flipkart houses everything you can possibly imagine, from trending electronics like
					laptops, tablets, smartphones, and mobile accessories to in-vogue fashion staples like shoes,
					clothing and lifestyle accessories; from modern furniture like sofa sets, dining tables, and
					wardrobes to appliances that make your life easy like washing machines, TVs, ACs, mixer grinder
					juicers and other time-saving kitchen and small appliances; from home furnishings like cushion
					covers, mattresses and bedsheets to toys and musical instruments, we got them all covered. You name
					it, and you can stay assured about finding them all here. For those of you with erratic working
					hours, Flipkart is your best bet. Shop in your PJs, at night or in the wee hours of the morning.
					This e-commerce never shuts down.
				</p>
				<p>
					What's more, with our year-round shopping festivals and events, our prices are irresistible. We're
					sure you'll find yourself picking up more than what you had in mind. If you are wondering why you
					should shop from Flipkart when there are multiple options available to you, well, the below will
					answer your question.
				</p>

				<h6><strong>Flipkart Plus</strong></h6>
				<p>
					A world of limitless possibilities awaits you - Flipkart Plus was kickstarted as a loyalty reward
					programme for all its regular customers at zero subscription fee. All you need is 50 coins to be a
					part of this service - 1 coin is equivalent to a purchase of 250 Rupees, so if you've been an old
					and regular Flipkart customer, chances are you've been upgraded to Plus already. Free delivery,
					early access during sales and shopping festivals, exchange offers and priority customer service are
					the top benefits to a Flipkart Plus member. In short, earn more when you shop more!
				</p>
				<p>
					What's more, you can even use the Flipkart coins for a number of exciting services, like:
				<p>
					An annual Zomato Gold membership<br>
					An annual Hotstar Premium membership<br>
					6 months Gaana plus subscription<br>
					Rupees 550 instant discount on flights on ixigo<br>
					Check out <a href="#">https://www.flipkart.com/plus/all-offers</a> for the entire list. Terms and
					conditions apply.<br>

				<h6><strong>No Cost EMI</strong></h6>
				<p>
					In an attempt to make high-end products accessible to all, our No Cost EMI plan enables you to shop
					with us under EMI, without shelling out any processing fee. Applicable on select mobiles, laptops,
					large and small appliances, furniture, electronics and watches, you can now shop without burning a
					hole in your pocket. If you've been eyeing a product for a long time, chances are it may be up for a
					no cost EMI. Take a look ASAP! Terms and conditions apply.
				<p>
				<h6><strong>No Cost EMI</strong></h6>
				<p>
					Did you know debit card holders account for 79.38 crore in the country, while there are only 3.14
					crore credit card holders? After enabling EMI on Credit Cards, in another attempt to make online
					shopping accessible to everyone, Flipkart introduces EMI on Debit Cards, empowering you to shop
					confidently with us without having to worry about pauses in monthly cash flow. At present, we have
					partnered with Axis Bank, HDFC Bank, State Bank of India and ICICI Bank for this facility. More
					power to all our shoppers! Terms and conditions apply.
				</p>
				<h6><strong>Mobile Exchange Offers</strong></h6>
				<p>
					Get an instant discount on the phone that you have been eyeing on. Exchange your old mobile for a
					new one after the Flipkart experts calculate the value of your old phone, provided it is in a
					working condition without damage to the screen. If a phone is applicable for an exchange offer, you
					will see the 'Buy with Exchange' option on the product description of the phone. So, be smart,
					always opt for an exchange wherever possible. Terms and conditions apply.
				</p>
				<h6><strong>What Can You Buy From Flipkart?</strong></h6>
				<h6><strong>Mobile Phones</strong></h6>
				<p>
					From budget phones to state-of-the-art smartphones, we have a mobile for everybody out there.
					Whether you're looking for larger, fuller screens, power-packed batteries, blazing-fast processors,
					beautification apps, high-tech selfie cameras or just large internal space, we take care of all the
					essentials. Shop from top brands in the country like Samsung, Apple, Oppo, Xiaomi, Realme, Vivo, and
					Honor to name a few. Rest assured, you're buying from only the most reliable names in the market.
					What's more, with Flipkart's Complete Mobile Protection Plan, you will never again find the need to
					run around service centres. This plan entails you to a number of post-purchase solutions, starting
					at as low as Rupees 99 only! Broken screens, liquid damage to phone, hardware and software glitches,
					and replacements - the Flipkart Complete Mobile Protection covers a comprehensive range of
					post-purchase problems, with door-to-door services.
				</p>
				<h6><strong>Electronic Devices and Accessories</strong></h6>
				<p>
					When it comes to laptops, we are not far behind. Filter among dozens of super-fast operating
					systems, hard disk capacity, RAM, lifestyle, screen size and many other criterias for personalized
					results in a flash. All you students out there, confused about what laptop to get? Our Back To
					College Store segregates laptops purpose wise (gaming, browsing and research, project work,
					entertainment, design, multitasking) with recommendations from top brands and industry experts,
					facilitating a shopping experience that is quicker and simpler.
				</p>
				<p>
					Photography lovers, you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever
					reliable point-and-shoot cameras, millennial favourite instant cameras or action cameras for
					adventure junkies: our range of cameras is as much for beginners as it is for professionals. Canon,
					Nikon, GoPro, Sony, and Fujifilm are some big names you'll find in our store. Photography lovers,
					you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever reliable
					point-and-shoot cameras, millennial favourite instant cameras or action cameras for adventure
					junkies: our range of cameras is as much for beginners as it is for professionals. Canon, Nikon,
					GoPro, Sony, and Fujifilm are some big names you'll find in our store.
				</p>
				<p>
					Turn your home into a theatre with a stunning surround sound system. Choose from our elaborate range
					of Sony home theatres, JBL soundbars and Philips tower speakers for an experience to remember.
				</p>
				<p>
					How about jazzing up your phone with our quirky designer cases and covers? Our wide-ranging mobile
					accessories starting from headphones, power banks, memory cards, mobile chargers, to selfie sticks
					can prove to be ideal travel companions for you and your phone; never again worry about running out
					of charge or memory on your next vacation.
				</p>

				<h6><strong>Large Appliances</strong></h6>
				<p>
					Sleek TVs, power-saving refrigerators, rapid-cooling ACs, resourceful washing machines - discover
					everything you need to run a house under one roof. Our Dependable TV and Appliance Store ensures
					zero transit damage, with a replacement guarantee if anything goes wrong; delivery and installation
					as per your convenience and a double warranty (Official Brand Warranty along with an extended
					Flipkart Warranty) - rest assured, value for money is what is promised and delivered. Shop from
					market leaders in the country like Samsung, LG, Whirlpool, Midea, Mi, Vu, Panasonic, Godrej, Sony,
					Daikin, and Hitachi among many others.
				</p>
				<h6><strong>Small Home Appliances</strong></h6>
				<p>
					Find handy and practical home appliances designed to make your life simpler: electric kettles, OTGs,
					microwave ovens, sandwich makers, hand blenders, coffee makers, and many more other time-saving
					appliances that are truly crafted for a quicker lifestyle. Live life king size with these appliances
					at home.
				</p>
				<h6><strong>Lifestyle</strong></h6>
				<p>
					Flipkart, 'India ka Fashion Capital', is your one-stop fashion destination for anything and
					everything you need to look good. Our exhaustive range of Western and Indian wear, summer and winter
					clothing, formal and casual footwear, bridal and artificial jewellery, long-lasting make-up,
					grooming tools and accessories are sure to sweep you off your feet. Shop from crowd favourites like
					Vero Moda, Forever 21, Only, Arrow, Woodland, Nike, Puma, Revlon, Mac, and Sephora among dozens of
					other top-of-the-ladder names. From summer staple maxi dresses, no-nonsense cigarette pants,
					traditional Bandhani kurtis to street-smart biker jackets, you can rely on us for a wardrobe that is
					up to date. Explore our in-house brands like Metronaut, Anmi, and Denizen, to name a few, for
					carefully curated designs that are the talk of the town. Get ready to be spoiled for
					choice.Festivals, office get-togethers, weddings, brunches, or nightwear - Flipkart will have your
					back each time.
				</p>
				<h6><strong>Home and Furniture</strong></h6>
				<p>
					Moving to a new place is never easy, especially if you're buying new furniture. Beds, sofa sets,
					dining tables, wardrobes, and TV units - it's not easy to set up everything again. With the hundreds
					of options thrown at you, the ride could be overwhelming. What place is reliable, what furniture
					will stand the test of time? These are questions you must ask before you choose a store. Well, our
					Durability Certified Furniture Store has not only curated a range of furniture keeping in mind the
					modern Indian consumer but furniture that comes with a lab certification, ensuring they last you for
					up to 10 years. Yes, all our furniture has gone through 35 stability and load tests so that you
					receive only the best-quality furniture. Be FurniSure, always. Names to look out for are Nilkamal,
					Godrej Interio, Urban Ladder, HomeTown, Durian and Perfect Homes.
				</p>
				<p>
					You may have your furniture all set up, but they could end up looking flat and incomplete without
					complementary decor. Curtains, cushion covers, bed sheets, wall shelves, paintings, floor lamps -
					find everything that turns a house to an inviting home under one roof at Flipkart.
				</p>
				<h6><strong>Baby and Kids</strong></h6>
				<p>
					Your kids deserve only the best. From bodysuits, booties, diapers to strollers, if you're an
					expecting mother or a new mother, you will find everything you need to set sail on a smooth
					parenting journey with the help of our baby care collection. When it comes to safety, hygiene and
					comfort, you can rely on us without a second thought. Huggies, Pampers, MamyPoko, and Johnson &
					Johnson: we host only the most-trusted names in the business for your baby.
				</p>
				<h6><strong>Books, Sports and Games</strong></h6>
				<p>
					Work hard and no play? We don't believe in that. Get access to best-selling fiction and non-fiction
					books by your favourite authors, thrilling English and Indian blockbusters, most-wanted gaming
					consoles, and a tempting range of fitness and sports gadgets and equipment bound to inspire you to
					get moving.
				</p>
				<h6><strong>Grocery/Supermart</strong></h6>
				<p>
					Launching into the grocery vertical, Flipkart introduces Supermart that is out to bring everyday
					essentials close to you. From pulses, spices, dairy, personal and sanitary care, breakfast
					essentials, health drinks, spreads, ready to cook, grooming to cleaning agents, we are happy to
					present everything you need to run a house. Now buy Grocery products for as low as 1 Rupee only -
					our 1 Rupee Store presents new products every day for a nominal price of 1 Rupee only. Terms and
					conditions apply.
				</p>
			</div>
		</div>
	</div>
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
										<a class="nav-link" href="./account.html">Contact Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./my-chat.html">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./notifications.html">Flipkart Stories</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./account_addresses.html">Press</a>
									</li>
								</ul>
							</div>
							<div class="col">
								<h6 class="text-secondary">HELP</h6>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="./checkout.html">Payments</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./order_details_test.html">Shippings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Cancellation &amp; Returns</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./product_reviews.html">FAQ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./account_orders.html">Report Infrigement</a>
									</li>
								</ul>
							</div>
							<div class="col">
								<h6 class="text-secondary">ABOUT</h6>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="./order_details.html">Contact Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./thankyou.html">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./wishlist.html">Flipkart Stories</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./viewcart.html">Press</a>
									</li>
								</ul>
							</div>
							<div class="col">
								<h6 class="text-secondary">ABOUT</h6>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="./detail.html">Contact Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./detail.html">About Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./search.html">Flipkart Stories</a>
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

											Telephone: <a href="#" class="btn btn-link btn-lg text-primary"><big>1800
													208 9898</big></a>
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
								<a class="nav-link" href="#"><img src="<?php echo base_url('assets/'); ?>img/icons/briefcase.svg"> Sell On Flipkart</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><img src="<?php echo base_url('assets/'); ?>img/icons/star.svg"> Advertise</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><img src="<?php echo base_url('assets/'); ?>img/icons/gift.svg"> Gift Cards</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><img src="<?php echo base_url('assets/'); ?>img/icons/help_center.svg"> Help Center</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> &copy; 2019-2020 Flipkart.com.</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<a href="#" class="footer_payment_a">
							<img class="img-fluid" src="<?php echo base_url('assets/'); ?>img/icons/payments/1.svg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>

	<script>

		//Count Down Timer

		// Set the date we're counting down to
		var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

		// Update the count down every 1 second
		var x = setInterval(function () {

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
			document.getElementById("a_countdown").innerHTML = hours + ": " + minutes + ": " + seconds + ": " + " Left";

			// If the count down is finished, write some text 
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("a_countdown").innerHTML = "EXPIRED";
			}
		}, 1000);

		$(document).on('focus', '.loginform input', function () {
			$(this).prev().css('transform', 'translate(15px,0px)');
		});
		$(document).on('blur', '.loginform input', function () {
			$(this).prev().css('transform', 'translate(15px,32px)');
		});
	</script>

</body>

</html>