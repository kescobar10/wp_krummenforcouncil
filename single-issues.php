<?php
/*
Template Name: Issues
*/
get_header(); ?>

<section id="inner-banner">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/students.jpg" alt="Naperville" />
              <h4><span>John's<span id="naperville">&nbsp;Priorities</span></span></h4>
          </section>

          <section class="inner-main">
              <h2 class="inner-header">Learn about the issues</h2>
          </section>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="issues-wrapper">
        <h2 class="inner-header">Learn about the issues</h2>
         <div class="issues-left">
             <h3><?php the_category(); ?></h3>
             <h2><?php the_title(); ?></h2>
             <p><?php the_content(); ?></p>
         </div>

         <div class="widget-right">
             <div class="issue-card"><a href="issues/economic-growth">Economic growth</a></div>
             <div class="issue-card"><a href="issues/reducing-city-taxes">Reducing city taxes</a></div>
             <div class="issue-card"><a href="issue/preserving-small-town-spirit">Preserving small-town spirit</a></div>
             <div class="issue-card"><a href="issue/downtown-safety">Downtown safety</a></div>
             <div class="issue-card"><a href="issue/downtown-development">Downtown development</a></div>
             <div class="issue-card"><a href="issues/children-of-naperville">Children of Naperville</a></div>
             <?php get_sidebar('issues'); ?>


         </div>

     </section>

<?php endwhile; endif; ?>
          <section>
              <figure id="logo-2">
                  <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
              </figure>
          </section>

<?php get_footer(); ?>
