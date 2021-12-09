<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>



<header class="main-header">
    <a href="https://snncsf.go.yj.fr/"><img class="logo-menu" src="https://github.com/shnicovelli/SNN_Clown/blob/main/sources/medias/ClownSansFrontieresLogo.png?raw=true" alt="logo__csf"></a>
    <nav>
      
      <?php 

       wp_nav_menu(array('theme_location' => 'main-menu',

                                'container' => 'ul',

                                'menu_class' => 'navlinks',

                            ));
                            
        ?>
      
    </nav>
    <a href="https://www.clownssansfrontieres.ca/donner/" class="liens-menu"><button class="bouton-menu">FAIRE UN DON</button></a>
  </header>




<main><!-- Débute le contenu principal de notre site -->
