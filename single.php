<?php get_header(); ?>

<section id="inner-banner">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/signs.jpg" alt="Naperville" />
	<h4><span>News &amp;<span id="naperville">&nbsp;Updates</span></span></h4>
</section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="issues-wrapper">
	
	<div class="issues-left">
		<time datetime="2017-07-14">July 14, 2017</time>
		<h3><?php the_category(); ?></h3>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</div>

	<div class="widget-right">
		<div class="contact-card">
			<h3>Newsletter</h3>
			<form>
				Name:<br>
				<input type="text" name="fullname"><br>
				Email:<br>
				<input type="text" name="fullname"><br>
				Zip Code:<br>
				<input type="text" name="fullname"><br>
				<input class="submit" type="submit" value="Submit">
			</form>
		</div>
	</div>

</section>
<!--- content end --->
<?php endwhile; endif; ?>

<section>
	<figure id="logo-2">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
	</figure>
</section>

<?php get_footer(); ?>
