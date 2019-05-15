<?php
/**
 * @package Hello_Dolly
 * @version 1.7.1
 */
/*
Plugin Name: Labs
Description: This is a plugin that adds functionalities to the labs theme .. Newsletter and EMail systeme.
Author: Nisengwe Christopher
Version: 0.1.0
*/

/**
 * Variables globales
 * Utilié dans par les functions newsletter/icones/mails_management
 * .. afin de l'envoyer sur les pages dans views
 */

$plugin_url = WP_PLUGIN_URL . '/labs';




/**
 * La Newsletter va regroupper tous les mails des utilisateurs du site et permet à l'admin de communiquer avec eux.
 * La Page Mails permettera au l'admin de recevoir de gérer les mails reçu
 */


class add_custom_pages {

    /** Création de la page pour gérer les icones */
    public static function icons_page() {
        add_menu_page(
            'icones',
            'Icones',
            'manage_options',
            'icones-slug',
            [self::class, 'icones_mamagement'],
            'dashicons-admin-customizer',
            '26');
    }

    /** Création de la page pour gérer les Newsletters */
    public static function newsletter_page() {
        add_menu_page(
            'newsletter',
            'Newsletter',
            'manage_options',
            'newsletter-slug',
            [self::class, 'newsletter_management'],
            'dashicons-list-view',
            '26');
    }
    /** Création de la page pour gérer les Newsletters */
    public static function emails_page() {
        add_menu_page(
            'emails',
            'Emails',
            'manage_options',
            'emails-slug',
            [self::class, 'email_mamagement'],
            'dashicons-email',
            '26');
    }

    /**
     * Functions permettent d'afficher les pages selon les droits definies dans les functions du dessus > les add_menu_page.
     * Elle affiche en récupérant les views dans le dir views. Pour les icones, la newsletter et les mails.
     * 
     * IMPORTANT LA CONDITION 'manage_options' CORRESPOND AU DROITS LISTÉ PLUS HAUT DANS LES ADD_MENU_PAGE.
     * 
     */

    /** Function pour afficher le contenu de la page Newsletter */
    public static function newsletter_management() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        //permet d'utiliser la variable globale dans le fichier récupéré par la function require
        global $plugin_url;
        require( 'views/newsletter-wrapper.php' );
        }


    /** Function pour afficher le contenu de la page Emails */
    public static function email_mamagement (){
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        //permet d'utiliser la variable globale dans le fichier récupéré par la function require
        global $plugin_url;
        require( 'views/email-wrapper.php' );
        }


    /** Function pour afficher le contenu de la page Icones */
    public static function icones_mamagement () {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        //permet d'utiliser la variable globale dans le fichier récupéré par la function require
        global $plugin_url;
        require( 'views/icon-wrapper.php' );
        }
}

add_action('admin_menu', [add_custom_pages::class,'newsletter_page']);
add_action('admin_menu', [add_custom_pages::class, 'emails_page']);
add_action('admin_menu', [add_custom_pages::class, 'icons_page']);





/**
 * 
 * Function pour ajouter le style s'appliquant dans l'environement du plugin.
 * 
 */

class pluginStyle {
    public static function plugin_style () {
        wp_enqueue_style('personal-plugin-style', WP_PLUGIN_URL . '/labs/assets/css/cn-plugin-style.css');
        wp_enqueue_style('fontawesome-plugin', WP_PLUGIN_URL . '/labs/assets/fontawesome-free/css/all.css');
        wp_enqueue_style('flaticon-plugin', WP_PLUGIN_URL . '/labs/assets/css/flaticon.css');
    }
}
add_action('admin_menu', [pluginStyle::class, 'plugin_style']);