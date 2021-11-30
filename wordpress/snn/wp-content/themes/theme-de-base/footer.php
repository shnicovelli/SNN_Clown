<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>


<footer class="main-footer">
	    
<div class="bloc-infos">
      <a href="home"><img src="https://i.imgur.com/oOf9Re2.png" alt="" class="clown-logo"></a>
      <div class="information">
        <p class="contactez">Contactez-nous</p>
        <a href="https://www.google.com/maps/place/105+Rue+Ontario+E+bureau+203,+Montr%C3%A9al,+QC+H2X+1G9/@45.5124354,-73.5690497,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a4b866f35cd:0x6ec4d6b9aa9231bd!8m2!3d45.5124317!4d-73.566861"><p class="adresse lien-footer">105 rue Ontario Est, bureau 203</p></a>
        <p class="couriel">contact@clownssansfrontieres.ca</p>
        <p class="telephone">514-495-1287</p>
      </div>
    </div>
  
    <div class="bloc-don">
      <a href="don.html"><button class="bouton-don-footer">FAIRE UN DON</button></a>
    </div>
    
    <div class="bloc-partenaires">
      <p class="partenaires">Partenaires</p>
        <div class="images-partenaires">
          <div class="fond-partenaires">
            <a href="https://tohu.ca/fr">
              <img src="https://i.imgur.com/stCWYR2.png" alt="" class="partenaire-tohu">
            </a>
          </div>
          <div class="fond-partenaires">
            <a href="https://sda-angus.com/">
              <img src="https://i.imgur.com/OgYOvet.png" alt="" class="partenaire-angus">
            </a>
          </div>
          <div class="fond-partenaires">
            <a href="https://www.holtrenfrew.com/fr">
              <img src="https://i.imgur.com/tOzGEZ8.png" alt="" class="partenaire-holt">
            </a>
          </div>
          <div class="fond-partenaires">
            <a href="https://groupecanva.com/">
              <img src="https://i.imgur.com/N2Xie92.png" alt="" class="partenaire-canvas">
            </a>
          </div>
     </div>
    </div>
    
    <p class="copyright">©2021 Clown Sans Frontières - SNN</p>
    

</footer>
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>