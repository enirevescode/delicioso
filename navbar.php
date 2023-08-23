   <section class="menu">
   <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/ikone_pizza.png" alt="" width="45" height="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://pizzeria.enirevescodewp.fr/">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notre Carte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="https://pizzeria.enirevescodewp.fr/?cat=7">Pizze</a>
            <ul>
            <li><a class="dropdown-item" href="https://pizzeria.enirevescodewp.fr/?cat=8">Pizze Bianche</a></li>
            </ul>
            <ul>
            <li><a class="dropdown-item" href="https://pizzeria.enirevescodewp.fr/?cat=9">Pizze Rosso</a></li>
         </ul>
         </li>
            <li><a class="dropdown-item" href="https://pizzeria.enirevescodewp.fr/?cat=4">Pasta</a></li>
            <li><a class="dropdown-item" href="https://pizzeria.enirevescodewp.fr/?cat=5">Dolce</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://pizzeria.enirevescodewp.fr/commandes/">Commande</a>
        </li>
        <li class="nav-item">
                     <a class="nav-link active" href="https://pizzeria.enirevescodewp.fr/galerie-photos/">Galerie Photos</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos adresses
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Paris 1er</a></li>
                        <li><a class="dropdown-item" href="#">Saint-Mandé</a></li>
                        <li><a class="dropdown-item" href="#">Neuilly/Seine</a></li>
                     </ul>
                  </li>
      </ul>
    </div>
  </div>
</nav>
</section>