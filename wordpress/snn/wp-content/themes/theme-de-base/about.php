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

<!-- HÉROS À PROPOS -->
<p class="titre-heros-propos">À propos</p>
<img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Propos_Heros.jpg" alt="" class="image-heros-propos">

<!-- BLOC CONTACT -->
<div class="main-propos">
  <p class="propos-texte">N'hésitez pas à nous contacter pour toute question en lien avec nos activités.</p>
  
 <div class="propos-wrapper"> 
  <div class="propos-cartes">
     <img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/icone-telephone.png" alt="" class="icone-telephone">
     <img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/icone-envelope.png" alt="" class="icone-mail">
     <img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/icone-map.png" alt="" class="icone-map">
  </div>

  <div class="propos-cartes">
     <p class="propos-contact-telephone">514-495-2287</p>
     <p class="propos-contact-couriel">contact@clownssansfrontieres.ca</p>
     <p class="propos-contact-adresse">105 rue Ontario Est, bureau 203, Montréal, Québec, H2X 1G9</p>
  </div>
   
  </div>
     
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.88292026863!2d-73.56904968417939!3d45.512435438243955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a4b866f35cd%3A0x6ec4d6b9aa9231bd!2s105%20Rue%20Ontario%20E%20bureau%20203%2C%20Montr%C3%A9al%2C%20QC%20H2X%201G9!5e0!3m2!1sfr!2sca!4v1637350397479!5m2!1sfr!2sca" class="google-map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>