<!-- 
<?php
// JS
echo $this -> Html -> script(array('jquery_1.3.2', 'jqueryui', 'easing', 'jquery.cycle.all', 'custom'));
// superfish
echo $this -> Html -> script(array('/superfish-1.4.8/js/hoverIntent', 'superfish-1.4.8/js/superfish'));
// css
echo $this -> Html -> css(array('style', 'spring'));
?> 
-->
<!-- WRAPPER -->
<div id="wrapper">
	<!-- navigation -->
	<ul id="nav" class="sf-menu">
		<li class="custom">
			<a href="contact.html">CONTACT</a>
		</li>
		<li class="custom">
			<a href="blog.html">BLOG</a>
		</li>
		<li class="custom">
			<a href="gallery.html">GALLERY</a>
		</li>
		<li class="custom">
			<a href="about.html">ABOUT</a>
			<ul>
				<li>
					<a href="#">Sub page 1</a>
				</li>
				<li>
					<a href="#">Sub page 2</a>
				</li>
				<li>
					<a href="#">Sub page 3</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- ENDS navigation -->
	<!-- HEADER -->
	<div id="header">
		<a href="index.html"><img src="img/logo.png" alt="" id="logo" /></a><img src="img/nav-arrow.png" alt="" id="arrow" class="arrow-home" />
		<form action="#" method="post" id="search">
			<p>
				<input type="text" onfocus="defaultInput(this)" onblur="clearInput(this)" name="keyword" id="keyword" value="Search..." />
			</p>
			<p>
				<input type="submit" id="go" value="" />
			</p>
			<div class="clear"></div>
		</form>
	</div>
	<!-- ENDS HEADER -->
	<!-- MAIN -->
	<div id="main">
		<!-- slideshow -->
		<div id="slideshow">
			<ul id="slides">
				<li>
					<?php
					echo $this -> Html -> image('slides/01.jpg', array('alt' => ''));
					?>
				</li>
				<li>
					<?php
					echo $this -> Html -> image('slides/02.jpg', array('alt' => ''));
					?>
				</li>
				<li>
					<?php
					echo $this -> Html -> image('slides/03.jpg', array('alt' => ''));
					?>
				</li>
			</ul>
			<span></span><a href="#"><img src="img/prev-slide.png" alt="" id="prev" /></a><a href="#"><img src="img/next-slide.png" alt="" id="next" /></a>
		</div>
		<!-- ENDS slideshow -->
		<p class="custom excerpt">
			Four different skins: <a href="#">Spring</a>, <a href="#">Summer </a>, <a href="#">Autumn</a>, and <a href="#">Winter. </a>
		</p>
		<!-- blocks -->
		<div class="holder">
			<?php foreach($articles as $article): ?>
			<div class="block">
				<div class="thumb-holder">
					<a href="gallery.html">
						<img src="img/content_image/<?php echo $article['Article']['title_image_url'] ?>" alt="" class="thumb topimage" />
					</a>
				</div>
				<h2 class="custom"><?php echo $article['Article']['title'] ?></h2>
				<p>
					<?php echo $this -> Html -> link(
						'More',
						array('controller' => 'articles', $article['Article']['id']),
						array('class' => 'more'));?>
					<!-- <a href="gallery.html" class="more">More</a> -->
				</p>
			</div>
			<?php  endforeach; ?>
		</div>
		<!-- ENDS blocks -->
	</div>
	<!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<!-- FOOTER -->
<div id="footer">
	<div id="footer-wrapper">
		<ul id="follow">
			<li>
				<p>
					Follow us:
				</p>
			</li>
			<li>
				<a href="#"><img src="img/twitter.png" alt="" /></a>
			</li>
			<li>
				<a href="#"><img src="img/facebook.png" alt="" /></a>
			</li>
			<li>
				<a href="#"><img src="img/linkedln.png" alt="" /></a>
			</li>
			<li>
				<a href="#"><img src="img/rss.png" alt="" /></a>
			</li>
		</ul>
		<div class="footer-cols">
			<div>
				<ul>
					<li>
						<a href="#" class="custom">Skins</a>
					</li>
					<li>
						<a href="#">Spring</a>
					</li>
					<li>
						<a href="#">Summer</a>
					</li>
					<li>
						<a href="#">Autumn</a>
					</li>
					<li>
						<a href="#">Winter</a>
					</li>
				</ul>
			</div>
			<div>
				<ul>
					<li>
						<a href="#" class="custom">Gallery</a>
					</li>
					<li>
						<a href="#">Spring</a>
					</li>
					<li>
						<a href="#">Summer</a>
					</li>
					<li>
						<a href="#">Autumn</a>
					</li>
					<li>
						<a href="#">Winter</a>
					</li>
				</ul>
			</div>
			<div>
				<ul>
					<li>
						<a href="#" class="custom">Blog</a>
					</li>
					<li>
						<a href="#">Spring</a>
					</li>
					<li>
						<a href="#">Summer</a>
					</li>
					<li>
						<a href="#">Autumn</a>
					</li>
					<li>
						<a href="#">Winter</a>
					</li>
				</ul>
			</div>
			<div class="last">
				<ul>
					<li>
						<a href="#" class="custom">Text Styles</a>
					</li>
					<li>
						<a href="#">Spring</a>
					</li>
					<li>
						<a href="#">Summer</a>
					</li>
					<li>
						<a href="#">Autumn</a>
					</li>
					<li>
						<a href="#">Winter</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="legal">
				&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a> | Download more: <a href="http://www.csstemplatesfree.org"> Website Templates</a>
			</p>
		</div>
	</div>
</div>
<!-- ENDS FOOTER -->
<!-- start cufon -->
<script type="text/javascript">Cufon.now();</script>
<!-- ENDS start cufon -->
</body>