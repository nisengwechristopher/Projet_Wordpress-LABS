 <?php

/**
 * Pour la modification du logo dans le preloader et sur le site.
 * La page de reference == header.php
 * */
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    )
);

/**
 * function pour ajouter dans les posts et pages une image vignette (thumbnail).
 */
add_theme_support('post-thumbnails');


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
            $wp_customize, 'setting-header-image-2',
            [
                'section' => 'section-header-images',
                'label' => __('Modification de l\'image n°2 du caroussel' ),
            ]
        ));

    }




     /**
      * 
      * Personnalisation dans la section about: titre, texte, video & bouton.
      * La page de reference == templates/about_section.php.
      *
      */
      public static function modification_about($wp_customize){

        // Panel - personnalisation dans le fichier about_section.php
        $wp_customize->add_panel('panel-about',[
            'title' => __('Modification de la section à propos'),
            'description' => __('Modification de la section à propos le contenu texte et la vidéo'),
        ]);

        // Sections de personnalisation pour le contenu de type texte dans le fichier about_section.php
        $wp_customize->add_section('section-about-texte',[
            'panel' => 'panel-about',
            'title' => __('Personnalisation pour le contenu de type texte'),
            'description' => __('Modification du titre, des deux paragraphes et du bouton'),
        ]);
        $wp_customize->add_section('section-about-video',[
            'panel' => 'panel-about',
            'title' => __('Personnalisation de la video'),
            'description' => __('Personalisation de la video via un url'),
        ]);

        // Setting personnalisation du titre, texte, video & bouton du fichier about_section.php
        $wp_customize->add_setting('setting-about-titre', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-titre-bg', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-titre-end', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-paragraphe-1', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-paragraphe-2', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-bouton', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-about-video', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Controls personnalisation du titre, texte, video & bouton du fichier about_section.php
        $wp_customize->add_control('control-about-titre',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-titre',
            'label' => __('Modification du titre avent la partie mise en évidence'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-titre-bg',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-titre-bg',
            'label' => __('Modification du titre pour la partie mise en évidence.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-titre-end',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-titre-end',
            'label' => __('Modification du titre après la partie mise en évidence.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-paragraphe-1',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-paragraphe-1',
            'label' => __('Modification du premier paragraphe'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-paragraphe-2',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-paragraphe-2',
            'label' => __('Modification du deuxième paragraphe'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-bouton',[
            'section' => 'section-about-texte',
            'settings' => 'setting-about-bouton',
            'label' => __('Modification du bouton'),
            'type' => ''
        ]);
        $wp_customize->add_control('control-about-video',[
            'section' => 'section-about-video',
            'settings' => 'setting-about-video',
            'label' => __('Modification de la video'),
            'type' => 'textarea'
        ]);
    }



    /**
     * 
     * Personnalisation de la section testimonials, le contenu type textes.
     * Les temoignages doivent venir des commentaires des clients avec leur photo.
     * La page de reference == templates/testimonial_section.php.
     * 
     */
     public static function modification_testimonial ($wp_customize) {

        // Panel - personnalisation dans le fichier testimonial_section.php
        $wp_customize->add_panel('panel-testimonial',[
            'title' => __('Modification de la section temoignages'),
            'description' => __('Modification du titre de la section temoignages'),
        ]);

        // Sections de personnalisation pour le contenu de type texte dans le fichier testimonial_section.php
        $wp_customize->add_section('section-testimonial-texte',[
            'panel' => 'panel-testimonial',
            'title' => __('Personnalisation du titre'),
            'description' => __('Modification du titre'),
        ]);
        $wp_customize->add_section('section-testimonial-bouton',[
            'panel' => 'panel-testimonial',
            'title' => __('Personnalisation du bouton'),
            'description' => __('Modification du bouton'),
        ]);

        // Setting personnalisation du titre, dans le fichier testimonial_section.php
        $wp_customize->add_setting('setting-testimonial-titre', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-testimonial-bouton', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Controls personnalisation du titre dans le fichier testimonial_section.php
        $wp_customize->add_control('control-testimonial-titre',[
            'section' => 'section-testimonial-texte',
            'settings' => 'setting-testimonial-titre',
            'label' => __('Modification du titre'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-bouton',[
            'section' => 'section-testimonial-bouton',
            'settings' => 'setting-testimonial-bouton',
            'label' => __('Modification du bouton'),
            'type' => ''
        ]);

    }



    /**
     * 
     * Personnalisation de la section service, le titre (et les icones eventuellement)
     * La page de reference == templates/services_section.php.
     * 
     */
    public static function modification_services ($wp_customize) {

        // Panel - personnalisation dans le fichier services_section.php
        $wp_customize->add_panel('panel-services',[
            'title' => __('Modification de la section services'),
            'description' => __('Modification de la section à propos le contenu texte et la vidéo'),
        ]);

        // Sections de personnalisation pour le contenu de type texte dans le fichier services_section.php
        $wp_customize->add_section('section-services-texte',[
            'panel' => 'panel-services',
            'title' => __('Personnalisation pour le contenu de type texte'),
            'description' => __('Modification du titre'),
        ]);

        // Setting personnalisation du titre dans le fichier services_section.php
        $wp_customize->add_setting('setting-services-titre', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-services-titre-bg', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-services-titre-end', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Controls personnalisation du titre dans services_section.php
        $wp_customize->add_control('control-services-titre',[
            'section' => 'section-services-texte',
            'settings' => 'setting-services-titre',
            'label' => __('Modification du titre avent la partie mise en évidence'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-about-titre-bg',[
            'section' => 'section-services-texte',
            'settings' => 'setting-services-titre-bg',
            'label' => __('Modification du titre pour la partie mise en évidence.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-services-titre-end',[
            'section' => 'section-services-texte',
            'settings' => 'setting-services-titre-end',
            'label' => __('Modification du titre après la partie mise en évidence.'),
            'type' => 'textarea'
        ]);

    }



    /**
     * 
     * Personnalisation de la section team, le titre et les cartes.
     * Le membre de l'équipe eu centrev (manager) reste toujours au centre malgré les modifications.
     * La page de reference == templates/team_section.php.
     * 
     */
    public static function modification_team ($wp_customize) {

        // Panel - personnalisation dans le fichier team_section.php
        $wp_customize->add_panel('panel-team',[
            'title' => __('Modification de la section team'),
            'description' => __('Modification de la section team le contenu texte et imges'),
        ]);

        // Sections de personnalisation poure titre dans le fichier team_section.php
        $wp_customize->add_section('section-team-titre',[
            'panel' => 'panel-team',
            'title' => __('Personnalisation du titre'),
            'description' => __('Modification du titre'),
        ]);

        // Setting personnalisation du titre, texte team_section.php
        $wp_customize->add_setting('setting-team-titre', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-team-titre-bg', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-team-titre-end', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Controls personnalisation du titre dans le fichier team_section.php
        $wp_customize->add_control('control-team-titre',[
            'section' => 'section-team-titre',
            'settings' => 'setting-team-titre',
            'label' => __('Modification du titre avent la partie mise en évidence'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-team-titre-bg',[
            'section' => 'section-team-titre',
            'settings' => 'setting-team-titre-bg',
            'label' => __('Modification du titre pour la partie mise en évidence.'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-team-titre-end',[
            'section' => 'section-team-titre',
            'settings' => 'setting-team-titre-end',
            'label' => __('Modification du titre après la partie mise en évidence.'),
            'type' => 'textarea'
        ]);
    }



  /**
     * 
     * Personnalisation de la section google maps
     * selon le lieu choisi par l'utilisateur.
     * La page de reference == templates/google_maps.php.
     * 
     */
    public static function modification_maps ($wp_customize) {

        // Panel - personnalisation dans le fichier google_maps.php
        $wp_customize->add_panel('panel-maps', [
            'title' => __('Modification de la localisation'),
            'description' => __('Modification dans Conact, google maps'),
        ]);

        // Section de personnalisation de la localisation : google_maps.php
        $wp_customize->add_section('section-maps',[
            'panel' => 'panel-maps',
            'title' => __('Personnalisation de la Géolocalisation'),
            'description' => __('Modification de la Géolocalisation'),
        ]);


        // Section de personnalisation de la localisation : google_maps.php
        $wp_customize->add_setting('setting-maps', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Control de personnalisation de la localisation : google_maps.php
        $wp_customize->add_control('control-maps',[
            'section' => 'section-maps',
            'settings' => 'setting-maps',
            'label' => __('Modification de la Géolocalisation. Copier le lien qui permet d\'intégrer une carte directement de google maps'),
            'type' => 'textarea'
        ]);
    }



    /**
     * Personnalisation du footer
     * Le contenu de type texte devient modifiable
     * ..trouver le moyen de reprendre l'adresse à partir de la carte google 
     */

     public static function modification_footer($wp_customize) {

        // Panel - personnalisation dans le fichier google_maps.php
        $wp_customize->add_panel('panel-footer', [
            'title' => __('Modification en bas de page'),
            'description' => __('Modification dans Conact, google maps'),
        ]);

        // Section de personnalisation de la localisation : google_maps.php
        $wp_customize->add_section('section-footer',[
            'panel' => 'panel-footer',
            'title' => __('Personnalisation du contenu de type texte'),
            'description' => __('Personnalisation du contenu de type texte'),
        ]);

        // Sections de personnalisation de la localisation : google_maps.php
        $wp_customize->add_setting('setting-footer-title', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-footer-us', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-footer-mail', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-footer-address-street', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-footer-address-city', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);
        $wp_customize->add_setting('setting-footer-number', [
            'type' => 'theme_mod',
            'transport' => 'refresh',
        ]);

        // Controls de personnalisation de la localisation : google_maps.php
        $wp_customize->add_control('control-footer-titre',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-title',
            'label' => __('Personnalisation du contenu à propos, le titre de la partie à propos'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-footer-us',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-us',
            'label' => __('Personnalisation du contenu à propos, quelques mots sur nous'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-footer-mail',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-mail',
            'label' => __('Personnalisation du contenu à propos, quelques mots sur nous'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-footer-address-street',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-address-street',
            'label' => __('Personnalisation de l\'adresse : RUE'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-footer-address-city',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-address-city',
            'label' => __('Personnalisation de l\'adresse : VILLE'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('control-footer-number',[
            'section' => 'section-footer',
            'settings' => 'setting-footer-number',
            'label' => __('Personnalisation du numéro de contact'),
            'type' => 'textarea'
        ]);
     }
 }
 add_action('customize_register', [labsCustomizer::class, 'modification_header']);
 add_action('customize_register', [labsCustomizer::class, 'modification_about']);
 add_action('customize_register', [labsCustomizer::class, 'modification_testimonial']);
 add_action('customize_register', [labsCustomizer::class, 'modification_services']);
 add_action('customize_register', [labsCustomizer::class, 'modification_team']);
 add_action('customize_register', [labsCustomizer::class, 'modification_maps']);
 add_action('customize_register', [labsCustomizer::class, 'modification_footer']);
