<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="inner-main search-results">

			<h2 class="search-results"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

			<?php get_template_part('partials/loop'); ?>

			<?php get_template_part('partials/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
