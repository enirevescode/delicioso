<?php

/**
 * The template for displaying all content posts.
 *
 *
 * @package  thème deliociozo
 * @since 1.0.2
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
} ?>

<section class="single">
   <div class="container">
      <div class="card mb-3" style="max-width: 1000px;">
         <div class="row g-0">
            <div class="col-md-4">
               <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid-card rounded-start')); ?>
            </div>
            <div class="col-md-8">
               <div class="card-body">
                  <h3 class="card-title"><?php echo get_post_meta(get_the_ID(), 'pasta', true); ?></h3>
                  <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'recette_pasta', true); ?></p>
                  <div class="float-end">
                     <p class="card-text-prix mb-2 me-5"><?php echo get_post_meta(get_the_ID(), 'prix_pasta', true); ?> €</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>