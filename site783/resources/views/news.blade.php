

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
		<div class="overlay"></div>
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
								<img src="http://s016.radikal.ru/i336/1503/25/ae9d0ba655eb.png" alt="">
							</a>
						</div>
						<div class="userData">
							<span>{{Session::get('name')}}</span>
							<span>Sitnikov</span>
							<span class="devider">|</span>
							<span>asd@gmail.com</span>
							<a href="/logout" class="logout-link">Logout</a>
						</div>
					</div>
				</div>
				<div class="both"></div>
			</div>
		</div>
		
		<!--USER-SETTINGS-->
		<div class="inner">
			<h1>News <a href="#" class="add-news-link popup_link">+</a></h1>

			@foreach($news as $post)
			<?php $comments = App\AddNews::find($post['id']) -> comments; ?>
			<div class="news-item" data-id="{{$post['id']}}">
				<h2>{{$post['title']}}</h2>
				<p>{{$post['text']}}</p>
				<span class="news-date">{{$post['date']}}</span>|<span class="comments-text">Comments ({{count($comments)}})</span>
				<div class="news-comments">
					<div class="news-comments-inner">
						
						@foreach($comments as $comment)

						<div class="news-comment">
							<span class="news-comment-name">{{$comment['author']}}</span>
							<p class="news-comment-text">{{$comment['comment']}}</p>
							<span class="news-date">{{$comment['date']}}</span>
						</div>
						@endforeach
						<div class="news-comment-add">
							<textarea class="add_nc" name="add-new-comment-text"></textarea><br>
							<button id="add-comment"  class="go_auth">
								Submit<i class="auth_ico"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="both"></div>
			</div>
			@endforeach
			<div class="add-news-form popup-box">
				<span class="add-news-form-title">Add news</span>
				<form action="#" id="anf-form">
					<input type="text" class="anf-input" name="anf-title" placeholder="Title..." required><br>
					<textarea class="anf-text" name="anf-text" placeholder="Text..." required></textarea><br>
					<button class="anf-btn" id="go-add">ADD NEWS</button>
				</form>
			</div>
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