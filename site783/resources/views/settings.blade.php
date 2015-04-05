<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bxslider.css">
	<link rel="stylesheet" href="css/fs.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/main.css">
	<!--[if IE]>
	  <link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.flexisel.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	
	<title>Laptops & Notebooks</title>
</head>
<body>
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
					<ul class="up-nav">
						<li><a href="news">News</a></li>
						<li><a href="account">Settings</a></li>
					</ul>
				</div>
				<div class="right">
					<div class="userInfo">
						<div class="avatar">
							<a href="/settings">
								@if($getUser['image'] == null)
								<img src="/images/noavatar.png" alt="">
								@else
								<img src="/uImages/{{$getUser['id']}}/{{$getUser['image']}}" alt="">
								@endif
							</a>
						</div>
						<div class="userData">
							<span>{{$getUser['fname']}}</span>
							<span>{{$getUser['lname']}}</span>
							<span class="devider">|</span>
							<span>{{$getUser['email']}}</span>
							<a href="#" class="logout-link">Logout</a>
						</div>
					</div>
				</div>
				<div class="both"></div>
			</div>
		</div>
		
		<!--USER-SETTINGS-->
		<div class="inner">
			<form action="#" id="account-form" enctype="multipart/form-data">
				<div class="left reg-form">
					<label class="label2">Account Info</label><br>

					<input type="text" name="fName" class="input" value="{{$getUser['fname']}}">
					<input type="text" name="lName" class="input" value="{{$getUser['lname']}}"><br>
					<input type="text" name="uLogin" class="input" value="{{$getUser['login']}}">
					<input type="text" name="uEmail" class="input" value="{{$getUser['email']}}"><br/>
					<input type="password" name="uOldPass" class="input" placeholder="Old Password *"><br>
					<input type="password" name="uPass" class="input" placeholder="New Password *">
					<input type="password" name="uRPass" class="input" placeholder="Retry Password *"><br>

				</div>
				<div class="right reg-form">
					<label class="label2">User Info</label><br>
					<input type="hidden" name="userId" value="{{$getUser['id']}}"/>
					<label class="label3">Age:</label>
					<select class="select" name="uAgeD">
						@for($i=1; $i < 32; $i++)
						<option @if($i == $getUser['ageD']) selected @endif value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
					<select class="select" name="uAgeM">
						@foreach($months as $month) 
						<option @if($month == $getUser['ageM']) selected @endif value="{{$month}}">{{$month}}</option>
						@endforeach
					</select>
					<select class="select" name="uAgeY">
						@for($i=1980; $i < 1997; $i++)
						<option @if($i == $getUser['ageY']) selected @endif value="{{$i}}">{{$i}}</option>
						@endfor
					</select><br>
					<label class="label3">Aducation:</label>
					<label for="aduc1" class="label4">High</label><input type="radio" name="uAduc" id="aduc1" value="high" @if('high' == $getUser['aducation']) checked @endif />
					<label for="aduc2" class="label4">Middle</label><input type="radio" name="uAduc" id="aduc2" value="middle" @if('middle' == $getUser['aducation']) checked @endif />
					<label for="aduc3" class="label4">S-Middle</label><input type="radio" name="uAduc" id="aduc3" value="s-middle"  @if('s-middle' == $getUser['aducation']) checked @endif />
					<label for="aduc4" class="label4">Base</label><input type="radio" name="uAduc" id="aduc4" value="base" @if('base' == $getUser['aducation']) checked @endif /><br>
					<label class="label3">Hobbies:</label>
					<label for="hb1" class="label4">sport</label><input type="checkbox" value="sport" name="uHobb[]" id="hb1" @if(in_array('sport',$hobbies)) checked @endif >
					<label for="hb2" class="label4">music</label><input type="checkbox" value="music" name="uHobb[]" id="hb2" @if(in_array('music',$hobbies)) checked @endif >
					<label for="hb3" class="label4">books</label><input type="checkbox" value="books" name="uHobb[]" id="hb3" @if(in_array('books',$hobbies)) checked @endif >
					<label for="hb4" class="label4">nothing</label><input type="checkbox" value="nothing" name="uHobb[]" id="hb4" @if(in_array('nothing',$hobbies)) checked @endif >
					<br>
					<label for="ui_file" class="label3">Image:</label>
					<input id="u_image" type="file" name="image"><br>
					<div id="progress">
					    <div class="bar" style="width: 0%;"></div>
					</div>
				</div>
				<div class="both"></div>
				<div class="center">
					<button id="go_update" class="go_auth">
						Submit<i class="auth_ico"></i>
					</button>
				</div>
			</form>
			
		</div>

	</section>

	<footer>

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
				</div>
			</div>
		</div>
	</footer>
</body>
</html>