<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<p class="titre-heros-detail-nouvelle"><?php the_title()?></p>
<?php the_post_thumbnail()?>
<?php the_content()?>

<div class="bloc-partage">
  <div class="reseaux-bloc-partage">
  <p class="partage-nouvelle">Partager cette nouvelle!</p>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Facebook.png" alt="" class="facebook-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_Twitter.png" alt="" class="twitter-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/logo_linked_in.png" alt="" class="linkedin-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/logo_reddit.png" alt="" class="reddit-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Logo_WhatsApp.png" alt="" class="whatsapp-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/logo_tumblr.png" alt="" class="tumblr-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/logo_pinterest.png" alt="" class="pinterest-bloc-partage"></a>
    <a href="https://www.facebook.com/ClownsSansFrontieres/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/logo_vk.png" alt="" class="vk-bloc-partage"></a>
    <a href="mailto:?subject=HA%C3%8FTI%20%C2%AB%20ON%20EST%20DANS%20UNE%20CRISE%20HUMANITAIRE%20%C2%BB&body=https://www.clownssansfrontieres.ca/haiti-on-est-dans-une-crise-humanitaire/"><img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/icone-envelope.png" alt="" class="mail-bloc-partage"></a>
  </div>
</div>

<p class="titre-suivant">Nouvelle Suivante</p>
<div class="main-nouvelle-suivante">
  <img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/prochaine_nouvelle.jpg" alt="" class="nouvelle-suivante-image">
  <p class="suivant-texte1">Appel de Clowns Without Borders International (CWBI) à la solidarité et au respect des droits humains aux frontières de l’Union Européenne.</p>
  <p class="suivant-texte2">Notre monde traverse une crise. Alors que le Covid-19 balaie la planète, nous sommes tous à la recherche de sécurité pour nous-mêmes et nos proches. Pendant ce temps, aux frontières de l’Europe, de nombreuses personnes ont également désespérément besoin d’être à l’abri de la guerre et des persécutions. Dans quelle mesure leur sort est-il rendu encore plus difficile face à la pandémie mondiale actuelle ?</p>
  <p class="suivant-texte3">Depuis 1993, Clowns Without Borders International (CWBI) a rencontré des millions d’enfants dans des zones de crise...</p>
  <button class="bouton-lire-suite">Lire la suite</button>
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>