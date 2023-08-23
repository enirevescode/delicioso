<?php get_template_part('header-dolce'); ?>
<!-- <section> -->
<section class="titre">
        <div class="row">
          <div class="col-12">
              <h1>La Carte des <?php single_cat_title('', true); ?></h1>
          </div>
        </div>
	<br>
</section>
<section>
<div class="container">
<?php if(have_posts(  )) : ?>
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
    <?php while (have_posts()): the_post(  ); ?>
    <div class="col">
      <div class="card h-100">
      <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '']) ?>
        <div class="card-body">
          <h5 class="card-title"><?php echo get_post_meta(get_the_ID(), 'dolce', true); ?></h5>
          <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'recette_dolce', true); ?></p>
          <p class="card-text-prix"><?php echo get_post_meta(get_the_ID(), 'prix_dolce', true); ?> €</p>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalDolce<?php echo(get_the_ID()); ?>">En savoir +</button><!-- Button trigger modal -->
        </div>
      </div>
    </div><!--balise de fermeture de col-->
<!-- Modal -->
<div class="modal fade" id="modalDolce<?php echo(get_the_ID()); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- <div class="modal-content"> -->
      <!-- </div> -->
      <div class="modal-body">
      <div class="card" style="width: 21rem;">
      <?php the_post_thumbnail('medium-large', ['class' => 'card-img-top', 'alt' => '']) ?>
  <div class="card-body">
  <h6 class='mt-3' style="text-align:center"><?php echo get_post_meta(get_the_ID(), 'dolce', true); ?></a></h6>
  <p class="card-text-single mx-3 my-3"><?php echo get_post_meta(get_the_ID(), 'recette_dolce', true); ?></p>
  <p class="card-text-prix mt-4"><?php echo get_post_meta(get_the_ID(), 'prix_dolce', true); ?> €</p>
  <br>
    <button type="button" class="btn" data-bs-dismiss="modal">Fermer</button>
  </div>
</div>
   </div>
  </div>
</div><!--balise de fermeture du modal-->
      <?php endwhile; ?>
  </div><!--balise de fermeture de row-->
</div><!--balise de fermeture du container-->

<?php else : ?>
  <h1>Pas d'articles</h1>
<?php endif; ?>
  
</section>
<?php get_footer(); ?>
