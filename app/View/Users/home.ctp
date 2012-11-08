	<?php echo $this->Session->flash() ?>
	
	<div class="hero-unit">
		<h2>Bem vindo, <?php echo AuthComponent::user('username') ?>.</h2>
		<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
	</div>