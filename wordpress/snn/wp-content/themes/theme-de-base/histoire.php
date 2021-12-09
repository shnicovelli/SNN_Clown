<?php 
/**
 * 	Template Name: histoire
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article> 
    <?php if (!is_front_page()) : ?>

    <h2> <?php the_title(); ?> </h2>


    <?php endif;?>
    <img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Histoire_Heros.jpg" alt="" class="image-heros-histoire">
    <div class="description">

        <?php the_content();?>

    </div>
    
</article>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>