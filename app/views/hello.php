<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MHR | My House Rating</title>
<!-- Load Icon Font -->
<link href="css/webfont.css" rel="stylesheet" type="text/css" />
<!-- Load CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<link id="alternate-css" href="css/orange.css" rel="stylesheet" type="text/css" />
<!-- Load jQuery library -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!-- Load MixItUup js -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<!-- Load EasyPieChart js -->
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<!-- Load js -->
<script type="text/javascript" src="js/custom.js"></script>
</head>
<!-- Start Body -->
<body>

<?php
// <editor-fold defaultstate="collapsed" desc="HEADER">
    
    ?>
	<!-- Start Hero -->
	<section class="hero">
		<!-- <video autoplay loop poster="img/video.jpg">
			<source src="img/video.f4v" type="video/f4v">
			<source src="img/video.mp4" type="video/mp4">
		</video> -->
		<div class="overlay"></div>
		<div class="topbar">
			<div class="width">
                             <img src="img/logo.png" alt="MyHouseRating" style="display: inline-block; width: 50px"/>
                   
                            <a href="#" >
                                
                    <h1 style="font-size: 24px; display: inline-block;color: #fff;font-weight: 300;text-shadow: 0 1px 8px rgba(0, 0, 0, 0.6);">My House Rating</h1>
                            </a>
				<nav class="menu">
					<a href="#latest" class="color-hover section-scroll">Récents</a>
					<a href="#help" class="color-hover section-scroll">Aide</a>
<!--					<a href="#services" class="color-hover section-scroll">Nous contacter</a>-->
					<!--<a href="#gallery" class="color-hover section-scroll">Gallery</a>-->
					<a href="javascript:void(0);" class="color-hover modal-open" data-selector="contact" data-name="">Nous contacter</a>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
		<div class="caption">
                    <!--Check out how people rated your future place.-->
                    <img src="img/logo.png" alt="MyHouseRating" style="display: inline-block; width: 100px"/>
                    <h1 style=" display: inline-block; color: #FFF;text-shadow: 0 1px 8px rgba(0, 0, 0, 0.6);">Lire les notes des anciens locataires!</h1>
			<!--</div>-->	
                        <form action="/s" style="margin-left: auto; margin-right: auto; width: 80%">
                            
		<input type="text"  id="INPUT_3" name="address" placeholder="Adresse" />
		<p id="P_4">
			Merci d'entrer un emplacement
		</p>
	
                             <input type="number"  id="INPUT_5" name="housNum"   placeholder="Numéro" required/>
	<!--<input type="text" id="INPUT_6" name="checkout" placeholder="Départ" />-->
	
	<!--<input type="hidden" name="source" value="bb" id="INPUT_25" />--> 
	<button type="submit" id="BUTTON_26" class="icon white"  data-icon="&#xe077;">
	</button>
</form>

                </div>

		<div class="down">
                    <!--SCROLL DOWN FOR MORE-->
			<h3>GLISSER VERS LE BAS</h3>
			<div data-icon="&#xe017;" class="icon bounce"></div>
		</div>
	</section>
<?php
        // </editor-fold>

