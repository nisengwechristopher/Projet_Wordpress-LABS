<?php

    // pour recupéer mes fichiers dans le repo includes de manière dynamique
    define ('LABS_DIRECTORY', get_template_directory() . '/includes/');

    // pour récuperer mes images de manière dynamique
    define ('LABS_IMG', get_template_directory_uri() . '/img/');

    
    require_once(LABS_DIRECTORY . 'enqueue-script.php');
    require_once(LABS_DIRECTORY . 'customizer.php');
    require_once(LABS_DIRECTORY . 'menu.php');

