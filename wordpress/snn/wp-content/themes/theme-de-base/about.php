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