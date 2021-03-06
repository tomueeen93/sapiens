<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'sapiens');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
		<?php 
		// JS
		// echo $this -> Html -> script(array('jquery_1.3.2', 'jqueryui', 'easing', 'jquery.cycle.all', 'custom'),array('inline'=>false));
		// superfish
		// echo $this -> Html -> script(array('superfish-1.4.8/js/hoverIntent', 'superfish-1.4.8/js/superfish'),array('inline'=>false));
		// css
		echo $this -> Html -> css(array('style', 'spring'));
		// Cufon
		// echo $this -> Html -> script(array('cufon-yui.js', 'bebas_400.font.js'),array('inline'=>false));
	?>
	<!-- <script type="text/javascript">Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });</script> -->
</head>
<body>
	
	<div id="container">
		<div id="header">
			<div class="left">
				<div id="logo">
				<?php
					echo $this->Html->link(
							$this->Html->image(
								'logo.png',
								array('alt' => '','id'=>'logo')
							),
							array('controller'=>'toppages','action'=>'index'),
							array('escape' => false)
					);
				?>
				<!-- <a href="index.html"><img src="img/logo.png" alt="" id="logo" /></a><img src="img/nav-arrow.png" alt="" id="arrow" class="arrow-home" /> -->
					
				</div>
			</div>
			<div id="center-nav">
				<?php if($logged_in): ?>
					<p>Welcome</p><?php echo $users_username; ?> <?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?>
				<?php else: ?>
					<?php echo $this->Html->link('Register',array('controller'=>'Users','action'=>'add')); ?>
					<?php echo $this->Html->link('Login',array('controller'=>'Users','action'=>'login')); ?>
				<?php endif; ?>
					
			</div>
			<div class="right">
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
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
