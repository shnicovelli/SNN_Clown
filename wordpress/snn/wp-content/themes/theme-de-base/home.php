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
       <p class="services-description">Les spectacles mêlent non seulement l’art du clown mais également l’acrobatie, la musique, le cirque, le théâtre de rue, le conte et les marionnettes...</p>
    </div>
  
    <div class="services-cartes">
       <p class="services-intertitre">Ateliers artistiques</p>
       <img src="https://i.imgur.com/kSWPfhS.jpg" alt="" class="service2">
       <p class="services-description">Clowns Sans Frontières organise des ateliers d’expression et d’initiation artistique auprès des enfants, des travailleurs sociaux et des éducateurs...</p>
    </div>
  
    <div class="services-cartes">
        <p class="services-intertitre">Soutien aux artistes locaux</p>
        <img src="https://i.imgur.com/V8YRd5O.jpg" alt="" class="service3">
        <p class="services-description">Clowns Sans Frontières collabore avec les artistes locaux pour soutenir la pratique de leur art et promouvoir l’échange artistique...</p>
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
        <p class="nouvelles-description">10 déc. 2020<br><br>Plus de 3,7 M$ accordés à 30 organismes québécois de coopération internationale afin d’appuyer la réalisation de projets visant à réduire les effets de la COVID-19...</p>
      </div>
        
      <div class="nouvelles-cartes">
        <p class="nouvelles-intertitre">Communiqué pour publication immédiate</p>
        <img src="https://i.imgur.com/HC3nNVO.jpg" alt="" class="nouvelle2">
        <p class="nouvelles-description">10 nov. 2020<br><br>L’organisme Clowns Sans Frontières s’investit dans la défense des Droits de l’Enfant en soulignant la journée internationale qui se tient le 20 novembre...</p>
       </div>
      
      <div class="nouvelles-cartes">
        <p class="nouvelles-intertitre">Journée Mondiale du nettoyage de notre planète</p>
        <img src="https://i.imgur.com/AkHEpZ9.jpg" alt="" class="nouvelle3">
        <p class="nouvelles-description">9 oct. 2020<br><br>160 pays ont répondu présents à ce rendez-vous planétaire, le plus grand mouvement d’action citoyenne au Monde en 2020...</p>
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
          <p class="temoignage-description1">C’est ainsi que s’organise, la première mission de Payasos Sin Fronteras (Clowns Sans Frontières – Espagne) dans les camps de réfugiés de Veli Joseph...</p>
          <p class="temoignage-intertitre2">Un mouvement</p>
        <p class="temoignage-description2">Quelques mois plus tard, la balle est lancée et Clowns Sans Frontières Canada prend son envol...</p>
        <button class="bouton-savoir-plus">En savoir plus</button>
      </div>
    </div>
    
  </div>
  
  
  <div class="bloc-animation">
  <div class="img-don"> </div>
<button class="bouton-don-bloc-don">FAIRE UN DON</button>
<a class="titre-don">Aidez une bonne cause</a>
  <a class="txt-don">Tous les dons récoltés permettent de déployer nos artistes bénévoles professionnels et de donner des spectacles gratuits.</a>  
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


get_footer(); // Affiche footer.php 
?>