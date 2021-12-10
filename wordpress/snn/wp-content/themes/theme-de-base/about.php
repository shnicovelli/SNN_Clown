<?php 
/**
 * 	Template Name: À propos1
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

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


<!-- HÉROS À PROPOS -->
<?php the_post_thumbnail('large', array('class' => 'image-heros')); ?>
<?php the_title('<div class="titre-heros">', '</div>');?>

<!-- BLOC CONTACT -->
<div class="main-propos">
<div class="texte">
<?php the_content();?>
 </div>    
</div>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>