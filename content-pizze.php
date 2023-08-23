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
      <div class="card mb-2" style="max-width:200vmin;">
         <div class="row">
            <div class="col-md-3">
               <?php the_post_thumbnail('fiche_y', ['class' => 'card-img-top', 'alt'=> '']); ?></div>
               <div class="col-md-7">
                  <div class="card-body">
                     <p class="card-title"><?php echo get_post_meta(get_the_ID(), 'pizza', true); ?></p>
                     <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'recette_de_la_pizza', true); ?></p>
                     <div class="float-end">
                        <p class="card-text-prix mb-1 me-2"><?php echo get_post_meta(get_the_ID(), 'prix_de_la_pizza', true); ?> €</p>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div> <!-- </container> -->
</section>