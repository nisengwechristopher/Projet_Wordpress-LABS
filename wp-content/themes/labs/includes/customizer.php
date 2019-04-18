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
            'title' => __('Modification Carrousel'),
            'description' => __('Personnalisation du Caroussel'),
        ]);

        $wp_customize->add_section('section-header-logo',[
            'panel' => 'panel-header',
            'title' => __('Personnalisation logo'),
            'description' => __('Modification du logo peut se faire par une image / du texte'),
        ]);

        
        $wp_customize->add_setting('setting-header-logo');

        $wp_customize->add_control(new WP_Customize_Image_Control (
            $wp_customize, 'setting-header-logo', [
                'section' => 'section-header-logo',
                'label' => __('Modification du texte'),
            ]
        ));

    }
 }
 add_action('customize_register', [labsCustomizer::class, 'modification_header']);