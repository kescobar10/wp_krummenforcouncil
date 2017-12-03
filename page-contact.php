<?php
/*
Template Name: Content
*/
get_header(); ?>

<!--Contact Banner -->
<section id="inner-banner">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/stpatricks.jpg" alt="Naperville" />
    <h4><span>Contact<span id="naperville">&nbsp;John</span></span></h4>
</section>

<!--Main Contact Section-->
<section class="inner-main">
    <h2 class="inner-header"><?php the_field('page_title'); ?></h2>
    <div id="contact-form">
    <?php the_content(); ?>
    </div>
</section>

<!--Logo-->
<section>
    <figure id="logo-2">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
    </figure>
</section>


<?php get_footer(); ?>
