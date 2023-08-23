<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <title>Deliciozo Pizzeria</title>

  <a href="<?php echo home_url('/'); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ikone_pizza.png" type="image/x-icon">
  </a>
  <!-- Required meta tags -->
  <!-- balise wp remplace "utf-8"-->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- meta données publicitaires voir help pr categorie et tag-->

  <?php if (is_category()) : ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines, Pizze Rosso, Pizze Bianche, base de pizza crème, base de pizza tomate,"/>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <body class="home blog">
    <?php wp_body_open(); ?>

    <?php get_template_part('navbar'); ?>
    <section>
    <div class="img-fluid pizze">
        <p class="entete2">Deliciozo</p>
        <div class="entete">Autentica Pizza Napoletana</div>
        <p class="entete2">Benvenuto !</p>
    </div>
    </section>