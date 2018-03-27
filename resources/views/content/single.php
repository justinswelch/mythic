<div class="app-content">

	<main class="app-main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php Hybrid\render_view( 'entry/single', Hybrid\get_post_hierarchy() ) ?>

				<?php comments_template( '/resources/views/partials/comments.php' ) ?>

			<?php endwhile ?>

		<?php endif ?>

	</main>

	<?php Hybrid\render_view( 'sidebar', 'primary', [ 'name' => 'primary' ] ) ?>

</div>
