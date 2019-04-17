<?php

    // pour recupéer mes fichiers dans le repo includes.
    define ('LABS_DIRECTORY', get_template_directory() . '/includes/');

    // pour récuperer mes images
    define ('LABS_IMG', 'wp-content/themes/labs/img/');


    require_once(LABS_DIRECTORY . 'enqueue-script.php');
    require_once(LABS_DIRECTORY . 'customizer.php');
    require_once(LABS_DIRECTORY . 'menu.php');