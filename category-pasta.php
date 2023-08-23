<?php get_template_part('header-pasta'); ?>
<br>
<br>
<div class="row">
   <div class="col-12">
      <h1>La Carte des <?php single_cat_title('', true); ?></h1>
   </div>
</div>
<br>
<!-- <article class="post"> -->
<div class="container">
   <!-- <article class="post"> -->
   <?php if (have_posts()) : ?>
      <div class="row justify-content-between">
         <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-12-g-0 col-md-6 col-lg-4 mb-4">
               <div class="card img-fluid" style="width: 18rem; height: 100%">
                  <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '']) ?>
                  </a>
                  <div class="card-body">
                  <h6 class='mt-3' style="text-align:center"><a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'pasta', true); ?></a></h6>
                  <p class="card-text-single mx-5 my-3"><?php echo get_post_meta(get_the_ID(), 'recette_pasta', true); ?></p>
                  <p class="card-text-prix mb-5 me-5"><?php echo get_post_meta(get_the_ID(), 'prix_pasta', true); ?> €</p>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
</div>
      <?php else : ?>
            <h1>Pas d'articles</h1>
   <?php endif; ?>
  <!-- /container -->
<br>
<br>
<!-- </article> -->
<?php get_footer(); ?>