<?php
/*
Template Name: Content
*/
get_header(); ?>

<section id="inner-banner">
             <img src="<?php bloginfo('template_url'); ?>/assets/img/stpatricks.jpg" alt="Naperville" />
             <h4><span>Contact<span id="naperville">&nbsp;John</span></span></h4>
         </section>

         <section class="inner-main">
             <form id="contact-form">
                 Name:<br>
                 <input type="text" name="fullname">
                 <br>
                 Email:<br>
                 <input type="text" name="email">
                 <br>
                 Zip Code:<br>
                 <input type="text" name="zip">
                 <br>
                 Subject:<br>
                 <input type="text" name="subject">
                 <br>
                 Message:<br>
                 <input type="text" name="zip">
                 <br><br>
                 <input class="submit" type="submit" value="Submit">
             </form>
         </section>

         <section>
             <figure id="logo-2">
                 <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="John Krummen for Council" /></a>
             </figure>
         </section>


<?php get_footer(); ?>
