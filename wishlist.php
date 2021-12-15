<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-slider.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="shortcut icon" href="favicon.ico">
		<title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Best Offers!</title>
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
	
		<link rel="stylesheet" href="css/style.css">
		<style>
		

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
		
		<button  onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-outline-light bg-white backtotop shadow-sm a_backtotop"><i class="fa fa-chevron-up"></i> Back to top</button>
		<div class="overlay w-100 h-100 position-fixed text-center">
			<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-primary"></i>
			<span class="sr-only">Loading...</span>
		</div>
		
		<div class="container mt-3 mb-4 p-0 a_viewcart a_checkoutcont a_thankyou">
			<div class="row">
				<div class="col-md-3">
					<aside>
						<div class="bg-white shadow-sm ac_aside_b1 mb-3">
							<div class="box1 p-3 border border-left-0 border-right-0 border-top-0">
								<img class="float-left mr-3" src="img/account/user.png">
								<div class="small">Hello</div>
								<div class="font-weight-bold">Flipkart Customer</div>
							</div>
							<div class="row p-3 m-0">
								<div class="col-md-10 p-0">
									<a href="#" class="small ac_usr_txt text-secondary"><img src="img/order_details/coins.png" width="20">42 more coins to FLIPKART PLUS</a>
									<div class="progress mt-1 od_progress">
										<div class="progress-bar bg-warning" style="width: 0%;"></div>
									</div>
								</div>
								<div class="col-md-2 p-0">
									<a href="#" class="btn small text-secondary float-right"><i class="fa fa-chevron-right"></i></a>
								</div>								
							</div>
						</div>
						<div class="bg-white shadow-sm ac_aside_b2 mb-3">
							<div class="ac_aside_b2_child border border-left-0 border-right-0 border-top-0">
								<div class="ac_aside_b2_child_b1 p-3">
									<a href="#" class="font-weight-bold"><img class="mr-2" src="img/order_details/coins.png" width="20"> MY ORDERS <i class="fa fa-chevron-right float-right"></i></a>
								</div>
								<ul class="nav flex-column aside_ul">
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Profile Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Manage Address <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Pan Card Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
								</ul>
							</div>
							<div class="ac_aside_b2_child border border-left-0 border-right-0 border-top-0">
								<div class="ac_aside_b2_child_b1 p-3">
									<a href="#" class="font-weight-bold"><img class="mr-2" src="img/order_details/coins.png" width="20"> MY ORDERS <i class="fa fa-chevron-right float-right"></i></a>
								</div>
								<ul class="nav flex-column aside_ul">
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Profile Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Manage Address <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Pan Card Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
								</ul>
							</div>
							<div class="ac_aside_b2_child border border-left-0 border-right-0 border-top-0">
								<div class="ac_aside_b2_child_b1 p-3">
									<a href="#" class="font-weight-bold"><img class="mr-2" src="img/order_details/coins.png" width="20"> MY ORDERS <i class="fa fa-chevron-right float-right"></i></a>
								</div>
								<ul class="nav flex-column aside_ul">
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Profile Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Manage Address <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Pan Card Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
								</ul>
							</div>
							<div class="ac_aside_b2_child border border-left-0 border-right-0 border-top-0">
								<div class="ac_aside_b2_child_b1 p-3">
									<a href="#" class="font-weight-bold"><img class="mr-2" src="img/order_details/coins.png" width="20"> MY ORDERS <i class="fa fa-chevron-right float-right"></i></a>
								</div>
								<ul class="nav flex-column aside_ul">
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Profile Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Manage Address <span class="small float-right text-success">₹ 100</span></a>
									</li>
									<li>
										<a class="btn pl-5 text-left btn-block rounded-0" href="#">Pan Card Information <span class="small float-right text-success">₹ 100</span></a>
									</li>
								</ul>
							</div>
							<div class="ac_aside_b2_child border border-left-0 border-right-0 border-top-0">
								<div class="ac_aside_b2_child_b1 p-3">
									<a href="#" class="font-weight-bold"><img class="mr-2" src="img/order_details/coins.png" width="20"> Log Out </a>
								</div>
							</div>
						</div>
						<div class="p-3 bg-white small shadow-sm ac_aside_b3">
							<div class="mb-2">Frequently Visited:</div>
							<div>
								<a href="#" class="text-secondary">Change Password</a>
								<a href="#" class="text-secondary">Track Order</a>
								<a href="#" class="text-secondary">Help Center</a>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-md-9">
					<section class="bg-white shadow-sm wishlist_section">
						<div class="wl_not_empty">
							<div class="border border-top-0 border-left-0 border-right-0 pl-4 pr-4 pt-3 pb-3 font-weight-bold">My Wishlist (1)</div>
							<div class="row">
								<div class="col-md-2 p-3 text-center">
									<img class="img-fluid w-50" src="img/wishlist/watch.jpeg">
								</div>
								<div class="col-md-9 p-3">
									<a href="#" class="btn pl-0">Fogg 1164-BR Brown Day and Date Unique New Analog Watch  - For Men</a>
									<h6>
										<span class="badge badge-success">4.3 <i class="fa fa-star"></i></span> &nbsp;<span class="text-secondary mr-2">(2,12,069)</span> <img width="100" class="img-fluid" src="img/search/banner.png">
									</h6>
									<div>
										<strong class="text-dark">₹89,990</strong>&nbsp; <del class="text-secondary">₹1,09,999</del>&nbsp; <span class="text-success">18% off</span>
									</div>
								</div>
								<div class="col-md-1 p-3">
									<a href="#">
										<i class="fa fa-trash text-secondary"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="wl_empty text-center p-5">
							<img src="img/wishlist/wishlist_empty.png">
							<h4 class="font-weight-bold">Empty Wishlist</h4>
							<p>You have no item in your wishlist. Start adding!</p>
						</div>
					</section>
				</div>
			</div>
		</div><!-- End of .a_cont -->
		<footer class="abs_footer">
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
		<!--------------------- Zoom Plugin Start ---->
		
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
		<!--------------------- Zoom Plugin End ---->
		
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
			
	
		</script>
	</body>
</html>