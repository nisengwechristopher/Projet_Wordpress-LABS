 <?php

/**
 * Pour la modification du logo dans le preloader et sur le site.
 * */
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    )
);

/**
 * Pour modifier le texte dans le menus en haut de page et voir changements dans les 'templates : page_header.php'selon 
 */
 class labsCustomizer {
     /**
      * Personnalisation dans le header
      */

    static public function modification_header($wp_customize) {

        $wp_customize->add_panel('panel-header',[
            'title' => __('Modification du header'),
            'description' => __('Personnalisation de la section header'),
        ]);

        $wp_customize->add_section('section-header-logo',[
            'panel' => 'panel-header',
            'titre' => __('Personnalisation logo'),
            'description' => __('Modification du logo peut se faire par une image / du texte'),
        ]);

        
        $wp_customize->add_setting('setting-header-logo', [
            'type' => 'theme_mod',
            'transport' => 'refresh'
        ]);

        $wp_customize->add_control('control-header-logo', [
            'section' => 'section-header-logo',
            'settings' => 'setting-header-logo',
            'label' => __('Modification du logo'),
            'description' => __('Personnalisez le logo se trouvant en haut & à gauche de la page'),
            'type' => '',
        ]);
    }
 }
 add_action('customize_register', [labsCustomizer::class, 'modification_header']);