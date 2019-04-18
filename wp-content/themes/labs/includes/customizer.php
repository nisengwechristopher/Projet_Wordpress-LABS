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
      * 
      * Personnalisation dans le carroussel, le logo et les images.
      * La page de reference == templates/intro_section.php.
      *
      */
    static public function modification_header($wp_customize) {
        // Panel - personnalisation dans le fichier intro_section.php
        $wp_customize->add_panel('panel-header',[
            'title' => __('Modification Carrousel'),
            'description' => __('Personnalisation du Caroussel'),
        ]);
        
        // Sections de personnalisation pour le logo et les images dans intro_section.php
        $wp_customize->add_section('section-header-logo',[
            'panel' => 'panel-header',
            'title' => __('Personnalisation du logo caroussel'),
            'description' => __('Modification du logo peut se faire par une image / du texte'),
        ]);
        $wp_customize->add_section('section-header-images',[
            'panel' => 'panel-header',
            'title' => __('Personnalisation des images caroussel'),
            'description' => __('Modification du logo peut se faire par une image / du texte'),
        ]);

        // Setting personnalisation du logo et des images du fichier intro_section.php
        $wp_customize->add_setting('setting-header-logo');
        $wp_customize->add_setting('setting-header-image-1');
        $wp_customize->add_setting('setting-header-image-2');

        // Controls personnalisation du logo et des images du fichier intro_Section.php
        $wp_customize->add_control(new WP_Customize_Image_Control (
            $wp_customize, 'setting-header-logo', [
                'section' => 'section-header-logo',
                'label' => __('Modification du logo'),
            ]
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control (
            $wp_customize, 'setting-header-image-1', [
                'section' => 'section-header-images',
                'label' => __('Modification de l\'image n°1 du caroussel' ),
            ]
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control (
            $wp_customize, 'setting-header-image-2', [
                'section' => 'section-header-images',
                'label' => __('Modification de l\'image n°2 du caroussel' ),
            ]
        ));

    }

    /**
      * 
      * Personnalisation dans le carroussel, le logo et les images.
      * La page de reference == templates/intro_section.php.
      *
      */
      public static function modification_about($wp_customize){
          
      }
 }
 add_action('customize_register', [labsCustomizer::class, 'modification_header']);