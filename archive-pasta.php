<?php

/**
 * The template for displaying for dolce.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deliciozo
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_template_part('header-pasta'); ?>
<h1>La Carte des Pasta</h1>
<br>
<br>
<section>
   <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('content-pasta'); ?>
         <?php endwhile; ?>

      <?php else : ?>
         <div class="row">
            <div class="col-12">
               <p>y a pas de résultat</p>
            </div>
         </div>
      <?php endif; ?>
   </div><!-- /container -->
</section>
<?php get_footer(); ?>