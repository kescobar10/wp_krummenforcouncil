<?php
/*
Template Name: Home
*/
get_header(); ?>

<section id="cta-wrapper">
             <article class="call-to-action">
                 <a href="http://www.paypal.com" target="_blank" >
                     <h3>Contribute</h3>
                     <p>to the campaign</p>
                 </a>
             </article>
             <article class="call-to-action">
                 <a href="contact.html" >
                     <h3>Get Updates</h3>
                     <p>and stay in touch</p>
                 </a>
             </article>
             <article class="call-to-action">
                 <a href="issues.html" >
                     <h3>Learn</h3>
                     <p>about the issues</p>
                 </a>
             </article>
         </section>

         <section id="hp-banner">
             <img src="<?php bloginfo('template_url'); ?>/assets/img/naperville.jpg" alt="Naperville" />
             <h4><span id="for-a-better">For a better <span id="naperville">Naperville</span></span></h4>
         </section>

         <section>
             <figure id="logo-2">
                 <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
             </figure>
         </section>

<?php get_footer(); ?>