// <editor-fold defaultstate="collapsed" desc="LATEST">
        ?>
	<section id="latest" class="fade width">
		<div class="divider">
                    <!--OUR LATEST WORK-->
			<h2 class="color-light">LES DERNIERES NOTES</h2>
		</div>
		<ul class="portfoliofilter">
                    <!--AllAll-->
			<li class="filter active color-light-bg" data-filter="design branding illustration">Tous</li>
                        <!--Best rating-->
			<li class="filter color-light-bg" data-filter="design">Mieux notés</li>
                        <!--worst-->
			<li class="filter color-light-bg" data-filter="branding">Les pires</li>
                        <!--In my town-->
			<li class="filter color-light-bg" data-filter="illustration">Dans ma ville</li>
		</ul>
		<ul class="portfolio">
			<li class="item portfolioitem design">
				<div class="item">
					<img src="img/portfolio.jpg">
					<div class="hover modal-open" data-selector="portfolio-item-1">
						<div class="info">
							<div data-icon="&#xe077;" class="icon white"></div>
							<h3 class="white">Minions</h3>
							<h6 class="color">design</h6>
						</div>
					</div>
				</div>
				<div id="portfolio-item-1" class="modal-content">
					<div class="portfolio-modal-item">
						<h1 class="color-dark">Project Name</h1>
						<h5 class="color">Project Name</h5>
						<img src="img/portfolio.jpg">
						<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolores, provident suscipit iusto earum nobis placeat.</p>
					</div>
				</div>
			</li>
			<li class="item portfolioitem design">
				<div class="item">
					<img src="img/portfolio.jpg">
					<div class="hover modal-open" data-selector="portfolio-item-2">
						<div class="info">
							<div data-icon="&#xe077;" class="icon white"></div>
							<h3 class="white">Minions</h3>
							<h6 class="color">branding</h6>
						</div>
					</div>
				</div>
				<div id="portfolio-item-2" class="modal-content">
					<div class="portfolio-modal-item">
						<h1 class="color-dark">Second Project Name</h1>
						<h5 class="color">Project Name</h5>
						<img src="img/portfolio.jpg">
						<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolores, provident suscipit iusto earum nobis placeat.</p>
					</div>
				</div>
			</li>
			<li class="item portfolioitem illustration">
				<div class="item">
					<img src="img/portfolio.jpg">
					<div class="hover modal-open" data-selector="portfolio-item-3">
						<div class="info">
							<div data-icon="&#xe077;" class="icon white"></div>
							<h3 class="white">Minions</h3>
							<h6 class="color">branding</h6>
						</div>
					</div>
				</div>
				<div id="portfolio-item-3" class="modal-content">
					<div class="portfolio-modal-item">
						<h1 class="color-dark">Third Project Name</h1>
						<h5 class="color">Project Name</h5>
						<img src="img/portfolio.jpg">
						<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolores, provident suscipit iusto earum nobis placeat.</p>
					</div>
				</div>
			</li>
			<li class="item portfolioitem branding">
				<div class="item">
					<img src="img/portfolio.jpg">
					<div class="hover modal-open" data-selector="portfolio-item-4">
						<div class="info">
							<div data-icon="&#xe077;" class="icon white"></div>
							<h3 class="white">Minions</h3>
							<h6 class="color">branding</h6>
						</div>
					</div>
				</div>
				<div id="portfolio-item-4" class="modal-content">
					<div class="portfolio-modal-item">
						<h1 class="color-dark">Fourth Project Name</h1>
						<h5 class="color">Project Name</h5>
						<img src="img/portfolio.jpg">
						<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolores, provident suscipit iusto earum nobis placeat.</p>
					</div>
				</div>
			</li>
			<div class="clear"></div>
		</ul>
	</section>
	<!-- End Work -->
        <?php
    // </editor-fold>
?>
        
	<!-- Start Repeater -->
	<div class="repeater color-ultralight-bg">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<h1 class="white">LAISSEZ UNE APPRECIATION !</h1>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
		<a class="get-in-touch modal-open" data-selector="contact" data-name="" href="javascript:void(0);">Contact Us</a>
	</div>
	<!-- End Repeater -->

        <?php
// <editor-fold defaultstate="collapsed" desc="HELP">

        ?>
	<!-- Start Team -->
	<section id="help" class="fade width">
		<div class="divider">
			<h2 class="color-light">Our Team</h2>
		</div>
		<div class="person">
			<div class="contact-person modal-open" data-selector="contact" data-name="John">
				<img src="img/person.jpg" alt="">
				<div class="hover color-bg">
					<div data-icon="&#xe055;" class="icon white"></div>
				</div>
			</div>
			<div class="info">
				<h2 class="color-dark">John Doe</h2>
				<h5 class="color">POSITION</h5>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					Culpa, quaerat, recusandae, sapiente vitae distinctio similique reiciendis.
					Aperiam totam laborum a atque et ad facilis.
					Reprehenderit optio aut quam maxime amet.
				</p>
				<a href="#" class="socialicon linkedin"></a>
				<a href="#" class="socialicon facebook"></a>
				<a href="#" class="socialicon twitter"></a>
				<a href="#" class="socialicon dribbble"></a>
				<a href="#" class="socialicon pinterest"></a>
			</div>
			<div class="clear"></div>
		</div>

		<div class="person">
			<div class="contact-person modal-open" data-selector="contact" data-name="John">
				<img src="img/person.jpg" alt="">
				<div class="hover color-bg">
					<div data-icon="&#xe055;" class="icon white"></div>
				</div>
			</div>
			<div class="info">
				<h2 class="color-dark">John Doe</h2>
				<h5 class="color">POSITION</h5>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					Culpa, quaerat, recusandae, sapiente vitae distinctio similique reiciendis.
					Aperiam totam laborum a atque et ad facilis.
					Reprehenderit optio aut quam maxime amet.
				</p>
				<a href="#" class="socialicon linkedin"></a>
				<a href="#" class="socialicon facebook"></a>
				<a href="#" class="socialicon twitter"></a>
				<a href="#" class="socialicon dribbble"></a>
				<a href="#" class="socialicon pinterest"></a>
			</div>
			<div class="clear"></div>
		</div>

		<div class="person">
			<div class="contact-person modal-open" data-selector="contact" data-name="John">
				<img src="img/person.jpg" alt="">
				<div class="hover color-bg">
					<div data-icon="&#xe055;" class="icon white"></div>
				</div>
			</div>
			<div class="info">
				<h2 class="color-dark">John Doe</h2>
				<h5 class="color">POSITION</h5>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					Culpa, quaerat, recusandae, sapiente vitae distinctio similique reiciendis.
					Aperiam totam laborum a atque et ad facilis.
					Reprehenderit optio aut quam maxime amet.
				</p>
				<a href="#" class="socialicon linkedin"></a>
				<a href="#" class="socialicon facebook"></a>
				<a href="#" class="socialicon twitter"></a>
				<a href="#" class="socialicon dribbble"></a>
				<a href="#" class="socialicon pinterest"></a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</section>
	<!-- End Team -->
