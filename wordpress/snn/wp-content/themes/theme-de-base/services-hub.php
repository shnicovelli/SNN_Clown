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

<!-- HÉROS HUB DE SERVICES -->
<p class="titre-heros-services">Services</p>
<img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Hub_Services_Heros.jpg" alt="" class="image-heros-services">

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

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>