
<?php get_header(); ?>
              <!-- MODAL -->
              <div class="modal show" id="myModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SITE EN CONSTRUCTION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <br>
        <p>SITE EN CONSTRUCTION POUR 1 RESTAU FICTIF !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>
      <!-- fin MODAL-->

<section class="histoire">
   <div class="row mb-5 mx-5" style="text-align: justify">
      <div class="col-6">
         <p class="hist1">
            La Pizzeria Deliciozo, c'est une pizzeria hyper chaleureuse et authentique où, comme à Naples, on déguste une somptueuse Margherita recouverte de bons produits et servie avec de gros bords généreux. Deux fours de Picolono Gaspacho de 3 tonnes, des tomates San Marzano de Valétudinaire, de la mozzarella de bufflonne de Sylvester Stallone qui arrive en direct 3 fois par semaine. Niveau prix - en achetant tout en direct</p>
      </div>
      <div class="col-6">
         <p class="hist2">
            à des producteurs et avec nos 250 places assises - on arrive à recréer en plein cœur de Paris, la magie de Naples.<span id="dots">...</span><span id="more"> Idem sur la bière brassée maison avec des pintes de blanche ou brune et nos glaces italiennes maison au lait de bufflonne. Si jamais vous voulez arroser ces bonnes nouvelles, on a le plus gros bar de Paris : 500 références d’alcool et des cocktails de dingue orchestrés par Ricardo Boulbito.</span>
         </p>
         <button onclick="myFunction()" id="savoir">En savoir plus ...</button>
      </div>
   </div>

   <div class="row mx-5" style="text-align: justify">

      <p><em>La Pizzeria Deliciozo</em>, c'est une pizzeria hyper chaleureuse et authentique où, comme à Naples, on déguste une somptueuse Margherita <span id="dots">...</span><span id="more"> recouverte de bons produits et servie avec de gros bords généreux. Deux fours de Picolono Gaspacho de 3 tonnes, des tomates San Marzano de Valétudinaire, de la mozzarella de bufflonne de Sylvester Stallone qui arrive en direct 3 fois par semaine. Niveau prix - en achetant tout en direct des producteurs et avec nos 250 places assises - on arrive à recréer en plein cœur de Paris, la magie de Naples. Idem sur la bière brassée maison avec des pintes de blanche ou brune et nos glaces italiennes maison au lait de bufflonne. Si jamais vous voulez arroser ces bonnes nouvelles, on a le plus gros bar de Paris : 500 références d’alcool et des cocktails de dingue orchestrés par Ricardo Boulbito.</span></p>
      <button onclick="myFunction()" id="savoir">En savoir plus ...</button>
   </div>
</section>

<section class="resa">
   <div class="row mx-5 my-5" style="text-align: justify">
      <div class="col-3">
         <p>Résa</p>
      </div>
      <div class="col-6">
         <p>La team Deliciozo prend les résas sur le service du midi et du soir, pour vos funky déjeuners et vos cool dîners. Vous pouvez aussi passer nous voir à l’improviste, notre hôtesse vous installera directement ou vous fera patienter le temps qu’une table se libère.</p>
      </div>
      <div class="col-3 d-grid gap-3">
         <button type="button" class="btn">Réservez</button>
         <button type="button" class="btn">Info tarif</button>
      </div>
</section>
<section>
   <div class="row mx-5 my-5">
      <div class="col-3">
         <p>Adresse</p>
      </div>
      <div class="col-6">
         <p>15, Avenue des Champignons dorés - 995960 BIGNOU LE CROQUANT</p>
      </div>
      <div class="col-3 d-grid gap-3">
         <button type="button" class="btn">Plan et Itinéraire</button>
         <button type="button" class="btn">Info tarif</button>
      </div>
   </div>
   </div>
</section>
<section>
   <?php get_template_part('carte'); ?>
</section>
<?php get_footer(); ?>