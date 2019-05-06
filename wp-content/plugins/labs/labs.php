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
 * La Newsletter va regroupper tous les mails des utilisateurs du site et permet à l'admin de communiquer avec eux.
 * La Page Mails permettera au l'admin de recevoir de gérer les mails reçu
 */


class add_custom_pages {

    /** Création de la page pour gérer les Newsletters */
    function newsletter_page() {
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
    function emails_page() {
        add_menu_page(
            'emails',
            'Emails',
            'manage_options',
            'emails-slug',
            [self::class, 'email_mamagement'],
            'dashicons-email',
            '26');
    }


    /** Function pour afficher le contenu de la page Emails */
    function newsletter_management() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        echo 'Hello world';
    }
    /** Function pour afficher le contenu de la page Emails */
    function email_mamagement (){
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        echo 'Hello world';
    }
}

add_action('admin_menu', [add_custom_pages::class,'newsletter_page']);
add_action('admin_menu', [add_custom_pages::class, 'emails_page']);
