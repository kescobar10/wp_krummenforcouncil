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

            <?php if (have_posts()) : ?>

                <div>

                <h2>Learn About the Issues</h2>
                <?php while (have_posts()) : the_post();?>



                        <section id="card-wrapper">
                            <div class="cards">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </section>
<?php endwhile; endif; ?>
                    </div>

        </section>
    



        <section>
              <figure id="logo-2">
                  <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
              </figure>
          </section>

<?php get_footer(); ?>
