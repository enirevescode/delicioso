<?php get_template_part('header-pizze'); ?>
<br>
<br>
<div class="row">
   <div class="col">
      <h1>La Carte des <?php single_cat_title('', true); ?></h1>
   </div>
</div>
<br>
<!-- <article class="post"> -->
<section>
<div class="container-fluid">
<?php if (have_posts()) : ?>
<!-- <modal> -->
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</section>
<!-- </article> -->
<?php get_footer(); ?>