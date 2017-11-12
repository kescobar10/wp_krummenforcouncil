<?php get_header(); ?>


	  <section class="inner-main">

		  <?php if (have_posts()) : ?>
			  <div>
				  <h2>Archives</h2>
				  <?php while (have_posts()) : the_post();?>

			  <time datetime="2017-07-14"><?php echo get_the_date(); ?></time>
			  <h2><a href="<?php the_permalink(); ?>" class="blog-link"><?php the_title(); ?></a></h2>
			  <h3 class="category">

				  <?php
				  $categories = get_the_category();

				  if ($categories) {

					  $i = 1;
					  foreach ($categories as $one) {
						  echo $one->name;

						  if ( count($categories) > 0 && count($categories) > $i ) {
							  echo ', ';
						  }
						  $i++;
					  }

				  }

				  ?>
			  </h3>
			  <p>John is an independent engineering consultant, working with a variety of companies, including multiple Fortune 500 companies. John’s first job out of college was driving corvettes around the GM Proving Grounds. John has published multiple technical papers on advanced engineering topics, and is a patent-holding engineer. John is also a technical project manager, having installed capital equipment at nuclear facilities.</p>
			  <button class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></button>

		  		<?php endwhile; ?>

  			</div>

  <?php else: ?>
	  <br>
	  <h2>No Posts Found</h2>
	  <?php endif; ?>

	</section>

	  <section>
		  <figure id="logo-2">
			  <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
		  </figure>
	  </section>

<?php get_footer(); ?>
