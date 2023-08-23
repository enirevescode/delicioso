<?php

/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deliciozo
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
} ?>
<h1>La Carte des Pizze</h1>

<h2>La Carte des <ul><?php wp_list_categories(array(
                        'orderby' => 'ID', 'title_li' => ''
                     )); ?></ul>
</h2>
<br>
<br>
<section>
   <div class="container-fluid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('content-pizze'); ?>
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