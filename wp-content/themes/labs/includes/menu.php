<?php
/**
 * Creation des menus
 */

class labsMenus {
    /** Ajout du menu menu */
    public static function create_menu() {
        register_nav_menu('menu-principal', 'Le menu principal dans le header.');
    }

    /** Ajout des classes pour les li */
    public static function add_classes_li($classes, $item, $args){
        if ($args->theme_location == 'menu-principal') {
            $classes[] = 'active';
        }
        return $classes;
    }
}
add_action('after_setup_theme', [labsMenus::class, 'create_menu']);
add_filter('nav_menu_css_class', [labsMenus::class, 'add_classes_li'], 1, 3);


