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

/**
 * VIEWS FUNCTIONS
 */

    /** Function pour afficher le contenu de la page Emails */
    function newsletter_management() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        ?>
        <div class="wrap">
            <h1>Newsletter Settings</h1>

            <form method="post" action="options.php" novalidate="novalidate">
                <input type="hidden" name="option_page" value="general">
                <input type="hidden" name="action" value="update">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="d4d3f8b751">
                <input type="hidden" name="_wp_http_referer" value="/Projet_Wordpress-LABS/wp-admin/options-general.php">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="default_role">New User Default Role</label>
                            </th>
                            <td>
                                <select name="default_role" id="default_role">
                                    <option selected="selected" value="subscriber"><?= __('New Subscriber') ?></option>
                                    <option value="contributor"><?= __('Already Subscribed') ?></option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
                </p>
            </form>
        </div>
    <?php }


    /** Function pour afficher le contenu de la page Emails */
    function email_mamagement (){
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'Vous n\'avez pas de consulter cette page.' ) );
        }
        ?>
        <div class="wrap">
            <h1>Mail Settings</h1>

            <form method="post" action="options.php" novalidate="novalidate">
                <input type="hidden" name="option_page" value="general">
                <input type="hidden" name="action" value="update">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="d4d3f8b751">
                <input type="hidden" name="_wp_http_referer" value="/Projet_Wordpress-LABS/wp-admin/options-general.php">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="default_role">New User Default Role</label>
                            </th>
                            <td>
                                <select name="default_role" id="default_role">
                                    <option selected="selected" value="subscriber">Subscriber</option>
                                    <option value="contributor">Contributor</option>
                                    <option value="author">Author</option>
                                    <option value="editor">Editor</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
                </p>
            </form>
        </div>
        <p><?= get_template_directory_uri()?></p>

    <?php }
}

add_action('admin_menu', [add_custom_pages::class,'newsletter_page']);
add_action('admin_menu', [add_custom_pages::class, 'emails_page']);
