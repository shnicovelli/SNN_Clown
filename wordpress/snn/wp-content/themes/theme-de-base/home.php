<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<main>
<link rel="stylesheet" href="style.css">
<header class="main-header">
    <img class="logo-menu" src="https://github.com/shnicovelli/SNN_Clown/blob/main/sources/medias/ClownSansFrontieresLogo.png?raw=true" alt="logo__csf">
    <nav>
      <ul class="navlinks">
        <a href="#" class="liens-menu">Nouvelles</a>
        <a href="#" class="liens-menu">Services</a>
        <a href="#" class="liens-menu">Équipe</a>
        <a href="#" class="liens-menu">À propos</a>
        <a href="histoire.php" class="liens-menu">Histoire</a>
      </ul>
    </nav>
    <a href="#" class="liens-menu"><button class="bouton-menu">FAIRE UN DON</button></a>
  </header>
  
  <!-- RÉSEAUX SOCIAUX STICKY -->
  <div class="reseaux-main">
    <div class="reseaux">
      <a href="https://twitter.com/csf_canada"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Twitter.png" alt="" class="twitter"></a>
    </div>
    <div class="reseaux">
      <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Facebook.png" alt="" class="facebook"></a>
    </div>
    <div class="reseaux">
      <a href="https://www.youtube.com/channel/UCQWUO8JZx69GPWRInazRPMw"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Youtube.png" alt="" class="youtube"></a>
    </div>
    <div class="reseaux">
      <a href="https://www.instagram.com/clownssansfrontieres/?hl=fr-ca"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Instagram.png" alt="" class="instagram"></a>
    </div>
    <div class="reseaux">
      <a href="https://vimeo.com/user2650793"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Vimeo.png" alt="" class="vimeo"></a>
    </div>
  </div>
  <!-- BLOC-SWIPPER -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  
 
  
  <div class="swiper hero">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/H%C3%A9ros.png"  class="swiper-img"></div>
      <div class="swiper-slide"><img src="https://i.ytimg.com/vi/E0v1SRmOa2k/maxresdefault.jpg"  class="swiper-img"></div>
      <div class="swiper-slide"><img src="https://enpiste.qc.ca/medias/company/logo_image/Clowns_Sans_Frotnieres_Katel_Le_fustec_2.jpg"  class="swiper-img"></div>
      ...
    </div>
  
    <div class="swiper-pagination"></div>
  
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
  </div>
  
  <!-- BLOC SERVICES -->
  <div class="main-services">
    <p class="services-titre">Nos services</p>
    
   <div class="services-wrapper"> 
    <div class="services-cartes">
       <p class="services-intertitre">Spectacles gratuits pour tous</p>
       <img src="https://i.imgur.com/AkHEpZ9.jpg" alt="" class="service1">
       <p class="services-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
    </div>
  
    <div class="services-cartes">
       <p class="services-intertitre">Ateliers artistiques</p>
       <img src="https://i.imgur.com/kSWPfhS.jpg" alt="" class="service2">
       <p class="services-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
    </div>
  
    <div class="services-cartes">
        <p class="services-intertitre">Soutien aux artistes locaux</p>
        <img src="https://i.imgur.com/V8YRd5O.jpg" alt="" class="service3">
        <p class="services-description">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
    </div>
    </div>
       
  </div>
  
  <!-- BLOC NOUVELLES -->
  <div class="main-nouvelles">
    <p class="nouvelles-titre">Nouvelles</p>
    
    <div class="nouvelles-wrapper">
      <div class="nouvelles-cartes">
        <p class="nouvelles-intertitre">Plan de soutien aux organismes de coopération internationale</p>
        <img src="https://i.imgur.com/lv4Pd6m.jpg" alt="" class="nouvelle1">
        <p class="nouvelles-description">10 déc. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
      </div>
        
      <div class="nouvelles-cartes">
        <p class="nouvelles-intertitre">Communiqué pour publication immédiate</p>
        <img src="https://i.imgur.com/HC3nNVO.jpg" alt="" class="nouvelle2">
        <p class="nouvelles-description">10 nov. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
       </div>
      
      <div class="nouvelles-cartes">
        <p class="nouvelles-intertitre">Journée Mondiale du nettoyage de notre planète</p>
        <img src="https://i.imgur.com/AkHEpZ9.jpg" alt="" class="nouvelle3">
        <p class="nouvelles-description">9 oct. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
      </div>
    </div>
    
  </div>
  
  <!-- BLOC TÉMOIGNAGE -->
  <div class="main-temoignage">
    <p class="temoignage-titre">Témoignage</p>
    
    <div class="temoignage-wrapper">
      <div class="temoignage-cartes">
        <img src="https://i.imgur.com/TYEJ4jG.jpg" alt="" class="temoignage-image">
      </div>
    
      <div class="temoignage-cartes">
        <p class="temoignage-intertitre1">Témoignage de Marc Leblanc</p>
          <p class="temoignage-description1">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
          <p class="temoignage-intertitre2">Un mouvement</p>
        <p class="temoignage-description2">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
        <button class="bouton-savoir-plus">En savoir plus</button>
      </div>
    </div>
    
  </div>
  
  
  <div class="bloc-animation">

<button class="bouton-don-bloc-don">FAIRE UN DON</button>
<a class="titre-don">Lorem ipsum dolor sit amet</a>
  <a class="txt-don">Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</a>  
<div class='anim'>
  <img src='https://i.pinimg.com/originals/d9/33/0a/d9330a972ab4d3eb8940d5ab550ec05f.png' class = "ballon1">
  <img src='https://i.pinimg.com/originals/d9/33/0a/d9330a972ab4d3eb8940d5ab550ec05f.png' class = "ballon2">
  <img src='https://i.pinimg.com/originals/d9/33/0a/d9330a972ab4d3eb8940d5ab550ec05f.png' class = "ballon3">
</div>
</div>
  </main>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>