<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="inner-main">

			<!-- article -->
			<article id="post-404">

				<h2><?php _e( 'Page not found', 'html5blank' ); ?></h2>
				<h5>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h5>
				<?php get_template_part('partials/searchform'); ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

	<!--Logo-->
	<section>
	    <figure id="logo-2">
	        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
	    </figure>
	</section>


<?php get_footer(); ?>
