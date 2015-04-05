<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/bxslider.css">
	<link rel="stylesheet" href="/css/fs.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/owl.theme.css">
	<link rel="stylesheet" href="/css/main.css">
	<!--[if IE]>
	  <link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->
	<script src="/js/jquery-1.11.2.min.js"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<script src="/js/jquery.flexisel.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.easing.js"></script>
	<script src="/js/main.js"></script>
	
	<title>Laptops & Notebooks</title>
</head>
<body>
	<div id="log"></div>
	<header>
		<!--TOP-NAV-->
		<div class="outer-header">
			<div class="inner">
				<div class="left">
					<a href="/" class="logo-link"></a>
					<span class="slogan">so turn the lights out</span>
				</div>
				
				<div class="right">
					<nav>
						<ul class="top-nav">
							<li><a href="#">wish list (0)</a></li>
							<li><a href="#">my account</a></li>
							<li><a href="#">shopping cart</a></li>
							<li><a href="#">checkout</a></li>
							<li><a href="#"  class="checkout_ico"></a><span class="checkout_cr">0</span></li>
						</ul>
					</nav>
				</div>
				<div class="both"></div>
			</div>
		</div>
	</header>
	<section class="main-content">
		<!--TOP-CAT-->
		<div class="outer-top-cat">
			<div class="inner">
				<ul class="top-cat">
					<li><a href="/"><i class="home-link"></i>Desktops</a></li>
					<li><a href="#">Laptops&Notebooks</a>
						<ul class="sub-cat">
							<li><a href="#">Sony(1)</a></li>
							<li><a href="#">Android(2)</a></li>
							<li><a href="#">Apple(3)</a></li>
							<li><a href="#">Acer(4)</a></li>
							<li><a href="#">HP(5)</a></li>
							<li><a href="#">Intel(7)</a></li>
						</ul>
					</li>
					<li><a href="#">Components</a></li>
					<li><a href="#">Tablets</a></li>
					<li><a href="#">Software</a></li>
					<li><a href="#">Phones&PDAs</a></li>
					<li><a href="#">Cameras</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="both"></div>
			</div>
		</div>
		
		<!--USER-PANEL-->
		<div class="outer-usp">
			<div class="inner">
				<div class="left">
					<!--if user not authorized-->
					@if(Session::get('login') == null)
					<span class="welcome_text">Welcome visitor you can login or create an account.</span>
					@endif
				</div>
				<div class="right">
					<!--if user not authorized-->
					@if(Session::get('login') == null)

					<div class="up-login-form">
						
						<div class="soc-btns">
							<ul class="sbtns-list">
								<li><a href="#" class="tsp_rss"></a></li>
								<li><a href="#" class="tsp_fb"></a></li>
								<li><a href="#" class="tsp_tw"></a></li>
								<li><a href="#" class="tsp_sp"></a></li>
							</ul>
						</div>
						<form action="#" enctype="multipart/form-data" id="auth-form" class="left">
							<label for="login" class="label left">Sign in:</label>
							<input type="text" name="login" class="input left" placeholder="Login">
							<input type="password" name="password" class="input left" placeholder="Password">
							<button id="go-auth" class="go_auth left">
								<i class="auth_ico"></i>
							</button>
						</form>
						

					</div>
						
					@else <!--if user authorized-->
	
					<div class="userInfo">
						<div class="avatar">
							<a href="/settings">
								@if($userData['image'] == null)
								<img src="/images/noavatar.png" alt="">
								@else
								<img src="/uImages/{{$userData['id']}}/{{$userData['image']}}" alt="">
								@endif
							</a>
						</div>
						<div class="userData">
							<span>{{$userData['fname']}}</span>
							<span>{{$userData['lname']}}</span>
							<span class="devider">|</span>
							<span>{{$userData['email']}}</span>
							<a href="#" class="logout-link">Logout</a>
						</div>
					</div>

					@endif

				</div>
				<div class="both"></div>
			</div>
		</div>
		
		<!--MAIN-SLIDER-->
		<div id="slider">
			<ul class="bxslider">
			    <li>
			    	<img src="/images/slider/pic1.png" />
			    	<div class="caption">
			    		<div class="caption-desc right">
				    		<span>Childish Gambino - Camp now available for just $9.99</span>
				    		<a href="#" class="pur_btn">purchase</a>
			    		</div>
			    	</div>
			    </li>
			    <li>
			    	<img src="/images/slider/pic1.png" />
			    	<div class="caption">
			    		<div class="caption-desc right">
				    		<span>Childish Gambino - Camp now available for just $19.99</span>
				    		<a href="#" class="pur_btn">purchase</a>
			    		</div>
			    	</div>
			    </li>
			    <li>
			    	<img src="/images/slider/pic1.png" />
			    	<div class="caption">
			    		<div class="caption-desc right">
				    		<span>Childish Gambino - Camp now available for just $29.99</span>
				    		<a href="#" class="pur_btn">purchase</a>
			    		</div>
			    	</div>
			    </li>
			    <li>
			    	<img src="/images/slider/pic1.png" />
			    	<div class="caption">
			    		<div class="caption-desc right">
				    		<span>Childish Gambino - Camp now available for just $39.99</span>
				    		<a href="#" class="pur_btn">purchase</a>
			    		</div>
			    	</div>
			    </li>
			</ul>
		</div>
		
		<!--FEATURED-->
		<div class="box inner">
			<span class="tog_btn tgbm"></span>
			<div class="box-heading">
				<h2 class="th-1">featured</h2>
			</div>
			<div class="box-content inner">
				<div class="item">
					<div class="img">
						<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
					<div></div>
					<a href="#" class="atb add-to-compaire">Add to Compare</a>
					<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
					</div>
					<div class="title">Mascot Kitty - White</div>
					<div class="left">
						<div class="ac_btn">add to cart</div>
					</div>
					<div class="right">
						<div class="price">
							<div class="cur_val">$</div>
							<div class="text_price">20</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
					<div></div>
					<a href="#" class="atb add-to-compaire">Add to Compare</a>
					<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
					</div>
					<div class="title">Mascot Kitty - White</div>
					<div class="left">
						<div class="ac_btn">add to cart</div>
					</div>
					<div class="right">
						<div class="price">
							<div class="cur_val">$</div>
							<div class="text_price">30</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
					<div></div>
					<a href="#" class="atb add-to-compaire">Add to Compare</a>
					<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
					</div>
					<div class="title">Mascot Kitty - White</div>
					<div class="left">
						<div class="ac_btn">add to cart</div>
					</div>
					<div class="right">
						<div class="price">
							<div class="cur_val">$</div>
							<div class="text_price">40</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="img">
						<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
					<div></div>
					<a href="#" class="atb add-to-compaire">Add to Compare</a>
					<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
					</div>
					<div class="title">Mascot Kitty - White</div>
					<div class="left">
						<div class="ac_btn">add to cart</div>
					</div>
					<div class="right">
						<div class="price">
							<div class="cur_val">$</div>
							<div class="text_price">50</div>
						</div>
					</div>
				</div>
				<div class="both"></div>
			</div>
		</div>
		<!--BRANDS-->
		<div class="box inner">
			<span class="tog_btn tgbm"></span>
			<div class="box-heading">
				<h2 class="th-2">brands</h2>
			</div>
			<div class="box-content inner">
				<ul id="brands"> 
				    <li><a href="#"><img src="images/slider2/logo-nyt.png" /></a></li>
				    <li><a href="#"><img src="images/slider2/logo-nike.png" /></a></li>
				    <li><a href="#"><img src="images/slider2/logo-microsoft.png" /></a></li>
				    <li><a href="#"><img src="images/slider2/logo-android.png" /></a></li>
				    <li><a href="#"><img src="images/slider2/logo-amazon.png" /></a></li>
				</ul>
				<div class="both"></div>
			</div>
		</div>
		
		<!--LATEST-->
		<div class="box inner">
			<span class="tog_btn tgbm"></span>
			<div class="box-heading">
				<h2 class="th-3">latest</h2>
			</div>
			<div class="box-content inner">
				<div id="owl-example" class="owl-carousel">
					<div class="item">
						<div class="img">
							<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
						<div></div>
						<a href="#" class="atb add-to-compaire">Add to Compare</a>
						<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
						</div>
						<div class="title">Mascot Kitty - White</div>
						<div class="left">
							<div class="ac_btn">add to cart</div>
						</div>
						<div class="right">
							<div class="price">
								<div class="cur_val">$</div>
								<div class="text_price">20</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
						<div></div>
						<a href="#" class="atb add-to-compaire">Add to Compare</a>
						<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
						</div>
						<div class="title">Mascot Kitty - White</div>
						<div class="left">
							<div class="ac_btn">add to cart</div>
						</div>
						<div class="right">
							<div class="price">
								<div class="cur_val">$</div>
								<div class="text_price">30</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
						<div></div>
						<a href="#" class="atb add-to-compaire">Add to Compare</a>
						<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
						</div>
						<div class="title">Mascot Kitty - White</div>
						<div class="left">
							<div class="ac_btn">add to cart</div>
						</div>
						<div class="right">
							<div class="price">
								<div class="cur_val">$</div>
								<div class="text_price">40</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
						<div></div>
						<a href="#" class="atb add-to-compaire">Add to Compare</a>
						<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
						</div>
						<div class="title">Mascot Kitty - White</div>
						<div class="left">
							<div class="ac_btn">add to cart</div>
						</div>
						<div class="right">
							<div class="price">
								<div class="cur_val">$</div>
								<div class="text_price">50</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="img">
							<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="Mascot Kitty - White">
						<div></div>
						<a href="#" class="atb add-to-compaire">Add to Compare</a>
						<a href="#" class="atb add-to-wishlist">Add to Wishlist</a>
						</div>
						<div class="title">Mascot Kitty - White</div>
						<div class="left">
							<div class="ac_btn">add to cart</div>
						</div>
						<div class="right">
							<div class="price">
								<div class="cur_val">$</div>
								<div class="text_price">60</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--PANAGINATION-->
		<div class="panagination inner">
			<ul>
				<li><a href="#" class="disable"><</a></li>
				<li><a href="#" class="cur_page">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">></a></li>
			</ul>
		</div>
		
		@if(Session::get('login') == null)
		<div class="outer-usp reg-form">
			<div class="inner reg-form">
				<div>
					<span class="welcome_text">If you don`t have account - Sign Up:</span>
				</div>
				<div>
				<div class="inner">
			<form action="#" id="reg-form" enctype="multipart/form-data">
				<div class="left reg-form">
					<label class="label2">Account Settings</label><br>
					<input type="text" name="fName" class="input" placeholder="First Name *">
					<input type="text" name="lName" class="input" placeholder="Last Name *"><br>
					<input type="text" name="uLogin" class="input" placeholder="Login *">
					<input type="text" name="uEmail" class="input" placeholder="Email *"><br/>
					<input type="password" name="uPass" class="input" placeholder="Password *">
					<input type="password" name="uRPass" class="input" placeholder="Retry Password *"><br>
					
				</div>
				<div class="right reg-form">
					<label class="label2">User Settings</label><br>
					<label class="label3">Age:</label>
					<select class="select" name="uAgeD">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select class="select" name="uAgeM">
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<select class="select" name="uAgeY">
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
					</select><br>
					<label class="label3">Aducation:</label>
					<label for="aduc1" class="label4">High</label><input type="radio" name="uAduc" id="aduc1" value="high" checked>
					<label for="aduc2" class="label4">Middle</label><input type="radio" name="uAduc" id="aduc2" value="middle">
					<label for="aduc3" class="label4">S-Middle</label><input type="radio" name="uAduc" id="aduc3" value="s-middle">
					<label for="aduc4" class="label4">Base</label><input type="radio" name="uAduc" id="aduc4" value="base"><br>
					<label class="label3">Hobbies:</label>
					<label for="hb1" class="label4">sport</label><input type="checkbox" value="sport" name="uHobb[]" id="hb1" checked>
					<label for="hb2" class="label4">music</label><input type="checkbox" value="music" name="uHobb[]" id="hb2">
					<label for="hb3" class="label4">books</label><input type="checkbox" value="books" name="uHobb[]" id="hb3">
					<label for="hb4" class="label4">nothing</label><input type="checkbox" value="nothing" name="uHobb[]" id="hb4">
					<br>
					<label for="ui_file" class="label3">Image:</label>
					<input id="u_image" type="file" name="image"><br>
					<div id="progress">
					    <div class="bar" style="width: 0%;"></div>
					</div>
					<div class="captcha_div">
						<label class="label3 left">Captcha:</label>
						<div class="captcha_img left"><img src="{{URL::to('captcha')}}"></div>
						<textarea class="captcha_text left" name="captcha_text"></textarea>
						<div class="both"></div>							
					</div>											
				</div>
				<div class="both"></div>
				<div class="center">
					<button class="go_auth" id="go-reg">
							Submit<i class="auth_ico"></i>
					</button>
				</div>
			</form>		
			<div class="both"></div>			
		</div>
		@endif
	</section>

	<footer>
		<!--SUB-FOOTER-->
		<div class="sub-footer-outer">
			<div class="inner">
				<div class="sf-item">
					<span class="ico_lb"></span>
					<div class="sf-item-text">
						<h3>suspendisse sed</h3>
						<p>
							Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, 
						</p>
					</div>		
				</div>

				<div class="sf-item">
					<span class="ico_bolt"></span>
					<div class="sf-item-text">
						<h3>suspendisse sed</h3>
						<p>
							Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, 
						</p>
					</div>		
				</div>

				<div class="sf-item">
					<span class="ico_power"></span>
					<div class="sf-item-text">
						<h3>suspendisse sed</h3>
						<p>
							Aliquam dignissim porttitor tortor non fermentum. Curabitur in magna lectus. Duis sed eros diam. Lorem ipsum dolor sit amet, 
						</p>
					</div>		
				</div>
				<div class="both"></div>
			</div>
		</div>

		<!--MAIN-FOOTER-->
		<div class="main-footer-outer">
			<div class="inner">
				<div class="mf-item">
					<h4>about us</h4>
					<p>
						Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.
					</p>
				</div>
				<div class="mf-item">
					<h4>information</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="mf-item">
					<h4>customer service</h4>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="mf-item">
					<h4>my account</h4>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">Wishlist</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="mf-item">
					<h4>extras</h4>
					<ul>
						<li><a href="#">Brands</a></li>
						<li><a href="#">Gift Vouchers</a></li>
						<li><a href="#">Affilates</a></li>
						<li><a href="#">Specials</a></li>
					</ul>
				</div>
				<div class="both"></div>
			</div>
		</div>

		<!--BOTTOM-FOOTER-->
		<div class="btm-footer-outer">
			<div class="inner">
				<div class="copyright-text">
					<div class="left">
						<p>copyright of <a href="#">bonfire</a> <span>2012</span> All Rights Reserved</p>
					</div>
					<div class="right">
						<p>powered by <a href="#">opencart</a></p>
					</div>
					<div class="both"></div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>