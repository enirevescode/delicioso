<!doctype html>
<!--balise wp pour reconnaissance auto de la langue cela remplace lang="fr"-->
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

  <?php if (is_home()) : ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines" />
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines" />
  <?php endif; ?>

  <?php if (is_page() && !is_front_page()) : ?>
    <meta name="description" content="Le site d'une pizzeria à Paris en France en consommation sur place ou à emporter, commande sans livraison, click 'n collect de pizza Napolitaines" />
  <?php endif; ?>

  <?php wp_head(); ?>
  <link  type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  

</head>
<!-- La classe home permet d’appliquer des styles différents des autres pages. logged pr les users connectés admin-bar pr la bar WP-->

<body <?php body_class(); ?>>

  <body class="home blog">

    <!-- permet aux extensions d’écrire du code au début du body. C’est utile notamment pour Yoast qui vient y placer le Google Tag Manager et autres codes de scripts. -->
    <?php wp_body_open(); ?>

    <header>

      <?php get_template_part('navbar'); ?>
      <!--entete-->
      <div class="img-fluid jumboaccueil">
        <h1>Deliciozo</h1>
        <div class="entete">Autentica Pizza Napoletana</div>
        <p class="entete2">Benvenuto !</p>

        <!-- <a class="btn btn-lg btnaccueil" href="#" role="button" style="border-radius: 3%">Réservez !</a> -->
      </div>
    </header>