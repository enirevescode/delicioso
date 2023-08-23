<?php

/**
 * The template for displaying all content posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package  thème deliociozo
 * @since 1.0.2
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
} ?>

<?php //requête pr création du <slider>
$args = array(
  'post_type' => 'sgdelicio_slider',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC'
);
$slider_query = new WP_Query($args);

if ($slider_query->have_posts()) : 
?>


  <section class="slide-home">
    <div class="container">
      <div id="carouselDelicio" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?php $indicator_index = 0; 
          while ($slider_query->have_posts()) : $slider_query->the_post();
            echo '<button type="button" data-bs-target="#carouselDelicio" data-bs-slide-to="' . $indicator_index . '" class="' . ($indicator_index == 0 ? "active" : "") . '" aria-current="true" aria-label="' . $indicator_index . '"></button>'; ?>
          <?php $indicator_index++;

          endwhile; ?>
        </div>
        <?php rewind_posts(); ?>
        <!-- Fait repartir la boucle au début, sorte d'itération-->
        <!-- wrapper for slides -->
        <div class="carousel-inner">

          <?php $active_test = true; // ici variable logique
          while ($slider_query->have_posts()) : $slider_query->the_post();
            if ($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'slider')) : 
              $thumbnail_src = $thumbnail_html['0'];
              $valeur_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt');
              $valeur_alt = $valeur_alt[0];
          ?>
              <div class="carousel-item<?php echo ($active_test ? " active" : ""); ?>">
                
                <img src="<?php echo $thumbnail_src; ?>" alt="<?php echo $valeur_alt; ?>">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_field('caption'); ?></p>
                </div>
              </div>

          <?php $active_test = false;
            endif;
          endwhile;
          wp_reset_postdata(); ?>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDelicio" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselDelicio" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivante</span>
        </button>
      </div>
    </div> <!-- </container> -->
  </section>
<?php endif; ?>
<!--clôture de la L10 -->