<?php
        // </editor-fold>

        ?>
	<!-- Start Repeater -->
	<div class="repeater color-ultralight-bg">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<blockquote>Some random awesome and epic quote about design!</blockquote>
		<div data-icon="&#xe055;" class="icon color"></div>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
	</div>
	<!-- End Repeater -->

	<!-- Start Services -->
	<section id="services" class="fade width">
		<div class="divider">
			<h2 class="color-light">Our Services</h2>
		</div>

		<div class="services">
			<div class="service left">
				<div data-icon="&#xe019;" class="icon color"></div>
				<h2>Service</h2>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, cum, officia eos aperiam ex error voluptatem explicabo quisquam consequatur suscipit neque dolore voluptate numquam cupiditate repellendus odit ea soluta porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
				<div class="clear"></div>
			</div>
			<div class="service right">
				<div data-icon="&#xe014;" class="icon color"></div>
				<h2>Service</h2>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, cum, officia eos aperiam ex error voluptatem explicabo quisquam consequatur suscipit neque dolore voluptate numquam cupiditate repellendus odit ea soluta porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
				<div class="clear"></div>
			</div>
			<div class="service left">
				<div data-icon="&#xe039;" class="icon color"></div>
				<h2>Service</h2>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, cum, officia eos aperiam ex error voluptatem explicabo quisquam consequatur suscipit neque dolore voluptate numquam cupiditate repellendus odit ea soluta porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
				<div class="clear"></div>
			</div>
			<div class="service right">
				<div data-icon="&#xe055;" class="icon color"></div>
				<h2>Service</h2>
				<p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, cum, officia eos aperiam ex error voluptatem explicabo quisquam consequatur suscipit neque dolore voluptate numquam cupiditate repellendus odit ea soluta porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit.</p>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</section>
	<!-- End Services -->

	<!-- Start Repeater -->
	<div class="repeater color-ultralight-bg">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<blockquote>We have even more awesome skills!</blockquote>
		<div data-icon="&#xe090;" class="icon color"></div>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
	</div>
	<!-- End Repeater -->

	<!-- Start Gallery -->
