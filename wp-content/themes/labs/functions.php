<?php

    // pour recupéer mes fichiers dans le repo includes de manière dynamique
    define ('LABS_DIRECTORY', get_template_directory() . '/includes/');

    require_once(LABS_DIRECTORY . 'enqueue-script.php');
    require_once(LABS_DIRECTORY . 'customizer.php');
    require_once(LABS_DIRECTORY . 'menu.php');