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

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>


<!-- HÉROS ÉQUIPE -->
<p class="titre-heros-equipe">Équipe</p>
<img src="https://raw.githubusercontent.com/shnicovelli/SNN_Clown/main/sources/medias/Equipe_Heros.jpeg" alt="" class="image-heros-equipe">
<p class="texte-equipe">Depuis 1994, l’association artistique et humanitaire Clowns Sans Frontières organise des spectacles et des ateliers gratuits pour offrir un soutien moral et émotionnel aux populations victimes de la guerre, de la misère ou de l’exclusion. Sans
discrimination politique, ethnique ou religieuse, les artistes apportent des moments de rire et de rêve dans les camps de
réfugiés, les bidonvilles, les centres de détention pour mineurs, les orphelinats, les communautés autochtones, les centre
jeunesse et autres lieux où la culture peine à respirer.
</p>

<!-- BLOC ÉQUIPE1 -->
<div class="main-equipe">
  
 <div class="equipe-wrapper"> 
  <div class="equipe-cartes">
     <p class="equipe-intertitre">Mitch</p>
     <p class="equipe-description">Directeur général et artistique</p>
     <img src="https://i.imgur.com/nONxIZn.jpg" alt="" class="equipe1">
     <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#mitch">Bio</button>
  </div>

  <div class="equipe-cartes">
     <p class="equipe-intertitre">Tood</p>
     <p class="equipe-description">Adjoint à la direction</p>
     <img src="https://i.imgur.com/xGZ72kE.jpg" alt="" class="equipe2">
     <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#tood">Bio</button>
  </div>

  <div class="equipe-cartes">
      <p class="equipe-intertitre">Lesley</p>
      <p class="equipe-description">Responsable du Comité</p>
      <img src="https://i.imgur.com/pcKpLLG.jpg" alt="" class="equipe3">
      <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#lesley">Bio</button>
  </div>
 </div>
     
</div>


<!-- BLOC ÉQUIPE2 -->
<div class="main-equipe">
  
 <div class="equipe-wrapper"> 
  <div class="equipe-cartes">
     <p class="equipe-intertitre">Courtney</p>
     <p class="equipe-description">Administratrice du site web</p>
     <img src="https://i.imgur.com/JTtnUGu.jpg" alt="" class="equipe1">
     <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#courtney">Bio</button>
  </div>

  <div class="equipe-cartes">
     <p class="equipe-intertitre">Claudio</p>
     <p class="equipe-description">Soutien technique</p>
     <img src="https://i.imgur.com/ysaa1PK.jpg" alt="" class="equipe2">
     <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#claudio">Bio</button>
  </div>

  <div class="equipe-cartes">
      <p class="equipe-intertitre">Jean</p>
      <p class="equipe-description">Soutien graphisme</p>
      <img src="https://i.imgur.com/1RbtHEU.jpg" alt="" class="equipe3">
      <button class="bouton-equipe-bio" data-bs-toggle="modal" data-bs-target="#jean">Bio</button>
  </div>
 </div>
     
</div>


<!-- MODAL MITCH -->
  <div class="modal fade" id="mitch" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Mitch - Directeur général et artistique</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/nONxIZn.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL TOOD -->
  <div class="modal fade" id="tood" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Tood - Adjoint à la direction</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/xGZ72kE.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL LESLEY -->
  <div class="modal fade" id="lesley" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Lesley - Responsable du Comité</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/pcKpLLG.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL COURTNEY -->
  <div class="modal fade" id="courtney" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Courtney - Administratrice du site web</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/JTtnUGu.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL CLAUDIO -->
  <div class="modal fade" id="claudio" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Claudio - Soutien technique</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/ysaa1PK.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL JEAN -->
  <div class="modal fade" id="jean" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Jean - Soutien graphisme</h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="https://i.imgur.com/1RbtHEU.jpg" alt="" class="equipe1">
          <p class="texte-lorem-modal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>