<!--	<section id="gallery" class="fade width">
		<div class="divider">
			<h2 class="color-light">Our Gallery</h2>
		</div>
		<ul class="gallery">
			<li class="item">
				<img src="img/portfolio.jpg">
				<div class="hover modal-open" data-selector="gallery-item-1">
					<div class="info">
						<div data-icon="&#xe077;" class="icon"></div>
					</div>
				</div>
				<div id="gallery-item-1" class="modal-content">
					<div class="gallery-modal-item">
						<h1 class="color-light">Our Office 1</h1>
						<img src="img/portfolio.jpg">
					</div>
				</div>
			</li>
			<li class="item">
				<img src="img/portfolio.jpg">
				<div class="hover modal-open" data-selector="gallery-item-2">
					<div class="info">
						<div data-icon="&#xe077;" class="icon"></div>
					</div>
				</div>
				<div id="gallery-item-2" class="modal-content">
					<div class="gallery-modal-item">
						<h1 class="color-light">Our Office 2</h1>
						<img src="img/portfolio.jpg">
					</div>
				</div>
			</li>
			<li class="item">
				<img src="img/portfolio.jpg">
				<div class="hover modal-open" data-selector="gallery-item-3">
					<div class="info">
						<div data-icon="&#xe077;" class="icon"></div>
					</div>
				</div>
				<div id="gallery-item-3" class="modal-content">
					<div class="gallery-modal-item">
						<h1 class="color-light">Our Office 3</h1>
						<img src="img/portfolio.jpg">
					</div>
				</div>
			</li>
			<li class="item">
				<img src="img/portfolio.jpg">
				<div class="hover modal-open" data-selector="gallery-item-4">
					<div class="info">
						<div data-icon="&#xe077;" class="icon"></div>
					</div>
				</div>
				<div id="gallery-item-4" class="modal-content">
					<div class="gallery-modal-item">
						<h1 class="color-light">Our Office 4</h1>
						<img src="img/portfolio.jpg">
					</div>
				</div>
			</li>
		</ul>
		<div class="clear"></div>
	</section>-->
	<!-- End Gallery -->

	<!-- Start Repeater -->
	<div class="repeater color-ultralight-bg">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<h1 class="white">Liking what you see?</h1>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
		<a class="get-in-touch modal-open" data-selector="contact" data-name="" href="javascript:void(0);">Contact Us</a>
	</div>
	<!-- End Repeater -->

	<!-- Start Services -->
<!--	<section class="fade width">
		<div class="divider">
			<h2 class="color-light">Need Answers?</h2>
		</div>
		<div class="accordion faq">
			<div class="header">
				<div data-icon="&#xe023;" class="icon"></div>
				<h3>Random Question 1</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
				ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
				amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
				odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe023;" class="icon"></div>
				<h3>Random Question 2</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
				purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
				velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
				suscipit faucibus urna.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe023;" class="icon"></div>
				<h3>Random Question 3</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe023;" class="icon"></div>
				<h3>Random Question 4</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>
			</div>
		</div>
	</section>-->
	<!-- End Services -->
	
	<!-- Start Repeater -->
	<div class="repeater color-ultralight-bg">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<h1 class="white">Liking what you see?</h1>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
		<a class="get-in-touch modal-open" data-selector="contact" data-name="" href="javascript:void(0);">Contact Us</a>
	</div>
	<!-- End Repeater -->


