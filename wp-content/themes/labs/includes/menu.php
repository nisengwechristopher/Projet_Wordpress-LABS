<?php
/**
 * Creation des menus
 */

class labsMenus {

    /** Ajout du menu menu */
    public static function create_menu() {
        register_nav_menu('menu-principal', 'Le menu principal dans le header.');
    }

    /**
     * Permet de appliquer la classe 'active' sur le lien dans le menu >< à la page en cours
     * Source : https://stackoverflow.com/questions/26789438/how-to-add-active-class-to-wp-nav-menu-current-menu-item-simple-way
     */
    public static function special_nav_class ($classes) {
        if (in_array('current-menu-item', $classes) ) {
            $classes[] = 'active';
        }
        return $classes;
    }
}
add_action('after_setup_theme', [labsMenus::class, 'create_menu']);
add_filter('nav_menu_css_class' , [labsMenus::class, 'special_nav_class'] , 10 , 2);
