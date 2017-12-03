<?php
/*
Template Name: Home
*/
get_header('home'); ?>

<!--Red cards - Calls to action-->
<section id="cta-wrapper">
    <!--Left red card-->
    <article class="call-to-action">
        <a href="<?php the_field('left_link'); ?>" target="_blank" >
            <h3 class="red-card"><?php the_field('left_line_1'); ?></h3>
            <p><?php the_field('left_line_2'); ?></p>
        </a>
    <!--Center red card -->
    </article>
    <article class="call-to-action">
        <a href="<?php the_field('center_link'); ?>" >
            <h3 class="red-card"><?php the_field('center_line_1'); ?></h3>
            <p><?php the_field('center_line_2'); ?></p>
        </a>
    </article>
    <!--Right red card-->
    <article class="call-to-action">
        <a href="<?php the_field('right_link'); ?>" >
            <h3 class="red-card"><?php the_field('right_line_1'); ?></h3>
            <p><?php the_field('right_line_2'); ?></p>
        </a>
    </article>
</section>

<!--City landscape photo-->
<section id="hp-banner">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/naperville.jpg" alt="Naperville" />
    <h4><span id="for-a-better">For a better <span id="naperville">Naperville</span></span></h4>
</section>

<!--Logo-->
<section>
    <figure id="logo-2">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
    </figure>
</section>

<?php get_footer(); ?>