<!--	<section class="fade width">
		<div class="divider">
			<h2 class="color-light">The Features</h2>
		</div>
		<h2 class="color-light">Buttons</h2>
		<div class="buttons">
			<a class="button black spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button blue spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button green spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button red spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button purple spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button orange spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<a class="button yellow spaced medium color-bg left" href="javascript:void(0);">Button</a>
			<div class="clear"></div>
			<a class="button black spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button blue spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button green spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button red spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button purple spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button orange spaced small color-bg left" href="javascript:void(0);">Button</a>
			<a class="button yellow spaced small color-bg left" href="javascript:void(0);">Button</a>
			<div class="clear"></div>
			<br>
		</div>
		<h2 class="color-light">Lists</h2>
		<div class="text">
			<ul class="left">
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ul>
			<ol class="left">
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ol>
			<ul class="custom check left">
				<li><div data-icon="&#xe020;"></div>List Item</li>
				<li><div data-icon="&#xe020;"></div>List Item</li>
				<li><div data-icon="&#xe020;"></div>List Item</li>
				<li><div data-icon="&#xe020;"></div>List Item</li>
				<li><div data-icon="&#xe020;"></div>List Item</li>
			</ul>
			<ul class="custom check left">
				<li><div data-icon="&#xe085;"></div>List Item</li>
				<li><div data-icon="&#xe085;"></div>List Item</li>
				<li><div data-icon="&#xe085;"></div>List Item</li>
				<li><div data-icon="&#xe085;"></div>List Item</li>
				<li><div data-icon="&#xe085;"></div>List Item</li>
			</ul>
			<ul class="custom highlight left">
				<li><div data-icon="&#xe069;"></div>List Item</li>
				<li><div data-icon="&#xe069;"></div>List Item</li>
				<li><div data-icon="&#xe069;"></div>List Item</li>
				<li><div data-icon="&#xe069;"></div>List Item</li>
				<li><div data-icon="&#xe069;"></div>List Item</li>
			</ul>
			<ul class="custom highlight left">
				<li><div data-icon="&#xe025;"></div>List Item</li>
				<li><div data-icon="&#xe025;"></div>List Item</li>
				<li><div data-icon="&#xe025;"></div>List Item</li>
				<li><div data-icon="&#xe025;"></div>List Item</li>
				<li><div data-icon="&#xe025;"></div>List Item</li>
			</ul>
			<ul class="custom left">
				<li><div data-icon="&#xe007;"></div>List Item</li>
				<li><div data-icon="&#xe007;"></div>List Item</li>
				<li><div data-icon="&#xe007;"></div>List Item</li>
				<li><div data-icon="&#xe007;"></div>List Item</li>
				<li><div data-icon="&#xe007;"></div>List Item</li>
			</ul>
			<ul class="custom left">
				<li><div data-icon="&#xe046;"></div>List Item</li>
				<li><div data-icon="&#xe047;"></div>List Item</li>
				<li><div data-icon="&#xe049;"></div>List Item</li>
				<li><div data-icon="&#xe050;"></div>List Item</li>
				<li><div data-icon="&#xe052;"></div>List Item</li>
			</ul>
			<div class="clear"></div>
		</div>
		<h2 class="color-light">Text</h2>
		<div class="text">
			<p class="color-light full"><b class="color">1/1</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, explicabo a totam possimus. Ipsum, exercitationem, pariatur iure iusto ullam nisi commodi explicabo eveniet optio blanditiis illum quos minima quam praesentium.</p>
			<div class="clear"></div>
		</div>
		<div class="text">
			<p class="color-light half"><b class="color">1/2</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, fugit, tempora, rerum, eius eaque culpa labore ipsa aut adipisci numquam laboriosam similique commodi voluptatem voluptas ipsum eligendi dolorum id iure.</p>
			<p class="color-light half"><b class="color">1/2</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, iste, minus quibusdam vel debitis non velit ab aperiam ratione similique harum cum! Culpa, tenetur quia dolorum. Voluptatum, ipsam nulla minima?</p>
			<div class="clear"></div>
		</div>
		<div class="text">
			<p class="color-light third"><b class="color">1/3</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, iusto quasi dolorum quisquam quos illum aperiam dolore molestias rem eveniet! Aperiam, cupiditate sit ipsa reiciendis dignissimos veniam id facere expedita!</p>
			<p class="color-light third"><b class="color">1/3</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, consequatur, itaque, ratione dolore saepe eius rem exercitationem maxime veniam consequuntur aperiam quae earum deserunt. Vitae ipsam esse vel ratione dolorum.</p>
			<p class="color-light third"><b class="color">1/3</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, incidunt, similique, sed ducimus esse nihil quia dolorum pariatur porro deleniti praesentium consectetur aperiam neque voluptate unde minus dolor blanditiis numquam.</p>
			<div class="clear"></div>
		</div>
		<div class="text">
			<p class="color-light fourth"><b class="color">1/4</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, sunt omnis laborum cumque modi error minima obcaecati ipsa? Placeat, aperiam, eos dolorem optio nam ex alias debitis modi hic accusantium.</p>
			<p class="color-light fourth"><b class="color">1/4</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, animi, nemo, doloribus quam quidem inventore labore ratione sunt et soluta consequuntur esse sed unde corporis blanditiis laudantium voluptas non voluptatum.</p>
			<p class="color-light fourth"><b class="color">1/4</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, adipisci voluptates aut inventore necessitatibus ex minus commodi quaerat obcaecati! Autem, velit impedit eveniet quod delectus ut in maiores! Natus, culpa!</p>
			<p class="color-light fourth"><b class="color">1/4</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, delectus error mollitia at nam ex repellat odio corporis magni deserunt facilis fuga sed molestiae. Repellendus maxime unde officiis culpa modi.</p>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>

		<h2 class="color-light">Accordion</h2>
		<div class="accordion">
			<div class="header">
				<div data-icon="&#xe065;" class="icon"></div>
				<h3>Header 1</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
				ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
				amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
				odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe065;" class="icon"></div>
				<h3>Header 2</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
				purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
				velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
				suscipit faucibus urna.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe065;" class="icon"></div>
				<h3>Header 3</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
			</div>
			<div class="header">
				<div data-icon="&#xe065;" class="icon"></div>
				<h3>Header 4</h3>
			</div>
			<div class="content">
				<p class="color-light">
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>
			</div>
		</div>
		
		<h2 class="color-light">Tabs</h2>
		<div class="tabs">
			<ul>
				<li><a class="button color-bg" href="#tabs-1">Tab 1</a></li>
				<li><a class="button color-bg" href="#tabs-2">Tab 2</a></li>
				<li><a class="button color-bg" href="#tabs-3">Tab 3</a></li>
			</ul>
			<div class="clear"></div>
			<div id="tabs-1">
				<p class="color-light">Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
			</div>
			<div id="tabs-2">
				<p class="color-light">Ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
			</div>
			<div id="tabs-3">
				<p class="color-light">Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
			</div>
		</div>

		<h2 class="color-light">Bars</h2>
		<div class="bars">
			<div class="progressbar color-ultralight-bg"><div style="width:30%;" class="progressbar-value color-bg"></div><div class="progressbar-label color-light">PHP</div></div>
			<div class="progressbar color-ultralight-bg"><div style="width:41%;" class="progressbar-value color-bg"></div><div class="progressbar-label color-light">CSS</div></div>
			<div class="progressbar color-ultralight-bg"><div style="width:70%;" class="progressbar-value color-bg"></div><div class="progressbar-label color-light">UI Design</div></div>
		</div>

		<h2 class="color-light">Blockquote</h2>
		<blockquote class="color">
			<div data-icon="&#xe055;" class="icon color-ultralight"></div>
			"Lorem ipsum dolor sit amet, consectetur adipisicing elit."
		</blockquote>

		<h2 class="color-light">Dropcaps</h2>
		<div class="text">
			<p class="color-light half"><b class="white dropcap color-bg">L</b>orem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, explicabo a totam possimus. Ipsum, exercitationem, pariatur iure iusto ullam nisi commodi explicabo eveniet optio blanditiis illum quos minima quam praesentium.</p>
			<p class="color-light half"><b class="white dropcap color">L</b>orem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, explicabo a totam possimus. Ipsum, exercitationem, pariatur iure iusto ullam nisi commodi explicabo eveniet optio blanditiis illum quos minima quam praesentium.</p>
			<div class="clear"></div>
		</div>
		
		<h2 class="color-light">Pie Charts</h2>
		<div class="charts">
			<div class="chart" data-percent="73"><h3 class="color-light">73%</h3></div>
			<div class="chart" data-percent="52"><h3 class="color-light">52%</h3></div>
			<div class="chart" data-percent="12"><h3 class="color-light">12%</h3></div>
			<div class="chart" data-percent="87"><h3 class="color-light">87%</h3></div>
			<div class="clear"></div>
		</div>
		
	</section>-->
        
      <div id="fb-root" style="display: none"></div>
                        <div class="fb-like" data-href="https://www.facebook.com/HouseRating"  data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> 

                        <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id))
                                            return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=654865737929714&version=v2.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                    </div>
     
 <?php
        // <editor-fold defaultstate="collapsed" desc="FOOTER">

        ?>
	<!-- Start Footer -->
	<div class="repeater color-ultralight-bg footer">
		<div class="repeater-bg"></div>
		<div class="repeater-overlay"></div>
		<div class="dots white left">.<br>.<br>.</div>
		<div class="dots white right">.<br>.<br>.</div>
		<div class="social">
			<a target="_blank" href="#" class="social email"></a>
			<a target="_blank" href="#" class="social twitter"></a>
			<a target="_blank" href="#" class="social facebook"></a>
		</div>
		<h5 class="white">Copyright © 2014 Paris | All rights reserved.</h5>
	</div>
	<!-- End Footer -->
