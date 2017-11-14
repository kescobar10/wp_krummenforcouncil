<?php
/*
Template Name: About
*/
get_header(); ?>

<section id="inner-banner">
             <img src="<?php bloginfo('template_url'); ?>/assets/img/handshake.jpg" alt="Naperville" />
             <h4><span>Meet<span id="naperville">&nbsp;John</span></span></h4>
         </section>

         <section class="inner-main">
             <?php the_content(); ?>
         </section>

         <section>
             <figure id="logo-2">
                 <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
             </figure>
         </section>


<?php get_footer(); ?>
