<?php
/*
Template Name: About
*/
get_header(); ?>

<!--About Banner -->
<section id="inner-banner">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/handshake.jpg" alt="Naperville" />
    <h4><span>Meet<span id="naperville">&nbsp;John</span></span></h4>
</section>

<!--Main About Section -->
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
