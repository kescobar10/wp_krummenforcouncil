<?php get_header(); ?>

<!-- Main Privacy Policy Section -->
<section class="inner-main">
    <h2 class="inner-header"><?php the_field('page_title'); ?></h2>
    <?php the_content(); ?>
</section>

<!--Logo-->
<section>
    <figure id="logo-2">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
    </figure>
</section>


<?php get_footer(); ?>
