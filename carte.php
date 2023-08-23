<?php

/**
 * The template for displaying for dolce.
 *
 *
 *
 * @package Deliciozo
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
} ?>

<SECtion class="pizza" id="carte">
<h1>LA CARTE</h1>
<div class="container">
   <div class="card mb-3">
      <div class="row g-2">
         <div class="col-md-6">
            <br>
            <br>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/fond_card2.webp" class="img-fluid d-flex align-content-between" alt="pizza" width='650px' height="100%">
         </div>
         <div class="col-md-6">
            <div class="card-body">
               <h5 class="card-title">Pizze</h5>
               <br>
               <div class="separateur">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/deco1.png" class='card' alt="pizza" width="250px" height="45px">
               </div>
               <h6>Bianca - 15 €</h6>
               <p class="card-text">Huile d'olive, romarin, fleur de sel</p>
               <h6>Biancaneve - 15 €</h6>
               <p class="card-text">Simplement mozzarella</p>
               <h6>Calzone - 25 €</h6>
               <p class="card-text">Mozzarella, tomates cerises, jambon cru 18 mois, roquette, oeuf</p>
               <h6>Diva - 18 €</h6>
               <p class="card-text">Tomate, mozzarella, jambon cuit aux herbes, champignons de paris émincés, olives noires leccino</p>
               <h6>Gambillo - 20 €</h6>
               <p class="card-text">Stracchino, tomates cerises, jambon cru 18 mois, roquette</p>
               <h6>Gusto - 20 €</h6>
               <p class="card-text">Mozzarella, talegio, stracchino, gorgonzola</p>
               <h6>Norma - 16 €</h6>
               <p class="card-text">Tomate, ricotta fraîche, mozzarella, aubergines, basilic</p>
               <h6>Palermo - 18 €</h6>
               <p class="card-text">Tomate, tomates cerises, filets d’anchois de méditerranée, olives noires leccino</p>
               <h6>Proscuitto - 21 €</h6>
               <p class="card-text">Mozzarella, tomates cerises, jambon cru 18 mois, roquette</p>
               <h6>Regina - 20 €</h6>
               <p class="card-text">Mozzarella, scarole, tomates cerises, filets d’anchois de méditerranée</p>
               <h6>Ricotta - 15 €</h6>
               <p class="card-text">Tomate, mozzarella, ricotta fraîche, basilic</p>
            </div>
         </div>
      </div>
   </div>
</div>
</SECtion>
<section class="pates">
<div class="container">
   <div class="card mb-3">
      <div class="row g-2">
         <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/pasta-5.webp" class="img-fluid" alt="pates"width='580px' height='710px'>
         </div>
         <div class="col-md-6">
            <div class="card-body">
               <h5 class="card-title">Pasta</h5>
               <br>
               <div class="separateur">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/deco2.png" class='card' alt="pasta" width="250px" height="45px">
               </div>
               <h6>4 Formaggi - 15 €</h6>
               <p class="card-text">Crème, gorgonzola, parmesan, emmental, roquefort </p>
               <h6>Arrabiata - 11 €</h6>
               <p class="card-text">Tomates, poivrons, épices, aubergines</p>
               <h6>Bolognese - 16 €</h6>
               <p class="card-text">Bœuf, carottes, tomates, oignons, basilic</p>
               <h6>Boscaiola - 13 €</h6>
               <p class="card-text">Crème, jambon, champignons, poivre</p>
               <h6>Carbonara - 15 €</h6>
               <p class="card-text">Crème, lardons fumés, oignons</p>
               <h6>Napoletana - 11 €</h6>
               <p class="card-text">Tomates, basilic, huile d'olive, oignons</p>
               <h6>Pesto - 18 €</h6>
               <p class="card-text">Basilic, basilic Genovese D.O.P. (D.O.P : Denominazione di origine protetta= Appellation d’origine protégée), pecorino, pignons de pin, huile d’olive </p>
               <h6>Salmone - 17 €</h6>
               <p class="card-text">Crème, saumon et saumon fumé Atlantique, jus de citron, ciboulette</p>
            </div>
         </div>
      </div>
   </div>
</div>  
</section>
<section class="dessert">
<div class="container">
   <div class="card1 mb-3">
      <div class="row g-2">
         <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/framb.webp" class="img-fluid d-flex align-content-between" alt="pizza">
         </div>
         <div class="col-md-6">
            <div class="card-body">
               <h5 class="card-title">Dolce</h5>
               <br>
               <div class="separateur">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/deco2.png" class='card' alt="pizza" width="250px" height="45px">
               </div>
               <h6>Crema di Limone - 16 €</h6>
               <p class="card-text">aux citrons</p>
               <h6>Panna Cotta - 13 €</h6>
               <p class="card-text">Crème</p>
               <h6>Panna Cotta-Framboise - 13 €</h6>
               <p class="card-text">Crème et Framboises</p>
               <h6>Tiramisù Chocolate noisette spéculos - 13 €</h6>
               <p class="card-text">Chocolat noisettes et spéculos</p>
               <h6>Tiramisù - 16 €</h6>
               <p class="card-text">Biscuits, café, amoretto, mascarpone</p>
               <h6>Tiramisù Fraise - 13 €</h6>
               <p class="card-text">Biscuits, fraises, mascarpone</p>
            </div>
         </div>
      </div>
   </div>
</div>  
</section>