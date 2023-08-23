<?php get_template_part('header-pizze'); ?>
<br>
<section class="titre">
<div class="row">
   <div class="col">
      <h1>La Carte des <?php single_cat_title('', true); ?></h1>
   </div>
</div>
<br>
</section>
<section>
<div class="container">
      <?php if (have_posts()) : ?>
         <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <?php while (have_posts()) : the_post(); ?>
         <div class="col">
            <div class="card h-100">
               <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail('smartph', ['class' => 'card-img-top', 'alt' => '']) ?></a>
            <div class="card-body">
               <h5 class='card-title'><a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'pizza', true); ?></a></h5>
               <p class="card-text-single"><?php echo get_post_meta(get_the_ID(), 'recette_de_la_pizza', true); ?></p>
               <p class="card-text-prix"><?php echo get_post_meta(get_the_ID(), 'prix_de_la_pizza', true); ?> €</p>
            </div>
            </div>
         </div>
            <?php endwhile; ?>
         </div>
</div>
<?php else : ?>
<h1>Pas d'articles</h1>
<?php endif; ?>
</section>
<!-- </article> -->
<?php get_footer(); ?>