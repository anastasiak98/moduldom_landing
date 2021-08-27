<?php $_url = drupal_get_path('theme', 'rb_theme'); ?>

<header class="header">
	<div class="container">
		<div class="header__inner">
			<div class="header__logo logo">
				<a class="logo__link" href="/">
				<img class="logo__image" src="/<?php echo $_url ?>/images/logo.svg">
				</a>
			</div>
			<nav class="header__navigation">
				<?php if (!empty($page['navigation'])): ?>
					<?php print render($page['navigation']); ?>
				<?php endif; ?>
			</nav>
			<div class="header__burger-button"><span></span></div>
		</div>
	</div>
</header>

<main class="main">
	<section class="banner">
		<?php if (!empty($page['banner'])): ?>
			<?php print render($page['banner']); ?>
		<?php endif; ?>
	</section>

	<div class="container">
		<?php print($messages); ?>
		<?php print($breadcrumb); ?>
		<?php print(render($tabs)); ?>
		<?php print("<h1>". $title ."</h1>"); ?>	
		<?php print render($page['content']); ?>
	</div>

	<!-- Регион всплывающих окон -->
	<div class="modal">
		<div class="modal__wrapper">
			<div class="modal__content">
				<div class="agreement editable-content">
					<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 13)))); print drupal_render($block); ?>
				</div>
				<button class="modal__close-btn"></button>
			</div>
		</div>
	</div>

	<section class="description">
		<div class="container">
			<div class="description__inner">
				<div class="description__body">
					<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 3)))); print drupal_render($block); ?>
				</div>
				<div class="description__image-wrapper">
					<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 4)))); print drupal_render($block); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="promo">
		<?php $block = module_invoke('views', 'block_view', 'mini_banner_view-block'); print render ($block['content']); ?>
	</section>

	<section class="kits">
		<div class="container">
			<div class="kits__inner">
				<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 12)))); print drupal_render($block); ?>
			</div>
		</div>
	</section>
	
	<section class="projects">
		<div class="container">
			<div class="projects__inner">
				<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 6)))); print drupal_render($block); ?>
				<div class="projects__body">
					<?php $block = module_invoke('views', 'block_view', 'our_ptojects_view-block'); print render ($block['content']); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="advantages">
		<div class="container">
			<div class="advantages__inner">
				<?php 
					$block = module_invoke('views', 'block_view', 'benefits_view-block'); 
					echo "<h2>" . $block['subject'] . "</h2>";
					print render ($block['content']); 
				?>
			</div>
		</div>
	</section>

	<section class="feedback">
		<div class="container1440">
			<div class="feedback__inner">
				<div class="feedback__body">
					<div class="container">
						<div class="feedback__form">
							<?php 
								$block = module_invoke('webform', 'block_view', 'webform-client-form-21');							
								echo "<h2>" . $block['subject'] . "</h2>"; 
								print render($block['content']);
							?>
						</div>
					</div>
				</div>
				<div class="feedback__image-wrapper">
					<?php $block = module_invoke('views', 'block_view', 'img_webform_view-block'); print render ($block['content']); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<footer class="footer">
	<div class="container">
		<div class="footer__inner">

			<div class="footer__logo logo">
				<a class="logo__link" href="/">
					<img class="logo__image" src="/<?php echo $_url ?>/images/logo.svg">
				</a>
			</div>

			<div class="footer__body">
				<div class="footer__navigation">
					<?php if (!empty($page['navigation'])): ?>
						<?php print render($page['navigation']); ?>
					<?php endif; ?>
				</div>		
				<div class="footer__contacts contacts">
					<ul class="contacts__list">
						<li class="contacts__item">
							<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 9)))); print drupal_render($block); ?>
						</li>
						<li class="contacts__item">
							<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 10)))); print drupal_render($block); ?>
						</li>
						<li class="contacts__item">
							<?php $block = _block_get_renderable_array(_block_render_blocks(array(block_load('block', 11)))); print drupal_render($block); ?>
						</li>
					</ul>
				</div>
			</div>

			<div class="footer__info">
				<div class="footer__copyright">
					<?php
						$current_year = date ( 'Y' );
						echo "$current_year &#169; Все права защищены"; 
					?>
				</div>

				<div class="footer__agreement">
					<a href="/agreement" target="_blank">Политика обработки персональных данных</a>
				</div>				

				<div class="footer__dev-logo dev-logo">
					<a class="dev-logo__link" href="https://ribbla.com/" target="_blank">
						<img class="dev-logo__image" src="/<?php echo $_url ?>/images/logo-ribbla.svg">
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>