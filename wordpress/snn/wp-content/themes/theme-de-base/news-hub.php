<?php 
/**
 * 	Template Name: news hub
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


<!-- MENU DROP-DOWN -->
<select name="drop-down-nouvelles" class="drop-down-nouvelles">
   <option value="recentes">Les plus récentes</option>
   <option value="anciennes">Les plus anciennes</option>
</select>

<!-- BLOC SERVICES -->
<div class="main-services">
  
 <div class="services-wrapper"> 
  <div class="services-cartes">
     <p class="services-intertitre-special">Spectacles gratuits pour tous</p>
     <img src="https://i.imgur.com/AkHEpZ9.jpg" alt="" class="service1-special">
     <p class="services-description-special">10 déc. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
  </div>

  <div class="services-cartes">
     <p class="services-intertitre">Ateliers artistiques</p>
     <img src="https://i.imgur.com/kSWPfhS.jpg" alt="" class="service2">
     <p class="services-description">10 nov. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
  </div>

  <div class="services-cartes">
      <p class="services-intertitre">Soutien aux artistes locaux</p>
      <img src="https://i.imgur.com/V8YRd5O.jpg" alt="" class="service3">
      <p class="services-description">9 oct. 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
  </div>
  </div>

</div>

<!-- BLOC NOUVELLES -->
<div class="main-nouvelles">
  
  <div class="nouvelles-wrapper">
    <div class="nouvelles-cartes">
      <p class="nouvelles-intertitre">Plan de soutien aux organismes de coopération internationale</p>
      <img src="https://i.imgur.com/lv4Pd6m.jpg" alt="" class="nouvelle1">
      <p class="nouvelles-description">31 août 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
    </div>
      
    <div class="nouvelles-cartes">
      <p class="nouvelles-intertitre">Communiqué pour publication immédiate</p>
      <img src="https://i.imgur.com/HC3nNVO.jpg" alt="" class="nouvelle2">
      <p class="nouvelles-description">23 mars 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
     </div>
    
    <div class="nouvelles-cartes">
      <p class="nouvelles-intertitre">Journée Mondiale du nettoyage de notre planète</p>
      <img src="https://i.imgur.com/AkHEpZ9.jpg" alt="" class="nouvelle3">
      <p class="nouvelles-description">1 mars 2020<br><br>Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
    </div>
  </div>
  
</div>

<!-- BOUTON PLUS DE NOUVELLES -->
<button class="bouton-plus-nouvelles">Voir plus de nouvelles</button>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>