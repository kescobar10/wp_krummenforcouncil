<?php get_header(); ?>

<section id="inner-banner">
		  <img src="<?php bloginfo('template_url'); ?>/assets/img/signs.jpg" alt="Naperville" />
		  <h4><span>News &amp;<span id="naperville">&nbsp;Updates</span></span></h4>

	  </section>

	  <section class="inner-main">


		  <?php if (have_posts()) : ?>
			  <h2 class="inner-header">Read the latest news</h2>
			  <div>
				  <?php while (have_posts()) : the_post();?>

			  <time datetime="2017-07-14"><?php echo get_the_date(); ?></time>
			  <h2><a href="<?php the_permalink(); ?>" class="blog-link"><?php the_title(); ?></a></h2>
			  <h5 class="category">

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
			  </h5>
			  <p><?php the_excerpt(); ?></p>
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
