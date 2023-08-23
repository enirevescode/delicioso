<?php
/**
 * The template for displaying all content posts.
 *
 *
 * @package  thème deliociozo
 * @since 1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<section class="single">
   <div class="container">
      <div class="row my-5">
         <div class="col-12">
            <div class="card bg-dark text-white cardsingle" style="border-radius: 3%">
            <div class="img-fluid my-5" style="text-align:center" >
               <?php the_post_thumbnail('medium') ?>
            </div>
               <h2 class="card-title" style="text-align:center"><a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'pizza', true); ?></a></h2>
               <p class="card-text-single mx-5 my-5"><?php echo get_post_meta(get_the_ID(), 'recette_de_la_pizza', true); ?></p>
               <div class="float-end"><p class="card-text-prix mb-5 me-5"><?php echo get_post_meta(get_the_ID(), 'prix_de_la_pizza', true); ?> €</p></div>
            </div>
         </div>
      </div>
   </div>
</section>
