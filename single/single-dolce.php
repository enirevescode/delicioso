<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package  thème deliociozo
 * @since 1.0.2
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_template_part('header-dolce'); ?>

<section>
   <div class="container-fluid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('content-dolce'); ?>
         <?php endwhile; ?>

      <?php else : ?>
         <div class="row">
            <div class="col-12">
               <p>Il n y a pas de résultat</p>
            </div>
         </div>
      <?php endif;
      wp_reset_postdata();
      ?>
   </div><!-- /container -->
</section>
<section>
   <div class="row">
      <nav>
         <div class="float-start"><?php previous_post_link(); ?></div>
         <div class="float-end"><?php next_post_link(); ?></div><br>
   </div>
   </nav>
</section>

<?php get_footer(); ?>