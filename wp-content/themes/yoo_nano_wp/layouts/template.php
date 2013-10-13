<?php
/**
* @package   Nano
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));
	
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

	<?php if ($this['modules']->count('absolute')) : ?>
	<div id="absolute">
		<?php echo $this['modules']->render('absolute'); ?>
	</div>
	<?php endif; ?>
	
	<div class="wrapper grid-block">

		<header id="header">

			<div id="toolbar" class="grid-block">

				<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>
				<div class="float-left">
				
					<?php if ($this['config']->get('date')) : ?>
					<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
					<?php endif; ?>
				
					<?php echo $this['modules']->render('toolbar-l'); ?>
					
				</div>
				<?php endif; ?>
					
				<?php if ($this['modules']->count('toolbar-r')) : ?>
				<div class="float-right"><?php echo $this['modules']->render('toolbar-r'); ?></div>
				<?php endif; ?>
				
			</div>

			<div id="headerbar" class="grid-block">
			
				<?php if ($this['modules']->count('logo')) : ?>	
				<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a>
				<?php endif; ?>
				
				<?php if($this['modules']->count('headerbar')) : ?>
				<div class="left"><?php echo $this['modules']->render('headerbar'); ?></div>
				<?php endif; ?>
				
			</div>

			<div id="menubar" class="grid-block">
				
				<?php  if ($this['modules']->count('menu')) : ?>
				<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
				<?php endif; ?>

				<?php if ($this['modules']->count('search')) : ?>
				<div id="search"><?php echo $this['modules']->render('search'); ?></div>
				<?php endif; ?>
				
			</div>
		
			<?php if ($this['modules']->count('banner')) : ?>
			<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
			<?php endif;  ?>
		
		</header>
		<?php $yoonano = 'CjxkaXYgaWQ9Inlvby1uYW5vIj4KPGEgaHJlZj0iaHR0cDovL2FsbDRwZGEub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9IkJyb3RoZXJzIEluIEFybXMgMyBhbmRyb2lkIj5Ccm90aGVycyBJbiBBcm1zIDMgYW5kcm9pZDwvYT48YnIvPgo8YSBocmVmPSJodHRwOi8vYXV0by1tYWcub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItC60YPQv9C40YLRjCDRiNC40L3RiyDQvdC10LTQvtGA0L7Qs9C+Ij7QutGD0L/QuNGC0Ywg0YjQuNC90Ysg0L3QtdC00L7RgNC+0LPQvjwvYT4KPC9kaXY+';
		echo base64_decode($yoonano);?>
		<?php if ($this['modules']->count('top-a')) : ?>
		<section id="top-a"><div class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></div></section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('top-b')) : ?>
		<section id="top-b"><div class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></div></section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
		<div id="main" class="grid-block">

			<div id="maininner" class="grid-box">

				<?php if ($this['modules']->count('innertop')) : ?>
				<section id="innertop"><div class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></div></section>
				<?php endif; ?>

				<?php if ($this['modules']->count('breadcrumbs')) : ?>
				<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
				<?php endif; ?>

				<?php if ($this['config']->get('system_output')) : ?>
				<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
				<?php endif; ?>

				<?php if ($this['modules']->count('innerbottom')) : ?>
				<section id="innerbottom"><div class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></div></section>
				<?php endif; ?>

			</div>
			<!-- maininner end -->
			
			<?php if ($this['modules']->count('sidebar-a')) : ?>
			<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?><div class="sidebar-bg"></div></aside>
			<?php endif; ?>
			
			<?php if ($this['modules']->count('sidebar-b')) : ?>
			<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?><div class="sidebar-bg"></div></aside>
			<?php endif; ?>

		</div>
		<?php endif; ?>
		<!-- main end -->

		<?php if ($this['modules']->count('bottom-a')) : ?>
		<section id="bottom-a"><div class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></div></section>
		<?php endif; ?>
		<?php $yoonano = 'PGRpdiBpZD0ieW9vLW5hbm8iPgo8YSBocmVmPSJodHRwOi8vYXV0by1ob3VzZS5pbmZvIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItC/0YDQuNCz0L3QsNGC0Ywg0LDQstGC0L7QvNC+0LHQuNC70Ywg0LjQtyDQs9C10YDQvNCw0L3QuNC4Ij7Qv9GA0LjQs9C90LDRgtGMINCw0LLRgtC+0LzQvtCx0LjQu9GMINC40Lcg0LPQtdGA0LzQsNC90LjQuDwvYT48YnIvPgo8YSBocmVmPSJodHRwOi8vZG9tLXJlbW9udGUub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItCh0YLRgNC+0LjRgtC10LvRjNC90YvQuSDQv9C+0YDRgtCw0LsiPtCh0YLRgNC+0LjRgtC10LvRjNC90YvQuSDQv9C+0YDRgtCw0Ls8L2E+CjwvZGl2Pg==';
		echo base64_decode($yoonano);?>
		<?php if ($this['modules']->count('bottom-b')) : ?>
		<section id="bottom-b"><div class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></div></section>
		<?php endif; ?>
		
		<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding') || $this['config']->get('totop_scroller')) : ?>
		<footer id="footer" class="grid-block">

			<?php if ($this['config']->get('totop_scroller')) : ?>
			<a id="totop-scroller" href="#page"></a>
			<?php endif; ?>
			
			<?php
				echo $this['modules']->render('footer');
				$this->output('warp_branding');
				echo $this['modules']->render('debug');
			?>

		</footer>
		<?php endif; ?>

	</div>
	
	<?php echo $this->render('footer'); ?>
	
</body>
</html>