<?php 
/**
 * 	Template Name: Service
 * Template Post Type: post, page, services
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			
		<?php endif; ?>
		
	</article>
		<?php the_title('<div class="titre-heros">', '</div>');?>
		<?php the_post_thumbnail('large', array('class' => 'image-heros')); ?>
		<div class="texte"><?php the_content();?></div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>