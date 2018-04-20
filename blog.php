<?php 
    include_once("includes/session.php");
    include_once("includes/config.php");

    //Select Blog Items
    $getblog = "SELECT * FROM blog";
    $gettingblog = mysql_query($getblog);
?>
<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>Blog - Alexis Yoga &amp; Beyond</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!--[if lte IE 8]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/bxslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/selectric.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/adaptive.css" media="screen" />

		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.selectric.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
<body class="events">
	<header id="header" class="clear">
		<div class="headerWrap clear">
			<a href="index.html" class="logo">
				<!-- You can also use image as a logo the example below -->
				<img class="logo-white" src="images/logo-white.png" alt="">
				<img class="logo-black" src="images/logo-black.png" alt="">
				<!--
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="122px" height="32px" viewBox="0 0 122 32" enable-background="new 0 0 122 32" xml:space="preserve">
					<path fill="#333333" d="M31.426 11.797c-0.161-0.59-0.355-1.173-0.589-1.735c-0.449-1.152-1.045-2.225-1.748-3.223 c-0.442-0.643-0.938-1.245-1.467-1.808C24.695 1.9 20.6 0 16 0C11.413 0 7.3 1.9 4.4 5 C3.832 5.6 3.3 6.2 2.9 6.839c-0.703 0.998-1.292 2.07-1.748 3.223c-0.234 0.563-0.422 1.146-0.583 1.7 C0.188 13.1 0 14.5 0 15.997c0 0.7 0 1.4 0.1 2.109c0.014 0.1 0 0.2 0.1 0.4 c0.06 0.4 0.1 0.9 0.3 1.348c0.013 0 0 0.1 0 0.107h31.004c0.014-0.041 0.014-0.067 0.02-0.107 c0.121-0.436 0.214-0.885 0.275-1.341c0.02-0.12 0.04-0.241 0.047-0.361c0.114-0.697 0.154-1.4 0.154-2.109 C31.989 14.5 31.8 13.1 31.4 11.797z M1.983 18.106C1.909 17.7 1.9 17.3 1.8 16.9 c-0.02-0.295-0.034-0.603-0.034-0.903c0-0.302 0.014-0.616 0.034-0.904c0.067-1.119 0.268-2.197 0.569-3.223 c0.201-0.623 0.435-1.226 0.703-1.809C3.65 8.9 4.3 7.8 5.2 6.839c0.563-0.663 1.172-1.266 1.842-1.808 c2.438-2.017 5.573-3.223 8.982-3.223c3.396 0 6.5 1.2 9 3.223c0.676 0.5 1.3 1.1 1.8 1.8 c0.824 1 1.5 2.1 2.1 3.223c0.274 0.6 0.5 1.2 0.7 1.809c0.302 1 0.5 2.1 0.6 3.2 c0.02 0.3 0 0.6 0 0.904c0 0.301-0.007 0.608-0.027 0.903c-0.034 0.409-0.074 0.811-0.141 1.206H1.983z M8.607 30.2 C10.824 31.3 13.3 32 16 32c2.666 0 5.17-0.671 7.381-1.822H8.607z M30.75 22.133c-0.254 0.623-0.542 1.239-0.884 1.8 H2.124c-0.342-0.563-0.636-1.179-0.891-1.802H30.75z M28.338 26.159c-0.228 0.281-0.469 0.535-0.71 0.8 c-0.328 0.348-0.669 0.683-1.031 1.004H5.392c-0.362-0.321-0.704-0.656-1.038-1.004c-0.241-0.269-0.482-0.522-0.704-0.804H28.338z M55.652 23.104l-1.306-3.034h-5.894l-1.306 3.034h-3.342l6.075-14.061h3.041l6.075 14.061H55.652z M51.406 13.23l-1.768 4.1 h3.523L51.406 13.23z M64.814 11.851c-0.295 0.247-0.455 0.575-0.455 0.984c0 0.4 0.2 0.7 0.6 1 c0.361 0.2 1.2 0.5 2.5 0.852c1.34 0.3 2.4 0.8 3.1 1.479c0.75 0.7 1.1 1.6 1.1 2.9 c0 1.261-0.469 2.285-1.42 3.069c-0.951 0.783-2.184 1.172-3.737 1.172c-2.224 0-4.233-0.824-6.008-2.472l1.868-2.292 c1.514 1.3 2.9 2 4.2 1.99c0.575 0 1.031-0.12 1.353-0.375c0.335-0.247 0.509-0.582 0.509-1.005s-0.188-0.757-0.535-1.005 c-0.349-0.248-1.045-0.503-2.063-0.757c-1.634-0.389-2.84-0.891-3.59-1.514c-0.764-0.623-1.146-1.608-1.146-2.94 c0-1.333 0.482-2.365 1.44-3.089c0.964-0.723 2.156-1.085 3.59-1.085c0.938 0 1.9 0.2 2.8 0.5 c0.938 0.3 1.8 0.8 2.5 1.366l-1.594 2.298c-1.219-0.931-2.479-1.393-3.791-1.393 C65.538 11.5 65.1 11.6 64.8 11.851z M85.229 23.104l-1.313-3.034h-5.895l-1.313 3.034h-3.336l6.082-14.061h3.041 l6.068 14.061H85.229z M80.983 13.23l-1.782 4.079h3.537L80.983 13.23z M101.036 9.043h3.135v14.061h-3.135l-6.697-8.809v8.809 h-3.135V9.043h2.934l6.898 9.057V9.043z M118.665 23.104l-1.313-3.034h-5.894l-1.313 3.034h-3.322l6.068-14.061h3.04L122 23.1 H118.665z M114.418 13.23l-1.768 4.079h3.522L114.418 13.23z"/>
				</svg>
				-->
			</a>
			<nav class="mainMenu">
				<ul class="clear">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
						<ul>
							<li><a href="mystory.html">Meet Alexis</a></li>
							<li><a href="recipes.html">Healthy Food Recipes</a></li>
						</ul>
					</li>
					<li>
						<a href="classes.html">Classes</a>
					</li>
					<li>
						<a href="gallery.html">Gallery</a>
					</li>
					<li class="current-menu-item">
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
			<span class="showMobileMenu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</span>
		</div>
	</header>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/blog_01.jpg);">
		</div>
		<div class="contentWrap">
			<div class="pagePanel clear">
				<div class="pageTitle">Blog Posts</div>
				<div class="categoryList">
					<span>Category <i></i></span>
					<ul>
						<li class="current"><a href="#">Latest</a></li>
						<li><a href="#">Popular</a></li>
						<li><a href="#">Most Viewed</a></li>
					</ul>
				</div>
			</div>
			<div class="eventsWrap">
				<div class="eventItem clear">
					<a href="#" class="eventItemImg">
						<img src="images/content/eventsItem.jpg" alt="">
					</a>
					<div class="eventItemDesc">
						<time class="eventItemTime" datetime="2018-02-01">February 1, 2018 12:00 PM</time>
						<h3><a href="#">What you need to know about Pre-Natal Yoga</a></h3>
						<p>Practice loving compassion both for you and your baby. Yoga stretches is one of the best thing that you can do at anytime and by yourself....</p>
						<a href="#" class="eventLearnMore">learn more
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
									<path fill="#D73C19" d="M16.558 11.5l6.884 6.494l1.059 0.999v0.015L16.558 26.5L15.5 25.486l6.882-6.494L15.5 12.5L16.558 11.5z"/>
								</svg>
							</i>
						</a>
					</div>
				</div>
				<div class="eventItem clear">
					<a href="#" class="eventItemImg">
						<img src="images/content/eventsItem2.jpg" alt="">
					</a>
					<div class="eventItemDesc">
						<time class="eventItemTime" datetime="2018-01-17">January 17, 2018 12:00 PM</time>
						<h3><a href="#">Why you shouldn't go to Yoga</a></h3>
						<p>Despite the controversy, yoga is beneficial to kids in many ways. Because children encounter emotional, social and physical challenges or...</p>
						<a href="#" class="eventLearnMore">learn more
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
									<path fill="#D73C19" d="M16.558 11.5l6.884 6.494l1.059 0.999v0.015L16.558 26.5L15.5 25.486l6.882-6.494L15.5 12.5L16.558 11.5z"/>
								</svg>
							</i>
						</a>
					</div>
				</div>
				<div class="eventItem clear">
					<a href="#" class="eventItemImg">
						<img src="images/content/eventsItem3.jpg" alt="">
					</a>
					<div class="eventItemDesc">
						<time class="eventItemTime" datetime="2015-02-01">February 1, 2015 12:00 PM</time>
						<h3><a href="#">Yoga at 50</a></h3>
						<p>Yoga has the capacity to increase your flexibility, whatever your age level of fitness. You don’t have to be in your 30s before starting. Yoga is proven stress reliever, boost willpower and great for bone health..</p>
						<a href="#" class="eventLearnMore">learn more
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
									<path fill="#D73C19" d="M16.558 11.5l6.884 6.494l1.059 0.999v0.015L16.558 26.5L15.5 25.486l6.882-6.494L15.5 12.5L16.558 11.5z"/>
								</svg>
							</i>
						</a>
					</div>
				</div>
				<span class="showMoreEvents">show more</span>
			</div>
			<div class="subscribeBox" style="background-image: url(images/content/subscribe.jpg);">
				<i class="iconEmail"></i>
				<h3>subscribe to our newsletter</h3>
				<p>Subscribe and take all information about our latest posts</p>
				<form class="clear">
					<input class="" type="text" name="" size="20" value="" placeholder="Your email ">
					<input class="subscribeSubmit" type="submit" value="subscribe">
				</form>
			</div>
		</div>

	</section>
	<footer id="footer" class="clear">
		<div class="footerSocial clear">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
		<ul class="footerMenu clear">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<div class="footerSubscribe">
			<form>
				<input class="" type="text" name="" size="20" value="" placeholder="Your email">
				<input class="btnSubscribe" type="submit" value="Subscribe">
			</form>
		</div>
		<div class="copyright">
			<p>Copyright &copy; 2018. Designed by <a href='http://365digitalworks.com/' target='_blank'>365digitalworks</a></p>
		</div>
	</footer>
	<div class="mobileMenu">
		<ul>
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="about.html">About</a>
				<ul class="sub-menu">
					<li><a href="mystory.html">Meet Alexis</a></li>
					<li><a href="recipes.html">Healthy Food Recipes</a></li>
				</ul>
			</li>
			<li>
				<a href="classes.html">Classes</a>
			</li>
			<li>
				<a href="gallery.html">Gallery</a>
			</li>
			<li class="current-menu-item">
				<a href="blog.php">Blog</a>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</div>
</body>
</html>
