<?php


/**
 * pour recupéer mes fichiers dans le repo includes de manière dynamique
 * pour récuperer mes images de manière dynamique
 */
    define ('LABS_DIRECTORY', get_template_directory() . '/includes/');

    define ('LABS_IMG', get_template_directory_uri() . '/img/');


/**
 * recupération des autres functions, placées dans d'autres fichiers
 * includes/enqueue-script.php pour les styles et scripts.
 * includes/customizer.php pour les customizers permettant d'apporter des modifications directemet sur la page.
 * includes/nemu.php pour les menus 
 */
    require_once(LABS_DIRECTORY . 'enqueue-script.php');
    require_once(LABS_DIRECTORY . 'customizer.php');
    require_once(LABS_DIRECTORY . 'menu.php');


/**
 * funtion pour n'afficher qu'une partie du contenu du post (elle affiche les 318 premiser charactères)
 * Utilisée dans le fichier page_section.php
 */
    function get_excerpt() {
        $excerpt = get_the_content();
        $excerpt = preg_replace(" ([.*?])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, 318);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        return $excerpt;
    }