<?php
        // </editor-fold>

        ?>
        
        
        
	<!-- Start Modal Overlay -->
	<div class="modal-overlay modal-open"></div>
	<div class="modal-overlay-container-wrapper">
		<div class="modal-overlay-container">
			<a href="javascript:void(0);" class="modal-open color-light">close x</a>
			<div id="modal-content"></div>
		</div>
	</div>
	<!-- End Modal Overlay -->

	<!-- Start Modal Contact Form -->
	<div id="contact" class="modal-content">
		<div class="contact-form">
			<h1 class="color">Contact Us</h1>
			<input id="name" type="text" class="color-light color-ultralight-bg" placeholder="Name">
			<input id="email" type="text" class="color-light color-ultralight-bg" placeholder="Email">
			<textarea id="message" class="color-light color-ultralight-bg" rows="3" placeholder="Message"></textarea>
			<a class="button color-bg" id="contact-submit" href="javascript:void(0);">I’M DONE WITH MY MESSAGE</a>
		</div>
	</div>
	<!-- End Modal Contact Form -->

	<!-- Start Preloader -->
	<div class="preloader-overlay">
		<div class="preloader-wrapper">
			<a href="javascript:void(0);" class="logo"></a>
		</div>
	</div>
	<!-- End Preloader -->

</body>
<!-- End Body -->
</html>